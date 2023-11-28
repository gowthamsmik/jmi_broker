<?php

function get_profile()
{
        echo "<script>
        $.getJSON('https://ipinfo.io/json', function(result) {
                  $location = result.city;
        }); </script>";
        $user=website_accounts::where('username',$session_user)->Orwhere('email',$session_user)->get()->first();
        $notifications_all=Notifications::where('website_accounts_id',$user->id)->orderBy('id','desc')->take(8)->get()->all();
        $notifications_unseen=Notifications::where('website_accounts_id',$user->id)->where('notification_status',0)->get()->all();
   
}

function post_profile()
{
        $input=$_REQUEST;

        $session_user= Session::get('user');
        $user=website_accounts::where('username',$session_user)->Orwhere('email',$session_user)->get()->first();
        $notifications_all=Notifications::where('website_accounts_id',$user->id)->orderBy('id','desc')->take(8)->get()->all();
        $notifications_unseen=Notifications::where('website_accounts_id',$user->id)->where('notification_status',0)->get()->all();
        $documents=website_accounts::find($user->id)->documents;

        if($user->email !== $input['email']){
            $this->validate(Request(), [
                'email' => 'required|min:5|max:40|email|unique:website_accounts',
            ]);
            $user->email_status=0;
        }
        if($user->username !== $input['username']){
            $this->validate(Request(), [
                'username' => 'required|unique:website_accounts|min:6|max:40|regex:/^[a-zA-Z0-9]*$/',
            ]);
        }
        if($user->mobile !== $input['mobile']){

                $user->mobile_status=0;
        }



        $this->validate(Request(), [
            'title' => 'required|regex:/^[0-9]*$/|min:1|max:3',
            'fullname' => 'required|alpha_spaces',
            'gender' => 'required|regex:/^[0-9]*$/|',
            'birthday' => 'required|regex:/^[0-9]*$/|',
            'birthmonth' => 'required|regex:/^[0-9]*$/|',
            'birthyear' => 'required|regex:/^[0-9]*$/|',
            'address1' => 'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'address2' => 'regex:/(^[-0-9A-Za-z.,\/ ]+$)/',
            'town_city' => 'required|alpha_spaces|',
            'post_code' => 'required|regex:/^[0-9]*$/|',
            'country' => 'required|alpha_spaces|',
            'countryCode' => 'required|regex:/^[0-9]*$/|',
            'home' => 'required|regex:/^[0-9]*$/|',
            'mobile' => 'regex:/^[0-9]*$/|',
            'employment_status' => 'required|regex:/^[0-9]*$/|',
            'nature_of_business' => 'required|regex:/^[0-9]*$/|',
            'annual_income' => 'required|regex:/^[0-9]*$/|',
            'net_worth' => 'required|regex:/^[0-9]*$/|',
        ]);


        $user->title=$input['title'];
        $user->fullname=$input['fullname'];
        $user->email=$input['email'];
        $user->username=$input['username'];
        $user->gender=$input['gender'];
        $user->birthday=$input['birthday'];
        $user->birthmonth=$input['birthmonth'];
        $user->birthyear=$input['birthyear'];
        $user->address1=$input['address1'];
        $user->address2=$input['address2'];
        $user->town_city=$input['town_city'];
        $user->post_code=$input['post_code'];
        $user->country=$input['country'];
        $user->country_code=$input['countryCode'];
        $user->home=$input['home'];
        $user->mobile=$input['mobile'];
        $user->employment_status=$input['employment_status'];
        $user->nature_of_business=$input['nature_of_business'];
        $user->annual_income=$input['annual_income'];
        $user->net_worth=$input['net_worth'];
        if($user->save()){
            Session::put('user', $input['username']);

                $notification=new Notifications;
                $notification->website_accounts_id=999999999;
                $notification->notification_status=0;
                $notification->notification=$input['email'].'Has Updated His Profile';
                $notification->notification_link='/spanel/website-accounts?&bymail='.$user->email.'&';
                $notification->save();


                $notification1=new Notifications;
                $notification1->website_accounts_id=$user->id;
                $notification1->notification_status=0;
                $notification1->notification='Your profile has been updated successfully';
                $notification1->details='Your profile has been updated successfully';
                $notification1->notification_ar='تم تحديث ملفك الشخصي بنجاح';
                $notification1->details_ar='تم تحديث ملفك الشخصي بنجاح';

                $notification1->notification_ru='Ваш профиль был успешно обновлен';
                $notification1->details_ru='Ваш профиль был успешно обновлен';

                $notification1->notification_link='/cpanel/profile';
                $notification1->save();


                // Mail::send('mails.new-test-mail',['fullname'=>$user->fullname], function($message)use($user){
                //     $message->to('backoffice@jmibrokers.com');
                //     $message->cc('bishoyadel2011@aol.com');
                //     $message->from('support@jmibrokers.com','JMI Brokers');
                //     $message->subject('Customer Account Agreement');
                //     //$message->attach(public_path().'/assets/user_documents/'.$newfilename.'.pdf');
                //
                // });




                    // Backup your default mailer
                    $backup = Mail::getSwiftMailer();
                    $data['title']=1;
                    $data['name']='Admin';
                    $data['details']='Name : '.$input['fullname'].'<br>'.'UserName : '.$input['username'].'<br>'.'Email : '.$input['email'].'<br>'.'Has Updated His Profile';
                    $subject=' Website Account Update';
                    Mail::to('support@jmibrokers.com')->send(new Queued($data,$subject));
                    // Restore your original mailer
                    Mail::setSwiftMailer($backup);



                              if(count($documents)< 1){
                                if( Request::segment(1) =='ar'){
                                    return Redirect::to('/ar/cpanel/documents');
                                }elseif( Request::segment(1) =='ru'){
                                    return Redirect::to('/ru/cpanel/documents');
                                }else{
                                    return Redirect::to('/en/cpanel/documents');
                                }
                              }


            if( Request::segment(1) =='ar'){
                return redirect('ar/cpanel/profile')->with('status-success', 'تم تحديث البيانات!');
            }elseif( Request::segment(1) =='ru'){
                return redirect('ru/cpanel/profile')->with('status-success', 'Профиль обновлен!');
            }else{
                return redirect('en/cpanel/profile')->with('status-success', 'Profile updated!');
            }


        }

}
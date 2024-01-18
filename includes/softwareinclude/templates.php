<?php
error_reporting(3);

function verificationEmailTemplate($token){
    global $siteurl;
    return '<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  </head>
  <body>
      <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
          <div>
              <img src="'.$siteurl.'assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
          </div>
          <img src="'.$siteurl.'assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
          <div style="padding: 0 5% 0 5% ;">
             

              <p>Here is the verification code for email verification:</p>
              <p style="font-family: Arial, sans-serif; font-size: 16px; color: #333; background-color: #f0f0f0; padding: 10px; text-align: center;font-size:50px">
                  '.$token.'
              </p>

  
              <h3 style="color:#07348f;">FOR ANY HELP</h3>
              <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                  or call us on: +971 44096705</p>
  
              <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
  
              <div class="display:flex;">
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
              </div>
  
              <h3 style="color:#07348f;">PAYMENT METHODS</h3>
  
              <div class="display:flex;">
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                  <a href="#"><img src="'.$siteurl.'assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
              </div>
  
              <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                  <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
              </a>
  
              <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
          </div>
          <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
              <div><img src="'.$siteurl.'assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
              <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
          </div>
      </div>
  </body>
  </html>';
  
}

function passwordResetTemplate($resetlink){
    return '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">

                <p>Here is the verification link for resetting your password:</p>
                <a href='.$resetlink.'
                            style="border: 0;
                            border-radius:10px;
                            background: #04001f;
                            color: #fff;
                            text-decoration: none;
                            padding: 0.25rem 1.5rem;
                            cursor: pointer;" >Reset Password</a>
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
}

function careerEmailTemplate($verificationUrl)
{
    return '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">

                <p>mails.careeruploadcvmail:'.$verificationUrl.'</php>
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
}

function bulkEmailTemplate($body,$titleToSend,$nameToSend){
    return '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">
                <h2 style="color:#07348f;">Hello <span>' .$titleToSend.'.'.$nameToSend.'</span></h2>

                <p>' . $body . '</p>
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
}
function documentUploadTemple($content){
    return '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div style="width: 660px;margin: 0 auto 0 auto;border: 1px solid none;color:black;">
            <div>
                <img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 40%;margin: 0 30%;">
            </div>
            <img src="https://jmibrokers.com/assets/images/img_mail_template/maintmp.jpg" alt="404" style="width: 100%; height: auto; ">
            <div style="padding: 0 5% 0 5% ;">
               
  
               <p>'.$content.'</p>
  
    
                <h3 style="color:#07348f;">FOR ANY HELP</h3>
                <p>Email us on: <a href="#">backoffice@jmibrokers.com</a> <br>
                    or call us on: +971 44096705</p>
    
                <p style="margin: 20px 0 20px 0;font-size: 14px;">You may follow us on our social media pages where you will find lots of information to help start trading</p>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/facebook.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/instagram.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/twitter.png" alt="404" style="height: 30px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <h3 style="color:#07348f;">PAYMENT METHODS</h3>
    
                <div class="display:flex;">
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/epay.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/payeer.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/moneygram.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/wu.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                    <a href="#"><img src="https://jmibrokers.com/assets/images/img_mail_template/swift.png" alt="404" style="height: 50px;margin: 20px 10px 20px 0;"></a>
                </div>
    
                <a href="www.jmibrokers.com" style="display: flex;text-decoration:none;">
                    <button style="background: black;padding: 20px 50px;color: #fff;outline: none;border:none;margin: 20px 36.3%;">jmibrokers</button>
                </a>
    
                <h5 style="color:#07348f; font: size 20px;">The only company that provides 500.00$ Financial Protection for traders</h5>
            </div>
            <div style="background: rgb(180, 180, 180);display: flex;padding: 20px 0;margin-bottom: 50px;">
                <div><img src="https://jmibrokers.com/assets/images/img_mail_template/logo.png" alt="404" style="width: 80%;margin-left: 20px;margin-top: 30px;"></div>
                <div><p>JMI Brokers LTD is a licensed Financial Services Provider from Vanuatu Financial Services Commission and authorized to carry business on Dealing in Securities under Vanuatu Financial Services Commission (VFSC)</p></div>
            </div>
        </div>
    </body>
    </html>';
}
?>
<?php if(!isset($_SESSION['sessionuser']))session_start() ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Downloads</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="partner-banner downloadfile-banner " style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(20, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
           <div class="partnerBannner-cont w-100  banner-pt1 banner-pb1 pdX8 text-center">
               <div class="banner-cont mn-hd mn-btn">
                  <h2 class="tx-white pb-4"><?php echo getPageMetaByIDKeyGroup(20,'Banner Heading 1','Banner');?></h2>
                  <p class="p-fs4 tx-white pdX5"><?php echo getPageMetaByIDKeyGroup(20,'Description','Banner');?></p>
                  <div class="banner-btn">
                     <a class="gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(20,'Banner Button URL','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(20,'Banner Button Text','Banner');?> 
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                              <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                     </a>
                     <a class="ol-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : '#'; ?>">Open Live Account</a>
                  </div>
               </div>
            </div>
        </div>
      </section>

      <section class="downloadfileSection1">
         <div class="container">
            <div class="dwfile-hd mn-hd hd-pad text-center">
               <h3 class="tx-blue">Download Documents</h3>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <a href="assets/Downloads/account_agreement.pdf" class="w-100" download="Customer Account Agreement">
                    <div class="dwfile-card">
                        <div class="dwfile-cardIcon">
                            <img src="assets/images/pdf.png" alt="">
                        </div>
    
                        <div class="dwfile-cardCont">
                            <h5>Customer Account Agreement</h5>
                        </div>
                    </div>
                  </a>
               </div>

               <div class="col-md-6">
                <a href="assets/Downloads/Expert_Advisor_Request.pdf" class="w-100" download="Expert Advisor Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Expert Advisor Request</h5>
                     </div>
                  </div>
                </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Funds_Transfer_Advice.pdf" class="w-100" download="Funds Transfer Advice">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Funds Transfer Advice</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Funds_Transfer_RequestTo_SubAccount.pdf" class="w-100" download="Funds Withdrawal Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Funds Withdrawal Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Funds_Withdrawal_Request.pdf" class="w-100" download="Password Change Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Password Change Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/IB_Questionnaire.pdf" class="w-100" download="Sub Account Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Sub Account Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Password_Change_Request.pdf" class="w-100" download="Trailing Stop Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Trailing Stop Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Power_of_attorney.pdf" class="w-100" download="Transfer Funds From Commission Account Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Transfer Funds From Commission Account Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Sub_Account_Request.pdf" class="w-100" download="Trailing Stop Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Sub Account Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Trailing_Stop_Request.pdf" class="w-100" download="Trailing Stop Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Trailing Stop Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

               <div class="col-md-6">
                   <a href="assets/Downloads/Transfer_Funds_From_Commission_Account_Request.pdf" class="w-100" download="Trailing Stop Request">
                  <div class="dwfile-card">
                     <div class="dwfile-cardIcon">
                        <img src="assets/images/pdf.png" alt="">
                     </div>

                     <div class="dwfile-cardCont">
                        <h5>Transfer Funds From Commission Account Request</h5>
                     </div>
                  </div>
                  </a>
               </div>

            </div>
         </div>
      </section>

      <?php include("includes/news-letter.php"); ?>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>
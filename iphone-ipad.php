<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Iphone Ipad</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php"); ?>
      <style>
        p{
            text-align:justify;
        }
    </style>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="partner-banner banner money-banner " style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(9, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
           <div class="partnerBannner-cont w-100  banner-pt1 pdX5">
               <div class="row align-items-center w-100">
                  <div class="col-md-6">
                     <div class="banner-cont mn-hd mn-btn">
                        <h2 class="tx-white"><?php echo getPageMetaByIDKeyGroup(9,'Banner Heading 1','Banner');?></h2>
                        <div class="banner-btn">
                           <a class="gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : '#'; ?>"><?php echo getPageMetaByIDKeyGroup(9,'Banner Button Text','Banner');?> 
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                                    <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                           </a>
                           <a class="ol-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : '#'; ?>"><?php echo getPageMetaByIDKeyGroup(9,'Live Button Text','Banner');?></a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="banner-img fs-0 mb-4">
                        <img src="cms/<?php echo getPageMetaByIDKeyGroup(9,'Banner Image','Banner');?>" alt="404" class="mb-5">
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </section>

      <section class="grey-section mrgbt androidSection1">
         <div class="container">
            <div class="pdX5">
               <div class="overviewSec-main padY2 page-section" id="overviews">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="overviewSecMain-cont mn-hd mn-btn">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(9,'Heading','Overview');?></h3>
                           <p class="tx-grey300 p-fs5"><?php echo getPageMetaByIDKeyGroup(9,'Description 1','Overview');?></p>
                           
                           <span class="p-fs2 bld d-block">Download App</span>

                           <ul class="applist">
                              <li>
                                 <a href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4&hl=en&refer[…]292009626949028%26server%3dJMIBrokers-Demo%252cJMIBrokers-JMI"><img src="assets/images/google-play.png" alt=""></a>
                              </li>
                              <li>
                                 <a href="https://apps.apple.com/us/app/metatrader-4/id496212596"><img src="assets/images/apple-store.png" alt=""></a>
                              </li>
                           </ul>

                           <em class="tx-grey300 p-fs5 w-85 d-block"><?php echo getPageMetaByIDKeyGroup(9,'Description 2','Overview');?></em>
                        </div>
                     </div>

                     <div class="col-md-6 text-center">
                        <div class="img-wapper">
                           <img class="mix-mode-multiply" src="cms/<?php echo getPageMetaByIDKeyGroup(9,'Image','Overview');?>" alt="">
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="overviewSecMain-cont mn-btn text-center pdT1">
                           <a class="gd-btn" href="download-file.php"><?php echo getPageMetaByIDKeyGroup(9,'Button Text','Overview');?></a>
                        </div>
                     </div>
                  </div>
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
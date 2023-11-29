<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Title Here</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="partner-banner money-banner ">
        <div class="container">
           <div class="partnerBannner-cont w-100  banner-pt1 banner-pb1 pdX5">
               <div class="row align-items-center w-100">
                  <div class="col-md-6">
                     <div class="banner-cont mn-hd mn-btn">
                        <h2 class="tx-white"><?php echo getPageMetaByIDKeyGroup(10,'Banner Heading 1','Banner');?></h2>
                        <div class="banner-btn">
                           <a class="gd-btn signUp" href="#"><?php echo getPageMetaByIDKeyGroup(10,'Banner Button Text','Banner');?> 
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                                    <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                           </a>
                           <a class="ol-btn loginUp" href="#">Open Live Account</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="banner-img text-center">
                        <img src="assets/images/banner/android.png" alt="">
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
                     <div class="col-md-6 text-center">
                        <div class="img-wapper">
                           <img class="mix-mode-multiply" src="assets/images/android.png" alt="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="overviewSecMain-cont mn-hd mn-btn">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(10,'Heading','Overview');?></h3>
                           <p class="tx-grey300 p-fs5"><?php echo getPageMetaByIDKeyGroup(10,'Description 1','Overview');?></p>
                           <a class="gd-btn" href="javascript:;"><?php echo getPageMetaByIDKeyGroup(10,'Button Text','Overview');?></a>

                           <span class="p-fs2 bld d-block">Download App</span>

                           <ul class="applist">
                              <li>
                                 <a href="#"><img src="assets/images/google-play.png" alt=""></a>
                              </li>
                              <li>
                                 <a href="#"><img src="assets/images/apple-store.png" alt=""></a>
                              </li>
                           </ul>

                           <em class="tx-grey300 p-fs5 w-85 d-block"><?php echo getPageMetaByIDKeyGroup(10,'Description 2','Overview');?></em>
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
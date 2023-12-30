<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Become Our Partner</title>
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

      <section class="partner-banner money-banner">
        <div class="container">
            <div class="partnerBannner-cont">
               <div class="banner-cont mn-hd mn-btn">
                  <h2 class="tx-white"><?php echo getPageMetaByIDKeyGroup(11,'Banner Heading 1','Banner');?></h2>
                  <div class="banner-btn">
                     <a class="gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(11,'Banner Button URL','Banner'); ?>"><?php echo getPageMetaByIDKeyGroup(11,'Banner Button Text','Banner');?> 
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                              <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                     </a>
                     <a class="ol-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : getPageMetaByIDKeyGroup(11,'Banner Button URL 2','Banner'); ?>"><?php echo getPageMetaByIDKeyGroup(11,'Banner Button Text 2','Banner');?></a>
                  </div>
               </div>

               <div class="banner-img hd-pad pdT1 fs-0">
                  <img src="cms/<?php echo getPageMetaByIDKeyGroup(11,'Banner Background','Banner');?>" alt="">
               </div>
            </div>
        </div>
      </section>

      <section class="grey-section">
         <div class="container">
            <div class="pdX5">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont moneySec1-cont businessSec1-cont">
                        <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(11,'Heading','Manager Programme');?></h3>
                        <p class="p-fs3">
                           <?php echo getPageMetaByIDKeyGroup(11,'Description','Manager Programme');?>
                        </p>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="moneySec1-img">
                        <img src="cms/<?php echo getPageMetaByIDKeyGroup(11,'Image','Manager Programme');?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="grey-section bg-white">
         <div class="container">
            <div class="pdX5">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont">
                        <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(11,'Heading','Label Program');?></h3>
                        <p class="p-fs3 tx-grey300 paraPdR"><?php echo getPageMetaByIDKeyGroup(11,'Description 1','Label Program');?></p>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont hd-pad">
                        <ul class="list100 ul-pd">
                           <?php echo getPageMetaByIDKeyGroup(11,'Description 2','Label Program');?>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <div class="mn-hd partnerSec1-cont">
                        <h6 class="tx-blue bld"><?php echo getPageMetaByIDKeyGroup(11,'Heading','Depending on platform');?></h6>
                        <p class="p-fs3 tx-grey300 pe-0">
                            <?php echo getPageMetaByIDKeyGroup(11,'Description 1','Depending on platform');?>
                           
                        </p>
                     </div>
                  </div>
               </div>

               <!-- <div class="mn-btn partnerSec1-cont pdT1 text-center">
                  <a class="gd-btn" href="#">Become Our Partner</a>
               </div> -->
            </div>
         </div>
      </section>

      

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>
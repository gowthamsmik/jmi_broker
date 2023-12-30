<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Brokers</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php");
   $demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
   $liveAccountURL = $siteurl . "cpanel/open-live-account.php?tab=1";
   ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="partner-banner money-banner">
        <div class="container">
            <div class="partnerBannner-cont">
               <div class="banner-cont mn-hd mn-btn">
               <h2 class="text-white"><?php echo getPageMetaByIDKeyGroup(4,'Heading','Banner');?></h2>
                  <div class="banner-btn">
                     <a class="gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : '#'; ?>">DEMO ACCOUNT 
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

               <div class="banner-img fs-0 w-50">
                  <img src="cms/<?php echo getPageMetaByIDKeyGroup(4,'Banner Image','Banner');?>" alt="">
               </div>
            </div>
        </div>
      </section>

      <section class="grey-section brokerSection1 p-0">
         <div class="container">
            <div class="pdX5">
               <div class="row align-items-center">

                  <div class="col-md-6">
                     <div class="moneySec1-img img-pd fs-0">
                        <img src="cms/<?php echo getPageMetaByIDKeyGroup(4,'Image','introducing');?>" alt="">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont moneySec1-cont businessSec1-cont">
                     <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(4,'Intro','introducing');?></h3>
                        <p class="p-fs3 " style="text-align:justify;">
                        <?php echo getPageMetaByIDKeyGroup(4,'Description','introducing');?>
                        
                        </p>
                     </div>
                     <div class="mn-btn partnerSec1-cont pdT1">
                        <a class="gd-btn" href="<?php echo getPageMetaByIDKeyGroup(4,'introducing Button URL','introducing');?>"><?php echo getPageMetaByIDKeyGroup(4,'introducing Button Text','introducing');?></a>
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
                  <div class="col-md-12">
                     <div class="mn-hd partnerSec1-cont">
                        <h3 class="tx-blue paraPad"><?php echo getPageMetaByIDKeyGroup(4,'Heading','Benefit');?></h3>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont hd-pad">
                        <ul class="list100 ul-pd" style="text-align:justify;">
                        <?php echo getPageMetaByIDKeyGroup(4,'Description left','Benefit');?>
                        </ul>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont hd-pad">
                        <ul class="list100 ul-pd" style="text-align:justify;">
                        <?php echo getPageMetaByIDKeyGroup(4,'Description Right','Benefit');?>

                        </ul>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <div class="mn-hd partnerSec1-cont pdT1">
                        <h6 class="tx-blue bld"><?php echo getPageMetaByIDKeyGroup(4,'Heading 2','Benefit');?></h6>
                        <p class="p-fs3 tx-grey300 pe-0">
                        <?php echo getPageMetaByIDKeyGroup(4,'Description','Benefit');?></p>
                     </div>
                  </div>
               </div>

               <div class="mn-btn partnerSec1-cont pdT1">
                  <a class="gd-btn" href="<?php echo getPageMetaByIDKeyGroup(4,'Benefit Button URL','Benefit');?>"><?php echo getPageMetaByIDKeyGroup(4,'Benefit Button Text','Benefit');?></a>
               </div>
            </div>
         </div>
      </section>

      

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>
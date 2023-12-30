<?php if(!isset($_SESSION['sessionuser']))
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include('includes/softwareinclude/config.php') ?>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Forex Platform</title>
      <?php include("includes/style.php"); ?>
      <style>
        p{
            text-align:justify;
        }
    </style>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="partner-banner money-banner " style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(8, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
           <div class="partnerBannner-cont w-100  banner-pt1 banner-pb1 pdX5">
               <div class="row align-items-center w-100">
                  <div class="col-md-6">
                     <div class="banner-cont mn-hd mn-btn">
                        <h3 class="tx-white"><?php echo getPageMetaByIDKeyGroup(8,'Banner Heading 1','Banner');?></h3>
                        <div class="banner-btn">
                           <a class="gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : '#'; ?>"><?php echo getPageMetaByIDKeyGroup(8,'Banner Button Text','Banner');?> 
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

                  <div class="col-md-6">
                     <div class="banner-img fs-0">
                        <img src="cms/<?php echo getPageMetaByIDKeyGroup(8,'Banner Image','Banner');?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
        </div>
      </section>

      <section class="grey-section mrgbt androidSection1 mb-0">
         <div class="container">
            <div class="pdX5">
               <div class="overviewSec-main padY2 page-section" id="overviews">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="overviewSecMain-cont mn-hd mn-btn">
                           <h3 class="tx-blue fw-bold"><?php echo getPageMetaByIDKeyGroup(8,'Heading','Meta Trader 4 FX');?></h3>
                           <ul class="list100">
                           <?php echo getPageMetaByIDKeyGroup(8,'Description LEFT','Meta Trader 4 FX');?>
                           </ul>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="overviewSecMain-cont mn-hd mn-btn">
                           <ul class="list100">
                           <?php echo getPageMetaByIDKeyGroup(8,'Description RIGHT','Meta Trader 4 FX');?>
                           </ul>
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="overviewSecMain-cont mn-btn text-center pdT1 mn-hd">
                           <a class="gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="download-file.php"><?php echo getPageMetaByIDKeyGroup(8,'Banner Button Text','Meta Trader 4 FX');?></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="forexplatformSection1 text-center">
         <div class="container">
            <img src="cms/<?php echo getPageMetaByIDKeyGroup(8,'Image','Meta Trader 4 FX');?>" alt="">
         </div>
      </section>

      <?php include("includes/news-letter.php"); ?>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>
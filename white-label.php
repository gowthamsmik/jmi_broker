<!DOCTYPE html>
<html lang='en'>
   <head>
      <?php include('includes/compatibility.php'); ?>
      <meta name='description' content=''>
      <title>Title Here</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include('includes/style.php'); ?>
      <style>
        p{
            text-align:justify;
        }
    </style>
   </head>
   <body>
      <?php include('includes/header.php'); ?>

      <section class='partner-banner money-banner'>
        <div class='container'>
            <div class='partnerBannner-cont'>
               <div class='banner-cont mn-hd mn-btn'>
                  <h2 class='tx-white'><?php echo getPageMetaByIDKeyGroup(16,'Banner Heading 1','Banner');?></h2>
                  <div class='banner-btn'>
                     <a class='gd-btn signUp' href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(16,'Banner Button URL','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(16,'Banner Button Text','Banner');?>
                        <span>
                           <svg xmlns='http://www.w3.org/2000/svg' width='21' height='16' viewBox='0 0 21 16' fill='none'>
                              <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                              <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                           </svg>
                        </span>
                     </a>
                     <a class='ol-btn loginUp' href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : getPageMetaByIDKeyGroup(16,'Banner Button URL 2','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(16,'Banner Button Text 2','Banner');?></a>
                  </div>
               </div>

               <div class='banner-img hd-pad pdT1 fs-0'>
                  <img src='cms/<?php echo getPageMetaByIDKeyGroup(16,'Banner Background','Banner');?>' alt=''>
               </div>
            </div>
        </div>
      </section>

      <section class='grey-section'>
         <div class='container-fluid'>
            <div class='pdX511'>
               <div class='row align-items-center container'>

                  <div class='col-md-6'>
                     <div class='moneySec1-img white-label-img img-pd fs-0'>
                        <img src='cms/<?php echo getPageMetaByIDKeyGroup(16,'Image','White Labels');?>' alt=''>
                     </div>
                  </div>

                  <div class='col-md-6 pdX12 ps-0'>
                     <div class='mn-hd partnerSec1-cont moneySec1-cont businessSec1-cont'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(16,'Heading','White Labels');?></h3>
                        <p class='p-fs3'><?php echo getPageMetaByIDKeyGroup(16,'Description','White Labels');?></p>
                     </div>
                     <div class='mn-btn partnerSec1-cont pdT1'>
                        <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(16,'Button URL','White Labels');?>'><?php echo getPageMetaByIDKeyGroup(16,'Button Text','White Labels');?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class='grey-section bg-white'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-12'>
                     <div class='mn-hd partnerSec1-cont'>
                        <h3 class='tx-blue paraPad'><?php echo getPageMetaByIDKeyGroup(16,'Heading','JMI Brokers benefit');?></h3>
                     </div>
                  </div>
               </div>

               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont hd-pad'>
                        <ul class='list100 ul-pd'>
                           <?php echo getPageMetaByIDKeyGroup(16,'Description','JMI Brokers benefit');?>
                        </ul>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont hd-pad'>
                        <ul class='list100 ul-pd'>
                           <?php echo getPageMetaByIDKeyGroup(16,'Description 2','JMI Brokers benefit');?>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class='row'>
                  <div class='col-md-12'>
                     <div class='mn-hd partnerSec1-cont pdT1'>
                        <h6 class='tx-blue bld'><?php echo getPageMetaByIDKeyGroup(16,'Heading','Depending on trading platform');?></h6>
                        <p class='p-fs3 tx-grey300 pe-0'><?php echo getPageMetaByIDKeyGroup(16,'Description','Depending on trading platform');?></p>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(16,'Button URL','Depending on trading platform');?>'><?php echo getPageMetaByIDKeyGroup(16,'Button Text','Depending on trading platform');?></a>
               </div>
            </div>
         </div>
      </section>

      

      <?php include('includes/footer-cta.php'); ?>

      <?php include('includes/footer-apparea.php'); ?>


      <?php include('includes/footer.php'); ?>
      <?php include('includes/scripts.php'); ?>
   </body>
</html>
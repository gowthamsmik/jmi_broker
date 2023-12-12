<!DOCTYPE html>
<html lang='en'>
   <head>
      <?php include('includes/compatibility.php'); ?>
      <meta name='description' content=''>
      <title>Business</title>
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
                  <h2 class='tx-white'><?php echo getPageMetaByIDKeyGroup(12,'Banner Heading 1','Banner');?></h2>
                  <div class='banner-btn'>
                     <a class='gd-btn signUp' href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(12,'Banner Button URL','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(12,'Banner Button Text','Banner');?>
                        <span>
                           <svg xmlns='http://www.w3.org/2000/svg' width='21' height='16' viewBox='0 0 21 16' fill='none'>
                              <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                              <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                           </svg>
                        </span>
                     </a>
                     <a class='ol-btn loginUp' href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : getPageMetaByIDKeyGroup(12,'Banner Button URL 2','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(12,'Banner Button Text 2','Banner');?></a>
                  </div>
               </div>

               <div class='banner-img hd-pad pdT1 fs-0 w-50'>
                  <img src='cms/<?php echo getPageMetaByIDKeyGroup(12,'Banner Background','Banner');?>' alt=''>
               </div>
            </div>
        </div>
      </section>

      <section class='grey-section bg-white'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont moneySec1-cont businessSec1-cont'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(12,'Heading','Partnerships');?></h3>
                        <p class='p-fs3'><?php echo getPageMetaByIDKeyGroup(12,'Description','Partnerships');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='moneySec1-img'>
                        <img src='cms/<?php echo getPageMetaByIDKeyGroup(12,'Image','Partnerships');?>' alt=''>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1 text-center'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(12,'Banner Button URL','Partnerships');?>'><?php echo getPageMetaByIDKeyGroup(12,'Banner Button Text','Partnerships');?></a>
               </div>
            </div>
         </div>
      </section>

      <section class='grey-section bg-white'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont hd-pad'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(12,'Heading','Group Clients');?></h3>
                        <p class='p-fs3 tx-grey300 paraPdR'><?php echo getPageMetaByIDKeyGroup(12,'Description','Group Clients');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont hd-pad'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(12,'Heading','Introducing Brokers');?></h3>
                        <p class='p-fs3 tx-grey300 paraPdR'><?php echo getPageMetaByIDKeyGroup(12,'Description','Introducing Brokers');?></p>
                     </div>
                  </div>
               </div>

               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(12,'Heading','Institutional Clients');?></h3>
                        <p class='p-fs3 tx-grey300 paraPdR'><?php echo getPageMetaByIDKeyGroup(12,'Description','Institutional Clients');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(12,'Heading','Global Partnerships');?></h3>
                        <p class='p-fs3 tx-grey300 paraPdR'><?php echo getPageMetaByIDKeyGroup(12,'Description','Global Partnerships');?></p>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1 text-center'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(12,'Banner Button URL','Global Partnerships');?>'><?php echo getPageMetaByIDKeyGroup(12,'Banner Button Text','Global Partnerships');?></a>
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
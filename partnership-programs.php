<!DOCTYPE html>
<html lang='en'>
   <head>
      <?php include('includes/compatibility.php'); ?>
      <meta name='description' content=''>
      <title>Title Here</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php");
   $demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
   $liveAccountURL = $siteurl . "cpanel/open-live-account.php?tab=1";
   ?>
	<style>
         .grey-section{
            padding: 60px 0 !important;
         }
         p{
            text-align:justify;
         }
	</style>
   </head>
   <body>
      <?php include('includes/header.php'); ?>

      <section class='partner-banner'>
        <div class='container'>
            <div class='partnerBannner-cont'>
               <div class='banner-cont mn-hd mn-btn'>
                  <h2 class='tx-white'><?php echo getPageMetaByIDKeyGroup(23,'Banner Heading 1','Banner');?></h2>
                  <div class='banner-btn'>
                     <a class='gd-btn signUp' href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(23, 'Banner Button URL', 'Banner'); ?>"><?php echo getPageMetaByIDKeyGroup(23,'Banner Button Text','Banner');?> 
                        <span>
                           <svg xmlns='http://www.w3.org/2000/svg' width='21' height='16' viewBox='0 0 21 16' fill='none'>
                              <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                              <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                           </svg>
                        </span>
                     </a>
                     <a class='ol-btn loginUp' href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : getPageMetaByIDKeyGroup(23, 'Banner Button URL 2', 'Banner'); ?>"><?php echo getPageMetaByIDKeyGroup(23,'Banner Button Text 2','Banner');?></a>
                  </div>
               </div>

               <div class='banner-img fs-0'>
                  <img src='cms/<?php echo getPageMetaByIDKeyGroup(23,'Banner Background','Banner');?>' alt=''>
               </div>
            </div>
        </div>
      </section>

      <section class='grey-section'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(23,'Heading','Introducing Broker');?></h3>
                        <p class='p-fs5 tx-grey300'><?php echo getPageMetaByIDKeyGroup(23,'Description 1','Introducing Broker');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <p class='p-fs5 tx-grey300'><?php echo getPageMetaByIDKeyGroup(23,'Description 2','Introducing Broker');?></p>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1 text-center'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(23,'Banner Button URL','Introducing Broker');?>'><?php echo getPageMetaByIDKeyGroup(23,'Banner Button Text','Introducing Broker');?></a>
               </div>
            </div>
         </div>
      </section>

      <section class='grey-section bg-white'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <h3 class='tx-blue pdB1'><?php echo getPageMetaByIDKeyGroup(23,'Heading','Introducing Broker Services');?></h3>
                        <p class='p-fs5 tx-grey300'><?php echo getPageMetaByIDKeyGroup(23,'Description 1','Introducing Broker Services');?></p>
                        <p class='p-fs5 tx-grey300'><?php echo getPageMetaByIDKeyGroup(23,'Description 2','Introducing Broker Services');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <h3 class='tx-blue pdB1'><?php echo getPageMetaByIDKeyGroup(23,'Heading','Other types of partner');?></h3>
                        <p class='p-fs5 tx-grey300'>
                           <span class='p-fs2 bld'><?php echo getPageMetaByIDKeyGroup(23,'Heading 1','Other types of partner');?></span> <br>
                           <?php echo getPageMetaByIDKeyGroup(23,'Description 1','Other types of partner');?>
                           <br>
                           <br>
                           <span class='p-fs2 bld'><?php echo getPageMetaByIDKeyGroup(23,'Heading 2','Other types of partner');?></span> <br>
                           <?php echo getPageMetaByIDKeyGroup(23,'Description 2','Other types of partner');?>
                        </p>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1 text-center'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(23,'Banner Button URL','Other types of partner');?>'><?php echo getPageMetaByIDKeyGroup(23,'Banner Button Text','Other types of partner');?></a>
               </div>
            </div>
         </div>
      </section>

      <?php include('become-partner.php'); ?>

      <?php include('includes/footer-cta.php'); ?>

      <?php include('includes/footer-apparea.php'); ?>


      <?php include('includes/footer.php'); ?>
      <?php include('includes/scripts.php'); ?>
   </body>
</html>
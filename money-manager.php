<!DOCTYPE html>
<html lang='en'>
   <head>
      <?php include('includes/compatibility.php'); ?>
      <meta name='description' content=''>
      <title>Title Here</title>
      <?php include('includes/style.php'); ?>
   </head>
   <body>
      <?php include('includes/header.php'); ?>

      <section class='partner-banner money-banner'>
        <div class='container'>
            <div class='partnerBannner-cont'>
               <div class='banner-cont mn-hd mn-btn'>
                  <h2 class='tx-white'><?php echo getPageMetaByIDKeyGroup(14,'Banner Heading 1','Banner');?></h2>
                  <div class='banner-btn'>
                     <a class='gd-btn signUp' href='<?php echo getPageMetaByIDKeyGroup(14,'Banner Button URL','Banner');?>'><?php echo getPageMetaByIDKeyGroup(14,'Banner Button Text','Banner');?>
                        <span>
                           <svg xmlns='http://www.w3.org/2000/svg' width='21' height='16' viewBox='0 0 21 16' fill='none'>
                              <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                              <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                           </svg>
                        </span>
                     </a>
                     <a class='ol-btn loginUp' href='<?php echo getPageMetaByIDKeyGroup(14,'Banner Button URL 2','Banner');?>'><?php echo getPageMetaByIDKeyGroup(14,'Banner Button Text 2','Banner');?></a>
                  </div>
               </div>

               <div class='banner-img fs-0'>
                  <img src='cms/<?php echo getPageMetaByIDKeyGroup(14,'Banner Background','Banner');?>' alt=''>
               </div>
            </div>
        </div>
      </section>

      <section class='grey-section'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont hd-pad'>
                        <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(14,'Heading','Our Money Managers');?></h3>
                        <p class='p-fs5 tx-grey300 paraPdR'><?php echo getPageMetaByIDKeyGroup(14,'Description','Our Money Managers');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <p class='p-fs5 tx-grey300 paraPdR'><?php echo getPageMetaByIDKeyGroup(14,'Description 2','Our Money Managers');?></p>
                     </div>
                  </div>
               </div>

               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <p class='p-fs2 tx-blue paraPad bld'><?php echo getPageMetaByIDKeyGroup(14,'Heading','We offer various allocation methods');?></p>
                        <ol class='greySec-ol'>
                           <?php echo getPageMetaByIDKeyGroup(14,'Description','We offer various allocation methods');?>
                        </ol>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont'>
                        <p class='p-fs2 tx-blue paraPad bld'><?php echo getPageMetaByIDKeyGroup(14,'Heading','Our comprehensive reporting system');?></p>
                        <ol class='greySec-ol'>
                           <?php echo getPageMetaByIDKeyGroup(14,'Description','Our comprehensive reporting system');?>
                        </ol>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1 text-center'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(14,'Button URL','Our comprehensive reporting system');?>'><?php echo getPageMetaByIDKeyGroup(14,'Button Text','Our comprehensive reporting system');?></a>
               </div>
            </div>
         </div>
      </section>

      <section class='grey-section bg-white'>
         <div class='container'>
            <div class='pdX5'>
               <div class='row'>
                  <div class='col-md-6'>
                     <div class='mn-hd partnerSec1-cont moneySec1-cont'>
                        <p class='p-fs3'><?php echo getPageMetaByIDKeyGroup(14,'Description','Our dedicated Back Office support');?></p>
                     </div>
                  </div>

                  <div class='col-md-6'>
                     <div class='moneySec1-img'>
                        <img src='cms/<?php echo getPageMetaByIDKeyGroup(14,'Image','Our dedicated Back Office support');?>' alt=''>
                     </div>
                  </div>
               </div>

               <div class='mn-btn partnerSec1-cont pdT1 text-center'>
                  <a class='gd-btn' href='<?php echo getPageMetaByIDKeyGroup(14,'Button URL','Our dedicated Back Office support');?>'><?php echo getPageMetaByIDKeyGroup(14,'Button Text','Our dedicated Back Office support');?></a>
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
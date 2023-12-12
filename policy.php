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

      <section class='policy-banner' style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(25, 'Banner Background', 'Banner'); ?>');">
        <div class='container'>
            <div class='banner-cont text-center tx-white mn-hd'>
                <h2><?php echo getPageMetaByIDKeyGroup(25,'Banner Heading 1','Banner');?></h2>
            </div>
        </div>
      </section>

      <section class='policy-section1'>
         <div class='container'>
            <div class='policySec-cont'>
               <div class='mn-hd'>
                  <h3 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Our Policies');?></h3>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Our Policies');?></p>

                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Information We Collect');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Information We Collect');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 2','Information We Collect');?></p>

                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Use of Information');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Use of Information');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 2','Use of Information');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 3','Use of Information');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 4','Use of Information');?></p>

                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Information Sharing');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Information Sharing');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 2','Information Sharing');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 3','Information Sharing');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 4','Information Sharing');?></p>

                  <ul>
                     <li class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 5','Information Sharing');?></li>
                     <li class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 6','Information Sharing');?></li>
                  </ul>
                  
                  <ol class='pt-3'>
                      <li class='p-fs3 tx-grey300 first last'><?php echo getPageMetaByIDKeyGroup(25,'Description 7','Information Sharing');?></li>
                  </ol>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 8','Information Sharing');?></p>
                  
                  <ol class='pt-3'>
                      <li class='p-fs3 tx-grey300 first last'><?php echo getPageMetaByIDKeyGroup(25,'Description 9','Information Sharing');?></li>
                  </ol>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 10','Information Sharing');?></p>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description 11','Information Sharing');?></p>

                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Third-Party Websites');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Third-Party Websites');?></p>

                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Children Privacy');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Children Privacy');?></p>

                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Changes to this Privacy Policy');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Changes to this Privacy Policy');?></p>
                  
                  <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(25,'Heading','Contact Us');?></h5>

                  <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(25,'Description','Contact Us');?></p>
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
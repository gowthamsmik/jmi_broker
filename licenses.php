<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Title Here</title>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="licenses-banner">
        <div class="container">
            <div class="banner-cont text-center mn-hd">
                <h2><?php echo getPageMetaByIDKeyGroup(3,'Banner Heading','Banner');?></h2>
            </div>
        </div>
      </section>

      <section class="licenses-section1">
         <div class="container">
            <div class="sec1-top">
               <div class="mn-hd">
                  <h3 class="tx-blue">
                     <?php echo getPageMetaByIDKeyGroup(3,'Heading 1','Licenses and Regulations');?>
                  </h3>
                  <p class="tx-grey300 p-fs3">
                     <?php echo getPageMetaByIDKeyGroup(3,'Description 1','Licenses and Regulations');?>
                  </p>
               </div>
            </div>

            <div class="sec1-middle">
               <div class="middle-cont">
                  <h5>
                     <span>
                        <img src="assets/images/licenses/1.png" alt="">
                     </span>
                     <?php echo getPageMetaByIDKeyGroup(3,'Description 2','Licenses and Regulations');?>
                  </h5>
               </div>
            </div>

            <div class="sec1-bottom">
               <div class="row">
                  <div class="col-md-6">
                     <div class="all-cont">
                        <div class="bottom-cont1">
                           <div class="mn-hd">
                              <h5 class="tx-blue">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Heading','Licenses and Regulations Left Box');?>
                              </h5>
                              <p class="tx-grey300 p-fs3">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Description','Licenses and Regulations Left Box');?>
                              </p>
                           </div>
                        </div>

                        <div class="bottom-cont2">
                           <div class="licenses-btn mn-btn text-center">
                              <button type="submit" class="theam-btn">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Button text','Licenses and Regulations Left Box');?>
                              </button>
                           </div>
                        </div>

                        <div class="bottom-cont3">
                           <div class="mn-hd">
                              <h5 class="tx-blue">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Heading 2','Licenses and Regulations Left Box');?>
                              </h5>
                              <p class="tx-grey300 p-fs3">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Description 2','Licenses and Regulations Left Box');?>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="all-cont">
                        <div class="bottom-cont1">
                           <div class="mn-hd">
                              <h5 class="tx-blue">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Heading','Licenses and Regulations Right Box');?>
                              </h5>
                              <p class="tx-grey300 p-fs3">
                                 <?php echo getPageMetaByIDKeyGroup(3,'Description','Licenses and Regulations Right Box');?>
                              </p>
                              <ol>
                                 <li class="tx-grey300 p-fs3">5.000.000 VT (+/- 50.000 USD) for each claim,</li>
                                 <li class="tx-grey300 p-fs3">with an aggregate cover of not lessthan 50.000.000 VT (+/- 500.000 USD) and,</li>
                                 <li class="tx-grey300 p-fs3">a maximum deductible amount of 10.000.000 VT (+/- 100.000 USD)</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
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
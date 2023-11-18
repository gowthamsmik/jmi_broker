<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Title Here</title>
      <?php include("includes/style.php"); ?>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="faq-banner">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2><?php echo getPageMetaByIDKeyGroup(27,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white"><?php echo getPageMetaByIDKeyGroup(27,'Description','Banner');?></p>
                <div class="banner-form">
                  <form>
                     <input type="text" placeholder="Search">
                     <button><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
                </div>
            </div>
        </div>
      </section>

      <section class="faq-section1">
         <div class="container">
            <div class="pdX5">
               <div class="faqSec1-nav text-center">
                  <ul>
                     <li data-targetit="box-genral" class="current"><a href="#">General</a></li>
                     <li data-targetit="box-payments"><a href="#">Payments</a></li>
                     <li data-targetit="box-services"><a href="#">Services</a></li>
                     <li data-targetit="box-refund"><a href="#">Refund</a></li>
                     <li data-targetit="box-contact"><a href="#">Contact</a></li>
                  </ul>
               </div>
            
                <div class="box-genral showfirst">
                    <div class="faqSec1-main">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="faqSec1-cont">
                           <div class="innerFAQSec-accordion">
                              <ul class="accordion">
                                  <?php $get_faqs = get_faqs_by_cat('general');
                                  if($get_faqs -> num_rows > 0){
                                      foreach($get_faqs as $thisFaq){ ?>
                                          <li>
                                            <div class="acc_title">
                                            <?php echo $thisFaq['question'];?>
                                               <i class="far fa-plus"></i>
                                            </div>
                                            <div class="acc_desc" style="display: none;">
                                               <p><?php echo $thisFaq['answer'];?></p>
                                            </div>
                                         </li>
                                      <?php }
                                  } ?>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>


                  </div>
               </div>
                </div>
                
                <div class="box-payments">
                    <div class="faqSec1-main">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="faqSec1-cont">
                           <div class="innerFAQSec-accordion">
                              <ul class="accordion">
                                 <?php $get_faqs = get_faqs_by_cat('payments');
                                  if($get_faqs -> num_rows > 0){
                                      foreach($get_faqs as $thisFaq){ ?>
                                          <li>
                                            <div class="acc_title">
                                            <?php echo $thisFaq['question'];?>
                                               <i class="far fa-plus"></i>
                                            </div>
                                            <div class="acc_desc" style="display: none;">
                                               <p><?php echo $thisFaq['answer'];?></p>
                                            </div>
                                         </li>
                                      <?php }
                                  } ?>
                              </ul>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
                </div>
                <div class="box-services">
                    <div class="faqSec1-main">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="faqSec1-cont">
                           <div class="innerFAQSec-accordion">
                              <ul class="accordion">
                                 <?php $get_faqs = get_faqs_by_cat('services');
                                  if($get_faqs -> num_rows > 0){
                                      foreach($get_faqs as $thisFaq){ ?>
                                          <li>
                                            <div class="acc_title">
                                            <?php echo $thisFaq['question'];?>
                                               <i class="far fa-plus"></i>
                                            </div>
                                            <div class="acc_desc" style="display: none;">
                                               <p><?php echo $thisFaq['answer'];?></p>
                                            </div>
                                         </li>
                                      <?php }
                                  } ?>
                              </ul>
                           </div>
                        </div>
                     </div>

                     
                  </div>
               </div>
                </div>
                <div class="box-refund">
                    <div class="faqSec1-main">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="faqSec1-cont">
                           <div class="innerFAQSec-accordion">
                              <ul class="accordion">
                                 <?php $get_faqs = get_faqs_by_cat('refund');
                                  if($get_faqs -> num_rows > 0){
                                      foreach($get_faqs as $thisFaq){ ?>
                                          <li>
                                            <div class="acc_title">
                                            <?php echo $thisFaq['question'];?>
                                               <i class="far fa-plus"></i>
                                            </div>
                                            <div class="acc_desc" style="display: none;">
                                               <p><?php echo $thisFaq['answer'];?></p>
                                            </div>
                                         </li>
                                      <?php }
                                  } ?>
                              </ul>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
                </div>
                <div class="box-contact">
                    <div class="faqSec1-main">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="faqSec1-cont">
                           <div class="innerFAQSec-accordion">
                              <ul class="accordion">
                                 <?php $get_faqs = get_faqs_by_cat('contact');
                                  if($get_faqs -> num_rows > 0){
                                      foreach($get_faqs as $thisFaq){ ?>
                                          <li>
                                            <div class="acc_title">
                                            <?php echo $thisFaq['question'];?>
                                               <i class="far fa-plus"></i>
                                            </div>
                                            <div class="acc_desc" style="display: none;">
                                               <p><?php echo $thisFaq['answer'];?></p>
                                            </div>
                                         </li>
                                      <?php }
                                  } ?>
                              </ul>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
                </div>
            </div>
         </div>
      </section>

      <section class="faq-section2">
         <div class="container">
            <div class="sec2-cont1 pdX5">
               <div class="row">
                   <?php $get_faqs = get_faqs_by_cat('other');
                      if($get_faqs -> num_rows > 0){
                          foreach($get_faqs as $thisFaq){ ?>
                             <div class="col-md-4">
                                 <div class="mn-hd">
                                    <p class="tx-blue p-fs4 bld"><?php echo $thisFaq['question'];?></p>
                                    <p class="tx-grey300 p-fs4"><?php echo $thisFaq['answer'];?></p>
                                 </div>
                              </div>
                          <?php }
                      } ?>
                  
               </div>
            </div>
            <!--<div class="faq-btn mn-btn text-center">-->
            <!--   <button type="submit" class="theam-btn">-->
            <!--      View More-->
            <!--   </button>-->
            <!--</div>-->
         </div>
      </section>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>
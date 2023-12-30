<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>JMI Brokers | Online Forex Trading</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php");
   $demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
   $liveAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
   ?>
   </head>
   <body>
      
      <?php include("includes/header.php"); ?>

      <section class="mainBanner" style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(1,'Banner Background','Banner');?>');">
         <div class="container">
            <div class="pdX8">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="maniBanner-cont mn-hd mn-btn">
                        <h5 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Banner Heading 1','Banner');?></h5>
                        <h1 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Banner Heading 2','Banner');?></h1>
                        <p class="p-fs1 tx-white">
                        <?php echo getPageMetaByIDKeyGroup(1,'Banner Description','Banner');?>
                        </p>

                        <a href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(1, 'Banner Button URL', 'Banner'); ?>" class="text-uppercase gd-btn signUp">
                           <?php echo getPageMetaByIDKeyGroup(1,'Banner Button Text','Banner');?>
                           <span>
                              <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                        </a>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mainBanner-img">Banner Image
                        <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Banner Image','Banner');?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="bitcoin-status">
         <div class="container">
            <div class="pdX8">
               <div class="row">
                  <div class="col">
                     <div class="bitcoin">
                        <div class="bitcoinIcon">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Analytics');?>" alt="">
                        </div>
                        <div class="bitconName mn-hd">
                           <h6 class="tx-grey fw-semibold"><?php echo getPageMetaByIDKeyGroup(1,'Heading 1','Analytics');?></h6>
                        </div>
                        <div class="bitconCurrency mn-hd">
                           <p class="tx-grey p-fs6"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Analytics');?></p>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="bitcoin-change mn-hd">
                        <p class="tx-grey p-fs6"><?php echo getPageMetaByIDKeyGroup(1,'Price Heading 2','Analytics');?></p>
                        <h6 class="tx-grey fw-medium"><?php echo getPageMetaByIDKeyGroup(1,'Price Amount 2','Analytics');?> <i class="fas fa-caret-up"></i></h6>
                     </div>
                  </div>
                  <div class="col">
                     <div class="bitcoin-lastPrice mn-hd">
                        <p class="tx-grey p-fs6"><?php echo getPageMetaByIDKeyGroup(1,'Price Heading 1','Analytics');?></p>
                        <h6 class="tx-grey fw-medium"><?php echo getPageMetaByIDKeyGroup(1,'Price Amount 1','Analytics');?> <i class="fas fa-caret-down"></i></h6>
                     </div>
                  </div>

                 

                  <div class="col">
                     <div class="bitcoin-dynamics">
                        <p class="tx-grey p-fs6"><?php echo getPageMetaByIDKeyGroup(1,'Price Heading 3','Analytics');?></p>
                        <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Price Chart','Analytics');?>" alt="">
                     </div>
                  </div>

                  <div class="col">
                     <div class="bitcoin-btn mn-btn">
                        <a href="<?php echo getPageMetaByIDKeyGroup(1,'Banner Button URL','Analytics');?>" class="gd-btn signUp">
                        <?php echo getPageMetaByIDKeyGroup(1,'Banner Button Text','Analytics');?>
                           <span>
                              <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="homeSection1">
         <div class="container">
            <div class="pdX8">
               <div class="row">
                  <div class="col-md-6">
                     <div class="hSec1-hd mn-hd mb-5">
                        <h3 class="tx-blue pb-2"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices');?></h3>
                        <p class="p-fs3" style="text-align:justify;"><?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices');?></p>
                     </div>

                     <div class="hSec1-card">
                        <div class="hSec1-cardImg text-end pe-5">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Investment Choices Box 1');?>" alt="404" style="mix-blend-mode: luminosity;">
                        </div>

                        <div class="hSec1-cardCont mn-hd">
                           <h6 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices Box 1');?></h6>
                           <div class="d-flex align-items-center pb-2">
                              <h3 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Investment Choices Box 1');?> </h3>
                              <span class="tx-white ps-4 pt-3"><?php echo getPageMetaByIDKeyGroup(1,'Small Text','Investment Choices Box 1');?></span>
                           </div>
                           <p class="p-fs2 tx-white" style="text-align:justify;">
                           <?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices Box 1');?>
                           </p>
                           <a href="<?php echo getPageMetaByIDKeyGroup(1,'Read More Link','Investment Choices Box 1');?>" class="text-white hover-yellow">Read More <i class="fas fa-angle-right ps-2"></i></a>
                        </div>
                     </div>

                     <div class="hSec1-card">
                        <div class="hSec1-cardImg text-end pe-5">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Investment Choices Box 2');?>" alt="404" >
                        </div>

                        <div class="hSec1-cardCont mn-hd">
                           <h6 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices Box 2');?></h6>
                           <div class="d-flex align-items-center pb-2">
                              <h3 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Investment Choices Box 2');?> </h3>
                              <span class="tx-white ps-4 pt-3"><?php echo getPageMetaByIDKeyGroup(1,'Small Text','Investment Choices Box 2');?></span>
                           </div>
                           <p class="p-fs2 tx-white" style="text-align:justify;">
                           <?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices Box 2');?>
                           </p>
                           <a href="<?php echo getPageMetaByIDKeyGroup(1,'Read More Link','Investment Choices Box 2');?>" class="text-white hover-yellow">Read More <i class="fas fa-angle-right ps-2"></i></a>
                        </div>
                     </div>


                     <div class="hSec1-card">
                        <div class="hSec1-cardImg text-end pe-5">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Investment Choices Box 3');?>" alt="404" >
                        </div>

                        <div class="hSec1-cardCont mn-hd">
                           <h6 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices Box 3');?></h6>
                           <div class="d-flex align-items-center pb-2">
                              <h3 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Investment Choices Box 3');?> </h3>
                              <span class="tx-white ps-4 pt-3"><?php echo getPageMetaByIDKeyGroup(1,'Small Text','Investment Choices Box 3');?></span>
                           </div>
                           <p class="p-fs2 tx-white" style="text-align:justify;">
                           <?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices Box 3');?>
                           </p>
                           <a href="<?php echo getPageMetaByIDKeyGroup(1,'Read More Link','Investment Choices Box 3');?>" class="text-white hover-yellow">Read More <i class="fas fa-angle-right ps-2"></i></a>
                        </div>
                     </div>

                     
                  </div>

                  <div class="col-md-6 pt-5">
                     <div class="pt-5 pb-5"></div>
                     <div class="hSec1-card">
                        <div class="hSec1-cardImg text-end pe-5">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Investment Choices Box 4');?>" alt="404" >
                        </div>

                        <div class="hSec1-cardCont mn-hd">
                           <h6 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices Box 4');?></h6>
                           <div class="d-flex align-items-center pb-2">
                              <h3 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Investment Choices Box 4');?> </h3>
                              <span class="tx-white ps-4 pt-3"><?php echo getPageMetaByIDKeyGroup(1,'Small Text','Investment Choices Box 4');?></span>
                           </div>
                           <p class="p-fs2 tx-white" style="text-align:justify;">
                           <?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices Box 4');?>
                           </p>
                           <a href="<?php echo getPageMetaByIDKeyGroup(1,'Read More Link','Investment Choices Box 4');?>" class="text-white hover-yellow">Read More <i class="fas fa-angle-right ps-2"></i></a>
                        </div>
                     </div>


                     <div class="hSec1-card">
                        <div class="hSec1-cardImg text-end pe-5">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Investment Choices Box 5');?>" alt="404" >
                        </div>

                        <div class="hSec1-cardCont mn-hd">
                           <h6 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices Box 5');?></h6>
                           <div class="d-flex align-items-center pb-2">
                              <h3 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Investment Choices Box 5');?> </h3>
                              <span class="tx-white ps-4 pt-3"><?php echo getPageMetaByIDKeyGroup(1,'Small Text','Investment Choices Box 5');?></span>
                           </div>
                           <p class="p-fs2 tx-white" style="text-align:justify;">
                           <?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices Box 5');?>
                           </p>
                           <a href="<?php echo getPageMetaByIDKeyGroup(1,'Read More Link','Investment Choices Box 5');?>" class="text-white hover-yellow">Read More <i class="fas fa-angle-right ps-2"></i></a>
                        </div>
                     </div>


                     <div class="hSec1-card">
                        <div class="hSec1-cardImg text-end pe-5">
                           <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Investment Choices Box 6');?>" alt="404" >
                        </div>

                        <div class="hSec1-cardCont mn-hd">
                           <h6 class="tx-white"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Investment Choices Box 6');?></h6>
                           <div class="d-flex align-items-center pb-2">
                              <h3 class="tx-gd"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Investment Choices Box 6');?> </h3>
                              <span class="tx-white ps-4 pt-3"><?php echo getPageMetaByIDKeyGroup(1,'Small Text','Investment Choices Box 6');?></span>
                           </div>
                           <p class="p-fs2 tx-white" style="text-align:justify;">
                           <?php echo getPageMetaByIDKeyGroup(1,'Description','Investment Choices Box 6');?>
                           </p>
                           <a href="<?php echo getPageMetaByIDKeyGroup(1,'Read More Link','Investment Choices Box 6');?>" class="text-white hover-yellow">Read More <i class="fas fa-angle-right ps-2"></i></a>
                        </div>
                     </div>

                     
                  </div>
               </div>

               <div class="row pt-5 mt-3">
                <div class="col">
                    <div class="padR1 mn-hd">
                        <h4 class="tx-blue text-center"><?php echo getPageMetaByIDKeyGroup(1,'Stats 1','Statistics');?></h4>
                        <p class="p-fs6 tx-grey200 text-center"><?php echo getPageMetaByIDKeyGroup(1,'Heading 1','Statistics');?></p>
                    </div>
                </div>
                <div class="col">
                    <div class="padR1 mn-hd">
                        <h4 class="tx-blue text-center"><?php echo getPageMetaByIDKeyGroup(1,'Stats 2','Statistics');?></h4>
                        <p class="p-fs6 tx-grey200 text-center"><?php echo getPageMetaByIDKeyGroup(1,'Heading 2','Statistics');?></p>
                    </div>
                </div>
                <div class="col">
                    <div class="padR1 mn-hd">
                        <h4 class="tx-blue text-center"><?php echo getPageMetaByIDKeyGroup(1,'Stats 3','Statistics');?></h4>
                        <p class="p-fs6 tx-grey200 text-center"><?php echo getPageMetaByIDKeyGroup(1,'Heading 3','Statistics');?></p>
                    </div>
                </div>
                <div class="col">
                    <div class="padR1 mn-hd">
                        <h4 class="tx-blue text-center"><?php echo getPageMetaByIDKeyGroup(1,'Stats 4','Statistics');?></h4>
                        <p class="p-fs6 tx-grey200 text-center"><?php echo getPageMetaByIDKeyGroup(1,'Heading 4','Statistics');?></p>
                    </div>
                </div>
                <div class="col">
                    <div class="padR1 mn-hd">
                        <h4 class="tx-blue text-center"><?php echo getPageMetaByIDKeyGroup(1,'Stats 5','Statistics');?></h4>
                        <p class="p-fs6 tx-grey200 text-center"><?php echo getPageMetaByIDKeyGroup(1,'Heading 5','Statistics');?></p>
                    </div>
                </div>
            </div>
            
            <div class="aboutSec-bottom">
                <div class="mn-hd mn-btn text-center">
                    <p class="tx-grey p-fs3">
                       <?php echo getPageMetaByIDKeyGroup(1,'Description','Statistics');?>
                    </p>
                    <a class="theam-btn signUp" href="<?php echo getPageMetaByIDKeyGroup(1,'Banner Button URL','Statistics');?>"><?php echo getPageMetaByIDKeyGroup(1,'Banner Button Text','Statistics');?>
                        <span>
                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            </div>
         </div>
      </section>

      <section class="homeSection2">
         <div class="container pdX8">
            <div class="hSec2-hd mn-hd hd-pad text-center pdX8">
               <h3 class="tx-blue pb-2"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Alternative Investments');?></h3>
               <p class="tx-grey300 p-fs3" style="text-align:center;"><?php echo getPageMetaByIDKeyGroup(1,'Description','Alternative Investments');?></p>
            </div>

            <div class="row align-items-center pb-5">
               <div class="col-md-6">
                  <div class="hSec2-img">
                     <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Fundamental Analysis');?>" alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="hSec2-cont mn-hd">
                     <h4 class="tx-blue pb-2"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Fundamental Analysis');?></h4>
                     <p class="tx-grey300 p-fs-5" style="text-align:justify;"><?php echo getPageMetaByIDKeyGroup(1,'Description','Fundamental Analysis');?></p>
   
                     <ul>
                        <li class="p-0">
                           <div class="img">
                              <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Gold prices Image','Fundamental Analysis');?>" alt="">
                           </div>
   
                           <div class="cont mn-hd">
                              <p class="p-fs-5 tx-blue pb-2 fw-semibold"><?php echo getPageMetaByIDKeyGroup(1,'Gold prices Heading','Fundamental Analysis');?></p>
   
                              <p style="text-align:justify;">
                                 <?php echo getPageMetaByIDKeyGroup(1,'Gold prices Description','Fundamental Analysis');?>
                              </p>
                           </div>
                        </li>
   
                        <li class="p-0">
                           <div class="img">
                              <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'US dollar','Fundamental Analysis');?>" alt="">
                           </div>
   
                           <div class="cont mn-hd">
                              <p class="p-fs-5 tx-blue pb-2 fw-semibold"><?php echo getPageMetaByIDKeyGroup(1,'US dollar Heading','Fundamental Analysis');?></p>
   
                              <p style="text-align:justify;">
                              <?php echo getPageMetaByIDKeyGroup(1,'US dollar Description','Fundamental Analysis');?>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row align-items-center pt-5">

               <div class="col-md-6">
                  <div class="hSec2-cont mn-hd">
                     <h4 class="tx-blue pb-2"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Social Trading');?></h4>
                     <p class="tx-grey300 p-fs-5" style="text-align:justify;"><?php echo getPageMetaByIDKeyGroup(1,'Description','Social Trading');?></p>

                     <ul class="ps-0">
                        <li class="p-0">
                           <div class="img">
                              <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Free Copy Account Image','Social Trading');?>" alt="">
                           </div>

                           <div class="cont mn-hd">
                              <p class="p-fs-5 tx-blue pb-2 fw-semibold"><?php echo getPageMetaByIDKeyGroup(1,'Free Copy Account Heading','Social Trading');?></p>

                              <p style="text-align:justify;">
                              <?php echo getPageMetaByIDKeyGroup(1,'Free Copy Account Description','Social Trading');?>
                              </p>
                           </div>
                        </li>

                        <li class="p-0">
                           <div class="img">
                              <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Instant intertransfer Image','Social Trading');?>" alt="">
                           </div>

                           <div class="cont mn-hd">
                              <p class="p-fs-5 tx-blue pb-2 fw-semibold"><?php echo getPageMetaByIDKeyGroup(1,'Instant intertransfer Heading','Social Trading');?></p>

                              <p style="text-align:justify;">
                              <?php echo getPageMetaByIDKeyGroup(1,'Instant intertransfer Description','Social Trading');?>
                              </p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="hSec2-img">
                     <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Social Trading');?>" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include("includes/package-section.php"); ?>

      <section class="faqSection">
         <div class="container-fluid p-0">
            <div class="row align-items-center container mx-auto">
               <div class="col-md-6">
                  <div class="faqSec-img">
                     <img src="assets/images/faqsec/1.jpg" alt="">
                  </div>
               </div>

               <div class="col-md-6 faqscrool">
                  <div class="faqSec-cont mn-hd pe-0">
                     <h3 class="tx-blue">Got Questions? <br> We Have Answers!</h3>
                     <p class="tx-grey300 p-fs3">Frequently Asked Questions List</p>
                     <div class="innerFAQSec-accordion">
                     <ul class="accordion">
                     <?php $get_faqs = get_faqs_by_cat('general');
                                  if($get_faqs -> num_rows > 0){
                                    foreach($get_faqs as $thisFaq){ 
                                       if($thisFaq["id"]<=6) {?>
                                <li>
                                    <div class="acc_title fs-6" data-bs-toggle="collapse" >
                                        
                                        <?php echo $thisFaq['question'];?>
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <div class="acc_desc collapse fs-6"  >
                                        <p style="text-align:justify;">
                                        <?php echo $thisFaq['answer'];?>
                                        
                                        </p>
                                    </div>
                                </li>
                                <?php } }
                                  } ?>
                               
                            </ul>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>

      <section class="mobileAppSection ">
         <div class="container ">
            <div class="pdX5 p-0">
               <div class="row align-items-center">
                  <div class="col-md-3">
                     <div class="mobileAppSec-cont mn-hd mb-5">
                        <h3 class="tx-blue pb-2"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Mobile App Support');?></h3>
                        <p class="tx-grey300 p-fs3 pb-3" style="text-align:justify;"><?php echo getPageMetaByIDKeyGroup(1,'Description','Mobile App Support');?></p>
   
                        <span class="tx-grey300 p-fs2 fw-bold pb-2">Download App</span>
   
                        <ul class="applist p-0 position-absolute" style="z-index:100;">
                                <li>
                                    <a
                                        href="https://play.google.com/store/apps/details?id=net.metaquotes.metatrader4&hl=en&refer[…]292009626949028%26server%3dJMIBrokers-Demo%252cJMIBrokers-JMI"><img
                                            src="./assets/images/google-play.png" alt="404" class="h-75 w-75" ></a>
                                </li>
                                <li>
                                    <a href="https://apps.apple.com/us/app/metatrader-4/id496212596"><img
                                            src="./assets/images/apple-store.png" alt="404" class="h-75 w-75"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="./assets/images/app-galler.png" alt="404" class="h-75 w-75"></a>
                                </li>
                            </ul>
                     </div>
                  </div>
                  <div class="col-md-6 text-center">
                     <div class="mobileAppSec-img">
                     <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Image','Mobile App Support');?>" alt="">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="mobileAppSec-list">
                        <ul>
                           <li>
                              <div class="mobileAppSec-card">
                                 <div class="mobileAppSec-cardicon">
                                    <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Point 1 Image','Mobile App Support');?>" alt="">
                                 </div>

                                 <div class="mobileAppSec-cardCont">
                                    <p><?php echo getPageMetaByIDKeyGroup(1,'Point 1 Text','Mobile App Support');?></p>
                                 </div>
                              </div>
                           </li>

                           <li>
                              <div class="mobileAppSec-card">
                                 <div class="mobileAppSec-cardicon">
                                    <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Point 2 Image','Mobile App Support');?>" alt="">
                                 </div>

                                 <div class="mobileAppSec-cardCont">
                                    <p><?php echo getPageMetaByIDKeyGroup(1,'Point 2 Text','Mobile App Support');?></p>
                                 </div>
                              </div>
                           </li>

                           <li>
                              <div class="mobileAppSec-card">
                                 <div class="mobileAppSec-cardicon">
                                    <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Point 3 Image','Mobile App Support');?>" alt="">
                                 </div>

                                 <div class="mobileAppSec-cardCont">
                                    <p><?php echo getPageMetaByIDKeyGroup(1,'Point 3 Text','Mobile App Support');?></p>
                                 </div>
                              </div>
                           </li>

                           <li>
                              <div class="mobileAppSec-card">
                                 <div class="mobileAppSec-cardicon">
                                    <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Point 4 Image','Mobile App Support');?>" alt="">
                                 </div>

                                 <div class="mobileAppSec-cardCont">
                                    <p><?php echo getPageMetaByIDKeyGroup(1,'Point 4 Text','Mobile App Support');?></p>
                                 </div>
                              </div>
                           </li>

                           <li>
                              <div class="mobileAppSec-card">
                                 <div class="mobileAppSec-cardicon">
                                    <img src="cms/<?php echo getPageMetaByIDKeyGroup(1,'Point 5 Image','Mobile App Support');?>" alt="">
                                 </div>

                                 <div class="mobileAppSec-cardCont">
                                    <p><?php echo getPageMetaByIDKeyGroup(1,'Point 5 Text','Mobile App Support');?></p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="homeCta">
         <div class="container">
            <div class="pdX12">
               <div class="hCta-hd mn-hd">
                  <h3 class="tx-gd">Ready to get started?</h3>
                  <p class="p-fs3 tx-white">Take your business to the next level with JMI Brokers.</p>
               </div>

               <div class="hCta-form mn-btn pdX8">
                  <form>
                     <input class="rounded" type="text" placeholder="Enter Your Website">
                     <button class="gd-btn rounded-end">
                        Lets Get Started
                        <span>
                           <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </span>
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </section>

      

      <?php include("includes/trade-section.php"); ?>

      <?php include("includes/news-letter.php"); ?>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
  
</html>
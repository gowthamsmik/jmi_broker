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
                  <h2 class="tx-white">Brokers <br> Introduction </h2>
                  <div class="banner-btn">
                     <a class="gd-btn signUp" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : '#'; ?>">DEMO ACCOUNT 
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                              <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </span>
                     </a>
                     <a class="ol-btn loginUp" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : '#'; ?>">Open Live Account</a>
                  </div>
               </div>

               <div class="banner-img fs-0">
                  <img src="assets/images/brokers/1.png" alt="">
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
                        <img src="assets/images/brokers/2.png" alt="">
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont moneySec1-cont businessSec1-cont">
                        <h3 class="tx-blue">Introducing Broker</h3>
                        <p class="p-fs3 " style="text-align:justify;">
                           JMI Brokers LTD provides a popular Introducing Broker (IB) Programme to individuals and corporate clients across the globe. The Programme enables IBs to collect commission by bringing new business to JMI. The compensation IBs can accumulate is based on the trading activity of the clients introduced to JMI. Our IBs work in accordance with their region’s regulations in addition to those applying in the UAE and are committed to continuously generating profitable business through a sustainable business plan.
                        </p>
                     </div>
                     <div class="mn-btn partnerSec1-cont pdT1">
                        <a class="gd-btn" href="how-to-become.php">Become Our Partner</a>
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
                        <h3 class="tx-blue paraPad">As an IB for JMI Brokers you can benefit from:</h3>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont hd-pad">
                        <ul class="list100 ul-pd" style="text-align:justify;">
                           <li>A dedicated, friendly and experienced multilingual support team;</li>
                           <li>Competitive rebate conditions paid in real-time* to your Agent account as your clients trade;</li>
                           <li>A tailored service to accommodate your commercial requirements;</li>
                           <li>Stress-free and smooth client on boarding;</li>
                        </ul>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="mn-hd partnerSec1-cont hd-pad">
                        <ul class="list100 ul-pd" style="text-align:justify;">
                           <li>24/7 access to your Agent account and online statements;</li>
                           <li> A personalised link to facilitate the identification of clients you introduce to JMI.</li>
                           <li>Comprehensive weekly report to assist you in keeping track of the introduced clients;</li>
                           <li>Back office administrative support;</li>
                           <li>Adding to your revenue line without adding to your cost base.</li>
                        </ul>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <div class="mn-hd partnerSec1-cont pdT1">
                        <h6 class="tx-blue bld">Depending on trading platform.</h6>
                        <p class="p-fs3 tx-grey300 pe-0">
                           Whatever your business requirements, JMI Brokers will surely find the right solution for you. To find out more about our IB Programme, please call us at<a class="business-call-btn" href="tel:+97144096705">+97144096705</a>
                           <br>
                           Alternatively, if you have any questions and/or wish to be contacted by us to learn more about our IB Programme, please <a class="business-call-btn" href="tel:+97144096705">request a call back</a>
                        </p>
                     </div>
                  </div>
               </div>

               <div class="mn-btn partnerSec1-cont pdT1">
                  <a class="gd-btn" href="how-to-become.php">Become Our Partner</a>
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
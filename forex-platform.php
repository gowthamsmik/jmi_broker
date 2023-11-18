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

      <section class="partner-banner money-banner ">
        <div class="container">
           <div class="partnerBannner-cont w-100  banner-pt1 banner-pb1 pdX5">
               <div class="row align-items-center w-100">
                  <div class="col-md-6">
                     <div class="banner-cont mn-hd mn-btn">
                        <h2 class="tx-white"><?php echo getPageMetaByIDKeyGroup(8,'Banner Heading 1','Banner');?></h2>
                        <div class="banner-btn">
                           <a class="gd-btn signUp" href="#"><?php echo getPageMetaByIDKeyGroup(8,'Banner Button Text','Banner');?> 
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                                    <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                           </a>
                           <a class="ol-btn loginUp" href="#">Open Live Account</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="banner-img fs-0">
                        <img src="assets/images/banner/forex-platform-img.png" alt="">
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
                              <li>On-line news from Dow Jones.</li>
                              <li>Multi-language program interface;</li>
                              <li>History database management and real time data import/export facility;</li>
                              <li>In-built help guides for MetaTrader 4 and MetaQuotes Language 4.</li>
                           </ul>
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="overviewSecMain-cont mn-hd mn-btn">
                           <ul class="list100">
                              <li>Instant execution and request-for-quote execution (RFQ)</li>
                              <li>Trailing stops</li>
                              <li>Complete technical analysis package: 30+ in-built indicators and charting tools, the ability to create various custom indicators, different time periods (from minutes to months);</li>
                              <li>Signals of system and trading actions;</li>
                              <li>Internal e-mail;</li>
                              <li>Comprehensive trading statements.</li>
                              <li>Mobile Trading: MetaTrader 4 Mobile for PDA's and suitable mobile phones</li>
                           </ul>
                        </div>
                     </div>

                     <div class="col-md-12">
                        <div class="overviewSecMain-cont mn-btn text-center pdT1 mn-hd">
                           <a class="gd-btn" href="javascript:;"><?php echo getPageMetaByIDKeyGroup(8,'Banner Button Text','Meta Trader 4 FX');?></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="forexplatformSection1 text-center">
         <div class="container">
            <img src="assets/images/forexplatform.png" alt="">
         </div>
      </section>

      <?php include("includes/news-letter.php"); ?>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>
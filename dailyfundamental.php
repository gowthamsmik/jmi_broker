<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Daily fundamental</title>
   <?php include("includes/softwareinclude/config.php"); ?>
   <?php include("includes/style.php"); ?>
   <style>
      .content {
         max-height: 300px;
         overflow: hidden;
         transition: max-height 0.3s ease;
         text-align: justify;
      }

      .show-more-btn,
      .show-less-btn {
         cursor: pointer;
         color: blue;
         text-decoration: none;
         display: none;
         background: linear-gradient(to right, transparent, gold, gold, gold, gold, gold, gold, lightgoldenrodyellow);
         -webkit-background-clip: text;
         color: transparent;
      }
   </style>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
         const contentList = document.querySelectorAll('.content');
         const showMoreBtnList = document.querySelectorAll('.show-more-btn');
         const showLessBtnList = document.querySelectorAll('.show-less-btn');

         // Add event listeners for each article
         for (let i = 0; i < contentList.length; i++) {
            const initialHeight = 300; // Set the initial height here

            showMoreBtnList[i].addEventListener('click', function () {
               contentList[i].style.maxHeight = 'none';
               showMoreBtnList[i].style.display = 'none';
               showLessBtnList[i].style.display = 'inline';
            });

            showLessBtnList[i].addEventListener('click', function () {
               contentList[i].style.maxHeight = initialHeight + 'px'; // Set the initial height
               showMoreBtnList[i].style.display = 'inline';
               showLessBtnList[i].style.display = 'none';
            });

            const showMoreButton = contentList[i].scrollHeight > initialHeight;
            showMoreBtnList[i].style.display = showMoreButton ? 'inline' : 'none';
            showLessBtnList[i].style.display = 'none';
         }
      });

   </script>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <section class="partner-banner money-banner dailyfundamentalBanner"
   style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(19, 'Banner Background', 'Banner'); ?>');">
      <div class="container">
         <div class="partnerBannner-cont w-100  banner-pt1 banner-pb1 pdX12 text-center">
            <div class="banner-cont mn-hd mn-btn">
               <h2 class="tx-white pb-4">
                  <?php echo getPageMetaByIDKeyGroup(19, 'Banner Heading 1', 'Banner'); ?>
               </h2>
               <p class="p-fs4 tx-white">
                  <?php echo getPageMetaByIDKeyGroup(19, 'Description', 'Banner'); ?>
               </p>
               <div class="banner-btn">
                  <a class="gd-btn signUp" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(19, 'Banner Button URL', 'Banner'); ?>"
                     >
                     <?php echo getPageMetaByIDKeyGroup(19, 'Banner Button Text', 'Banner'); ?>
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                           <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                           <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                        </svg>
                     </span>
                  </a>
                  <a class="ol-btn loginUp" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : '#'; ?>" >Open Live Account</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="dailyfundamentalSection1">
      <div class="container">
         <div class="row align-items-stretch justify-content-center">
            <?php $getAllFundamentalAnalysisFront = getAllFundamentalAnalysisFront();
            if ($getAllFundamentalAnalysisFront->num_rows > 0) {
               foreach ($getAllFundamentalAnalysisFront as $thisData) { ?>
                  <div class="col-md-4">
                     <div class="dailyfundamentalSec1-card">
                        <div class="dailyfundamentalSec1-cardImg">
                           <img src="cms/<?php echo $thisData['image']; ?>" alt="">
                        </div>

                        <div class="dailyfundamentalSec1-cardCont">
                           <h6>
                              <?php echo $thisData['heading']; ?>
                           </h6>
                           <div class="content w-100">
                              <p class="description w-100">
                                 <?php echo $thisData['description']; ?>
                              </p>
                           </div>

                           <div class="dailyfundamentalSec1-cardCont-bottom">
                              <h4>
                                 <?php echo $thisData['posted_by']; ?> <span>
                                    <?php echo date('d-M-Y', $thisData['posted_on']); ?>
                                 </span>
                              </h4>

                              <a href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58"
                                    fill="none">
                                    <path d="M16.918 41.0846L41.0846 16.918" stroke="url(#paint0_linear_455_36892)"
                                       stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.918 16.918H41.0846V41.0846" stroke="url(#paint1_linear_455_36892)"
                                       stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                    <defs>
                                       <linearGradient id="paint0_linear_455_36892" x1="15.8391" y1="16.918" x2="43.51"
                                          y2="19.7241" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FEDC18" />
                                          <stop offset="1" stop-color="#FFF7C5" />
                                       </linearGradient>
                                       <linearGradient id="paint1_linear_455_36892" x1="15.8391" y1="16.918" x2="43.51"
                                          y2="19.7241" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FEDC18" />
                                          <stop offset="1" stop-color="#FFF7C5" />
                                       </linearGradient>
                                    </defs>
                                 </svg>
                              </a>
                              <?php
                              $showMoreButton = strlen($thisData['description']) > $initialHeight;
                              ?>

                              <div class="show-more-btn" <?php if (!$showMoreButton)
                                 echo 'style="display: none; "'; ?>>Read
                                 more</div>
                              <div class="show-less-btn" <?php if ($showMoreButton)
                                 echo 'style="display: none;"'; ?>>Read
                                 less</div>



                           </div>
                        </div>
                     </div>
                  </div>
               <?php }
            } ?>
         </div>
      </div>
   </section>

   <?php include("includes/news-letter.php"); ?>

   <?php include("includes/footer-cta.php"); ?>

   <?php include("includes/footer-apparea.php"); ?>


   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>

</body>

</html>
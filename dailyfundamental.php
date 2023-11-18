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

      <section class="partner-banner money-banner dailyfundamentalBanner" style="background-image: url(assets/images/banner/dailyfundamental-bg.png)">
        <div class="container">
           <div class="partnerBannner-cont w-100  banner-pt1 banner-pb1 pdX12 text-center">
               <div class="banner-cont mn-hd mn-btn">
                  <h2 class="tx-white pb-4"><?php echo getPageMetaByIDKeyGroup(19,'Banner Heading 1','Banner');?></h2>
                  <p class="p-fs4 tx-white"><?php echo getPageMetaByIDKeyGroup(19,'Description','Banner');?></p>
                  <div class="banner-btn">
                     <a class="gd-btn signUp" href="<?php echo getPageMetaByIDKeyGroup(19,'Banner Button URL','Banner');?>"><?php echo getPageMetaByIDKeyGroup(19,'Banner Button Text','Banner');?> 
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
        </div>
      </section>

      <section class="dailyfundamentalSection1">
         <div class="container">
            <div class="row align-items-stretch justify-content-center">
                <?php $getAllFundamentalAnalysisFront = getAllFundamentalAnalysisFront();
                if($getAllFundamentalAnalysisFront -> num_rows > 0){
                    foreach($getAllFundamentalAnalysisFront as $thisData){ ?>
                        <div class="col-md-4">
                          <div class="dailyfundamentalSec1-card">
                             <div class="dailyfundamentalSec1-cardImg">
                                <img src="cms/<?php echo $thisData['image'];?>" alt="">
                             </div>
        
                             <div class="dailyfundamentalSec1-cardCont">
                                <h6><?php echo $thisData['heading'];?></h6>
        
                                <p>
                                   <?php echo $thisData['description'];?>
                                </p>
        
                                <div class="dailyfundamentalSec1-cardCont-bottom">
                                   <h4><?php echo $thisData['posted_by'];?> <span><?php echo date('d-M-Y',$thisData['posted_on']);?></span></h4>
                                   <a href="#">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
                                         <path d="M16.918 41.0846L41.0846 16.918" stroke="url(#paint0_linear_455_36892)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                         <path d="M16.918 16.918H41.0846V41.0846" stroke="url(#paint1_linear_455_36892)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                         <defs>
                                            <linearGradient id="paint0_linear_455_36892" x1="15.8391" y1="16.918" x2="43.51" y2="19.7241" gradientUnits="userSpaceOnUse">
                                               <stop stop-color="#FEDC18"/>
                                               <stop offset="1" stop-color="#FFF7C5"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_455_36892" x1="15.8391" y1="16.918" x2="43.51" y2="19.7241" gradientUnits="userSpaceOnUse">
                                               <stop stop-color="#FEDC18"/>
                                               <stop offset="1" stop-color="#FFF7C5"/>
                                            </linearGradient>
                                         </defs>
                                      </svg>
                                   </a>
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
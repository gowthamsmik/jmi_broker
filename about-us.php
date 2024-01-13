<?php if(isset($_SESSION['sessionuser'])) session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>About Us</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php");
   $demoAccountURL = $siteurl . "cpanel/open-demo-account.php?tab=1";
   $liveAccountURL = $siteurl . "cpanel/open-live-account.php?tab=1";
   $howitworkimage=$siteurl."cms/".getPageMetaByIDKeyGroup(2,'Image','How It Works');
   ?>
</head>
<body>
    <?php include("includes/header.php"); ?>

    <section class="about-banner banner" style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(2,'Banner Background','Banner');?>');">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2><?php echo getPageMetaByIDKeyGroup(2,'Banner Heading','Banner');?></h2>
                <p class="p-fs4"><?php echo getPageMetaByIDKeyGroup(2,'Banner Description','Banner');?></p>
                <h6><?php echo getPageMetaByIDKeyGroup(2,'Banner Description 2','Banner');?></h6>
                <a class="theam-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(2, 'Banner Button URL 1', 'Banner'); ?>">
                    <?php echo getPageMetaByIDKeyGroup(2,'Banner Button Text 1','Banner');?> 
                    <span>
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
                <a class="ol-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : getPageMetaByIDKeyGroup(2, 'Banner Button URL 2', 'Banner'); ?>"><?php echo getPageMetaByIDKeyGroup(2,'Banner Button Text 2','Banner');?></a>
            </div>
        </div>
    </section>

    <section class="about-section1">
        <div class="container pdX5">
            <div class="row align-items-center padY1">
                <div class="col-md-6 mn-hd">
                    <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(2,'Heading','Leading the Way');?></h3>
                </div>

                <div class="col-md-6 mn-hd">
                    <p class="p-fs5" style="text-align:justify;">
                        <?php echo getPageMetaByIDKeyGroup(2,'Description','Leading the Way');?>
                    </p>
                </div>
            </div>
            <div class="row padY1">
                <div class="col-md-6 mn-hd">
                    <h3 class="padY2">
                        <?php echo getPageMetaByIDKeyGroup(2, 'Heading', 'Vision'); ?>
                    </h3>
                    <p class="<?php echo ($userPreferredLanguage === 'ar') ? '' : 'p-fs5'; ?>" style="text-align:justify;">
                        <?php echo getPageMetaByIDKeyGroup(2, 'Description', 'Vision'); ?>
                    </p>
                </div>
                <div class="col-md-6 mn-hd">
                    <h3 class="padY2" style="<?php echo ($userPreferredLanguage === 'ar') ? 'padding-right:60px;' : ''; ?>">
                        <?php echo getPageMetaByIDKeyGroup(2, 'Heading', 'Mission'); ?>
                    </h3>
                    <p class="p-fs5" style="text-align:justify;">
                        <?php echo getPageMetaByIDKeyGroup(2, 'Description', 'Mission'); ?>
                    </p>
                </div>
            </div>
            <!-- <div class="row padY1">
                <div class="col-md-6 mn-hd">
                    <h3 class="padY2"><?php echo getPageMetaByIDKeyGroup(2,'Heading','Vision');?></h3>
                    <p class="p-fs5" style="text-align:justify;">
                        Our vision is to be the leading provider of innovative financial solutions, empowering our clients to achieve their financial objectives with confidence. We strive to stay at the forefront of industry trends and leverage cutting-edge technologies to offer exceptional services that exceed our clients' expectations.
                    </p>
                </div>

                <div class="col-md-6 mn-hd">
                    <h3 class="padY2">Mission:</h3>
                    <p class="p-fs5" style="text-align:justify;">
                        Our mission is to create long-term value for our clients by offering comprehensive financial services that are tailored to their individual needs. We aim to build strong, lasting relationships based on trust, transparency, and integrity. By understanding our clients' goals and aspirations, we provide personalized solutions that help them navigate the complexities of the financial markets and make informed investment decisions.
                    </p>
                </div>
            </div> -->
            <div class="row">
               <div class="col">
                   <div class="padR1 mn-hd">
                       <h4 class="text-center"><?php echo getPageMetaByIDKeyGroup(2, 'Heading 1', 'Statistics'); ?></h4>
                       <p class="p-fs7"><?php echo getPageMetaByIDKeyGroup(2, 'Stats 1', 'Statistics'); ?></p>
                   </div>
               </div>
               <div class="col">
                   <div class="padR1 mn-hd">
                       <h4 class="text-center"><?php echo getPageMetaByIDKeyGroup(2, 'Heading 2', 'Statistics'); ?></h4>
                       <p class="p-fs7"><?php echo getPageMetaByIDKeyGroup(2, 'Stats 2', 'Statistics'); ?></p>
                   </div>
               </div>
               <div class="col">
                   <div class="padR1 mn-hd">
                       <h4 class="text-center"><?php echo getPageMetaByIDKeyGroup(2, 'Heading 3', 'Statistics'); ?></h4>
                       <p class="p-fs7"><?php echo getPageMetaByIDKeyGroup(2, 'Stats 3', 'Statistics'); ?></p>
                   </div>
               </div>
               <div class="col">
                   <div class="padR1 mn-hd">
                       <h4 class="text-center"><?php echo getPageMetaByIDKeyGroup(2, 'Heading 4', 'Statistics'); ?></h4>
                       <p class="p-fs7"><?php echo getPageMetaByIDKeyGroup(2, 'Stats 4', 'Statistics'); ?></p>
                   </div>
               </div>
               <div class="col">
                   <div class="padR1 mn-hd">
                       <h4 class="text-center"><?php echo getPageMetaByIDKeyGroup(2, 'Heading 5', 'Statistics'); ?></h4>
                       <p class="p-fs7"><?php echo getPageMetaByIDKeyGroup(2, 'Stats 5', 'Statistics'); ?></p>
                   </div>
               </div>
            </div>
            
            <div class="aboutSec-bottom">
                <div class="mn-hd mn-btn text-center">
                    <p class="tx-grey300 p-fs3 text-center">
                    <?php echo getPageMetaByIDKeyGroup(2, 'Description', 'Statistics'); ?>
                    </p>
                    <a class="theam-btn gd-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo getPageMetaByIDKeyGroup(2,'banner button url','about') ?>">Lets Get Started
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
    </section>

    <section class="about-section2">
        <div class="container pdX5">
            <div class="aboutSec2-top">
                <div class="text-center mn-hd">
                    <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(2, 'Heading', 'How It Works'); ?></h3>
                    <p class="tx-grey300 p-fs3 text-center"><?php echo getPageMetaByIDKeyGroup(2, 'Description', 'How it works'); ?></p>
                </div>
            </div>

            <div class="aboutSec2-main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="main-image" src="cms/<?php echo getPageMetaByIDKeyGroup(2, 'Image', 'How it works'); ?>" alt="404">
                    </div>

                    <div class="col-md-6">
                        <div class="main-cont">
                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        01
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(2, 'Heading 1', 'How it works'); ?>
                                </h6>
                                <p class="p-fs5" style="text-align:justify;">
                                <?php echo getPageMetaByIDKeyGroup(2, 'Description 1', 'How it works'); ?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        02
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(2, 'Heading 2', 'How it works'); ?>
                                </h6>
                                <p class="p-fs5" style="text-align:justify;">
                                <?php echo getPageMetaByIDKeyGroup(2, 'Description 2', 'How it works'); ?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        03
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(2, 'Heading 3', 'How it works'); ?>
                                </h6>
                                <p class="p-fs5" style="text-align:justify;">
                                <?php echo getPageMetaByIDKeyGroup(2, 'Description 3', 'How it works'); ?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        04
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(2, 'Heading 4', 'How it works'); ?>
                                </h6>
                                <p class="p-fs5" style="text-align:justify;">
                                <?php echo getPageMetaByIDKeyGroup(2, 'Description 4', 'How it works'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section3">
        <div class="container">
            <div class="pdX5">
                <div class="aboutSec3-top text-center">
                    <div class="mn-hd">
                        <h3 class="tx-gd">
                        <?php echo getPageMetaByIDKeyGroup(2, 'Heading', 'How it works 2'); ?>
                        </h3>
                        <p class="p-fs3 tx-white text-center">
                        <?php echo getPageMetaByIDKeyGroup(2, 'Description', 'How it works 2'); ?>
                        </p>
                    </div>
                </div>
    
                <div class="aboutSec3-main">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="about-card">
                                <div class="mn-hd">
                                    <div class="abtCard-head">
                                        
                                        <p class="tx-white p-fs2">
                                            <span>
                                                <img src="cms/<?php echo getPageMetaByIDKeyGroup(2, 'Image 1', 'How it works 2'); ?>" alt="404">
                                            </span>
                                            <?php echo getPageMetaByIDKeyGroup(2, 'Heading 1', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                    <div class="abtCard-body">
                                        <p class="tx-white p-fs6" style="text-align:justify;">
                                        <?php echo getPageMetaByIDKeyGroup(2, 'Description 1', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="about-card">
                                <div class="mn-hd">
                                    <div class="abtCard-head">
                                        
                                        <p class="tx-white p-fs2">
                                            <span>
                                            <img src="cms/<?php echo getPageMetaByIDKeyGroup(2, 'Image 2', 'How it works 2'); ?>" alt="404">
                                            </span>
                                            <?php echo getPageMetaByIDKeyGroup(2, 'Heading 2', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                    <div class="abtCard-body">
                                        <p class="tx-white p-fs6" style="text-align:justify;">
                                        <?php echo getPageMetaByIDKeyGroup(2, 'Description 2', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="about-card">
                                <div class="mn-hd">
                                    <div class="abtCard-head">
                                        
                                        <p class="tx-white p-fs2">
                                            <span>
                                            <img src="cms/<?php echo getPageMetaByIDKeyGroup(2, 'Image 3', 'How it works 2'); ?>" alt="404">
                                            </span>
                                            <?php echo getPageMetaByIDKeyGroup(2, 'Heading 3', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                    <div class="abtCard-body">
                                        <p class="tx-white p-fs6" style="text-align:justify;">
                                        <?php echo getPageMetaByIDKeyGroup(2, 'Description 3', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="about-card">
                                <div class="mn-hd">
                                    <div class="abtCard-head">
                                        
                                        <p class="tx-white p-fs2">
                                            <span>
                                            <img src="cms/<?php echo getPageMetaByIDKeyGroup(2, 'Image 4', 'How it works 2'); ?>" alt="404">
                                            </span>
                                            <?php echo getPageMetaByIDKeyGroup(2, 'Heading 4', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                    <div class="abtCard-body">
                                        <p class="tx-white p-fs6" style="text-align:justify;">
                                        <?php echo getPageMetaByIDKeyGroup(2, 'Description 4', 'How it works 2'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                                        <!DOCTYPE html>
<html lang='en'>
<head>
    <?php include('includes/compatibility.php'); ?>
    <meta name='description' content=''>
    <title>Complete Package</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include('includes/style.php'); ?>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <section class='about-banner' style='background-image: url(assets/images/banner/complete-package-bg.jpg);'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-7'>
                    <div class='banner-cont mn-hd mn-btn'>
                        <h2><?php echo getPageMetaByIDKeyGroup(21,'Banner Heading 1','Banner');?></h2>
                        <h6><?php echo getPageMetaByIDKeyGroup(21,'Banner Description','Banner');?></h6>
                        <a class='theam-btn signUp'  href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(21,'Banner Button URL','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(21,'Banner Button Text','Banner');?> 
                            <span>
                                <svg width='21' height='16' viewBox='0 0 21 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                    <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                                </svg>
                            </span>
                        </a>
                        <a class='ol-btn loginUp'  href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : getPageMetaByIDKeyGroup(21,'Banner Button URL 2','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(21,'Banner Button Text 2','Banner');?></a>
                    </div>
                </div>

                <div class='col-md-5 text-center'>
                    <div class='img-waper'>
                        <img src='cms/<?php echo getPageMetaByIDKeyGroup(21,'Banner Background','Banner');?>' alt=''>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class='padding-remove'>
        <?php include('includes/package-section.php'); ?>
    </div>

    <?php include('includes/trade-section.php'); ?>

    <?php include('includes/news-letter.php'); ?>

    <?php include('includes/footer-cta.php'); ?>

    <?php include('includes/footer-apparea.php'); ?>

    <?php include('includes/footer.php'); ?>
    <?php include('includes/scripts.php'); ?>
</body>
</html>
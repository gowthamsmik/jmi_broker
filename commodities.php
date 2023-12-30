<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Commodities</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php"); ?>
    <style>
        p{
            text-align:justify;
        }
    </style>
</head>
<body>
    <?php include("includes/header.php"); ?>

    <section class="commodities-banner" style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(5, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2 class="pdB1"><?php echo getPageMetaByIDKeyGroup(5,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white pdB1 text-center"><?php echo getPageMetaByIDKeyGroup(5,'Banner Description','Banner');?>
                </p>
                <a class="gd-btn marR1 <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : '#'; ?>"><?php echo getPageMetaByIDKeyGroup(5,'Banner Button Text','Banner');?> 
                    <span>
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
                <a class="ol-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : '#'; ?>"><?php echo getPageMetaByIDKeyGroup(5,'Banner Button Text 2','Banner');?></a>
            </div>
        </div>
    </section>


    <section class="forex-section3 pdT2">
        <div class="container">
            <div class="forex-table">
                <div class="forex-table-header">
                    <div class="header-cont mn-hd">
                        <div class="header-top">
                            <h5 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(5,'Heading','Commodities');?></h5>
                            <div class="forex-tag">
                                <span data-targetit="box-table1" class="p-fs5 tx-grey-new4 padR2 current"><?php echo getPageMetaByIDKeyGroup(5,'Short Text','Commodities');?></span>
                                <span data-targetit="box-table2" class="p-fs5 tx-grey-new4"><?php echo getPageMetaByIDKeyGroup(5,'Short Text 2','Commodities');?></span>
                            </div>
                        </div>
                        <div class="header-main">
                            <p class="p-fs3 tx-grey300">
                               <?php echo getPageMetaByIDKeyGroup(5,'Description','Commodities');?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="forex-table-main">
                    <div class="box-table1 showfirst">
                        
                        <iframe src="https://www.jmibrokers.com/datatable1.php" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <div class="box-table2">
                        <iframe src="https://www.jmibrokers.com/datatable2.php" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    
                </div>
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
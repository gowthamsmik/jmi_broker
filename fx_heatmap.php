<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>FX Heatmap</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php"); ?>
    <style>
        table {
            text-align: center;
            border-radius: 20px;
            overflow: hidden;
        }
        .table th.odd {
            background-color: #0059b2;
        }

        .table th.even {
            background-color: #ffc926;
        }
        .table th a.odd {
            color: #ffc926;
        }

        .table th a.even {
            color: #0059b2;
        }
        .background {
            background-color: #0059b2 !important;
            color: #ffc926 !important;
        }
        .background:hover {
            background-color: #ffc926 !important;
            color: #0059b2 !important;
        }
        p{
            text-align:justify;
        }
    </style>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <section class="pip-banner" style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(36, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2 class="pdB1"><?php echo getPageMetaByIDKeyGroup(36,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white text-center pdB1"><?php echo getPageMetaByIDKeyGroup(36,'Description','Banner');?></p>
                <a class="gd-btn marR1 <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(36,'Banner Button URL','Banner'); ?>"
                    ><?php echo getPageMetaByIDKeyGroup(36,'Banner Button Text','Banner');?>
                    <span>
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </a>
                <a class="ol-btn <?php echo isset($_SESSION['sessionuser']) ? '' : 'signUp'; ?>" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL : '#'; ?>" >Open Live Account</a>
            </div>
        </div>
    </section>

    <section class="calendar-section1">
        <div class="container">
            <div class="calendar-header">
                <div class="mn-hd">
                    <div class="header-cont">
                        <div class="cont1">
                            <h5 class="tx-blue">JMI Brokers | FX HeatMap</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>The Currencies Heat Map is a set of tables which display the relative strengths of major currency pairs in comparison with each other, designed to give an overview of the forex market across various time frames. Whether you're a scalper, day, swing, or position trader, it is a powerful tool if you're looking for new and innovative trading strategies to add to your repertoire. Scroll down to the bottom of this forex heat map to view the key containing explanations for the color codes.</p>
            </div>
        </div>
    </section>


    <?php include("includes/footer-cta.php"); ?>

    <?php include("includes/footer-apparea.php"); ?>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

</html>
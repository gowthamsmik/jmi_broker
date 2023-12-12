<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Title Here</title>
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
    </style>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <section class="pip-banner">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2 class="pdB1"><?php echo getPageMetaByIDKeyGroup(35,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white pdB1"><?php echo getPageMetaByIDKeyGroup(35,'Description','Banner');?></p>
                <a class="gd-btn marR1 signUp" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(35,'Banner Button URL','Banner'); ?>"
                    ><?php echo getPageMetaByIDKeyGroup(35,'Banner Button Text','Banner');?>
                    <span>
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    </section>

    <section class="calendar-section1">
        <div class="container">
            <div class="calendar-header">
                <div class="mn-hd">
                    <div class="header-cont">
                        <div class="cont1">
                            <h5 class="tx-blue">JMI Brokers | Technical Analysis</h5>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="odd"><a href="#" class="odd">GBPUSD</a></th>
                        <th class="even"><a href="#" class="even">EURUSD</a></th>
                        <th class="odd"><a href="#" class="odd">USDJPY</a></th>
                        <th class="even"><a href="#" class="even">AUDUSD</a></th>
                        <th class="odd"><a href="#" class="odd">GOLD</a></th>
                        <th class="even"><a href="#" class="even">OIL</a></th>
                        <th class="odd"><a href="#" class="odd">DOWJONES</a></th>
                    </tr>
                </thead>
            </table>
            <table class="table">
                <thead>
                    <tr>
                        <th class="odd py-3"></th>
                    </tr>
                </thead>
            </table>
            <div class="container d-flex justify-content-end">
                <button class="btn background ">More Technical Analysis</button>
            </div>
        </div>
    </section>


    <?php include("includes/footer-cta.php"); ?>

    <?php include("includes/footer-apparea.php"); ?>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

</html>
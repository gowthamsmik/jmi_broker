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

    <section class="forex-banner">
        <div class='container'>
            <div class='banner-cont text-center mn-hd mn-btn'>
                <h2 class='pdB1'><?php echo getPageMetaByIDKeyGroup(32,'Banner Heading 1','Banner');?></h2>
                <p class='p-fs4 tx-white pdB1'><?php echo getPageMetaByIDKeyGroup(32,'Banner Description','Banner');?></p>
                <a class='gd-btn marR1 signUp' href='<?php echo getPageMetaByIDKeyGroup(32,'Banner Button URL','Banner');?>'><?php echo getPageMetaByIDKeyGroup(32,'Banner Button Text','Banner');?>
                    <span>
                        <svg width='21' height='16' viewBox='0 0 21 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                            <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                        </svg>
                    </span>
                </a>
                <a class='ol-btn loginUp' href='#'>Open Live Account</a>
            </div>
        </div>
    </section>

    <section class="forex-section1">
        <div class="container">
            <div class="pdX5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="forexSec1-cont1">
                            <div class="mn-hd">
                                <h3 class="tx-blue">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Heading','Trade Global');?>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="forexSec1-cont2">
                            <div class="mn-hd">
                                <p class="p-fs5 tx-grey300">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description','Trade Global');?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section2">
        <div class="container pdX5">
            <div class="aboutSec2-top">
                <div class="text-center mn-hd">
                    <h3 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(32,'Heading','How It Works');?></h3>
                    <p class="tx-grey300 p-fs3"><?php echo getPageMetaByIDKeyGroup(32,'Description','How It Works');?></p>
                </div>
            </div>

            <div class="aboutSec2-main">
                <div class="row">
                    <div class="col-md-6">
                        <img class="main-image" src="assets/images/forex/1.jpg" alt="">
                    </div>

                    <div class="col-md-6">
                        <div class="main-cont">
                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        01
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Heading 1','How It Works');?>
                                </h6>
                                <p class="p-fs5">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description 1','How It Works');?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        02
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Heading 2','How It Works');?>
                                </h6>
                                <p class="p-fs5">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description 2','How It Works');?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        03
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Heading 3','How It Works');?>
                                </h6>
                                <p class="p-fs5">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description 3','How It Works');?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        04
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Heading 4','How It Works');?>
                                </h6>
                                <p class="p-fs5">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description 4','How It Works');?>
                                </p>
                            </div>

                            <div class="mn-hd">
                                <h6 class="tx-grey300">
                                    <span class="tx-blue">
                                        05
                                    </span>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Heading 5','How It Works');?>
                                </h6>
                                <p class="p-fs5">
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description 5','How It Works');?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="forex-section3">
        <div class="container">
            <div class="forex-table">
                <div class="forex-table-header">
                    <div class="header-cont mn-hd">
                       <div class='header-top'>
                            <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(32,'Heading','Major Currencies');?></h5>
                            <div class="forex-tag">
                                <span data-targetit="box-table1" class="p-fs5 tx-grey-new4 padR2 current">FX 4D major</span>
                                <span data-targetit="box-table2" class="p-fs5 tx-grey-new4">FX 5D major</span>
                            </div>
                        </div>
                        <div class='header-main'>
                            <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(32,'Description','Major Currencies');?></p>
                        </div>
                    </div>
                </div>

                <div class="forex-table-main">
                    <div class="box-table1 showfirst">
                        <iframe src="https://www.jmibrokers.com/en/FX4Dmajor1" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <div class="box-table2">
                        <iframe src="https://www.jmibrokers.com/en/FX4Dmajor2" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <!--<table>-->
                    <!--    <thead>-->
                    <!--        <tr>-->
                    <!--            <th class="bld tx-grey300">Symbol</th>-->
                    <!--            <th class="bld tx-grey300">Name</th>-->
                    <!--            <th class="bld tx-grey300">Margin %</th>-->
                    <!--            <th class="bld tx-grey300">Contract Size</th>-->
                    <!--        </tr>-->
                    <!--    </thead>-->
                    <!--    <tbody>-->
                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->
                    <!--    </tbody>-->
                    <!--</table>-->
                </div>

                <!--<div class="forex-table-pagination text-center">-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="#"><i class="fas fa-angle-left"></i></a>-->
                <!--        </li>-->

                <!--        <li class="activePage">-->
                <!--            <span>1</span>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <em>of</em>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <span>4</span>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <a href="#"><i class="fas fa-angle-right"></i></a>-->
                <!--        </li>-->
                <!--    </ul>-->

                <!--</div>-->
            </div>
        </div>
    </section>

    <section class="forex-section3">
        <div class="container">
            <div class="forex-table">
                <div class="forex-table-header">
                    <div class="header-cont mn-hd">
                        <div class='header-top'>
                            <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(32,'Heading','Major Currencies 1');?></h5>

                            <div class="forex-tag">
                                <span data-targetit="box-table3" class="p-fs5 tx-grey-new4 padR2 current">FX 4D major cross</span>
                                <span data-targetit="box-table4" class="p-fs5 tx-grey-new4">FX 5D major cross</span>
                            </div>
                        </div>
                        <div class='header-main'>
                            <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(32,'Description','Major Currencies 1');?></p>
                        </div>
                    </div>
                </div>

                <div class="forex-table-main">
                    <div class="box-table3 showfirst">
                        <iframe src="https://www.jmibrokers.com/en/FX4DmajorCross" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <div class="box-table4">
                        <iframe src="https://www.jmibrokers.com/en/FX5DmajorCross" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <!--<table>-->
                    <!--    <thead>-->
                    <!--        <tr>-->
                    <!--            <th class="bld tx-grey300">Symbol</th>-->
                    <!--            <th class="bld tx-grey300">Name</th>-->
                    <!--            <th class="bld tx-grey300">Margin %</th>-->
                    <!--            <th class="bld tx-grey300">Contract Size</th>-->
                    <!--        </tr>-->
                    <!--    </thead>-->
                    <!--    <tbody>-->
                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->
                    <!--    </tbody>-->
                    <!--</table>-->
                </div>

                <!--<div class="forex-table-pagination text-center">-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="#"><i class="fas fa-angle-left"></i></a>-->
                <!--        </li>-->

                <!--        <li class="activePage">-->
                <!--            <span>1</span>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <em>of</em>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <span>4</span>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <a href="#"><i class="fas fa-angle-right"></i></a>-->
                <!--        </li>-->
                <!--    </ul>-->

                <!--</div>-->
            </div>
        </div>
    </section>

    <section class="forex-section3">
        <div class="container">
            <div class="forex-table">
                <div class="forex-table-header">
                    <div class="header-cont mn-hd">
                        <div class='header-top'>
                            <h5 class='tx-blue'><?php echo getPageMetaByIDKeyGroup(32,'Heading','Cross Rates');?></h5>
                        </div>
                        <div class='header-main'>
                            <p class='p-fs3 tx-grey300'><?php echo getPageMetaByIDKeyGroup(32,'Description','Cross Rates');?></p>
                        </div>
                    </div>
                </div>

                <div class="forex-table-main">
                    <iframe src="https://www.jmibrokers.com/en/FXCrossRates" style="width: 100%; height: 500px;"></iframe>
                    <!--<table>-->
                    <!--    <thead>-->
                    <!--        <tr>-->
                    <!--            <th class="bld tx-grey300">Symbol</th>-->
                    <!--            <th class="bld tx-grey300">Name</th>-->
                    <!--            <th class="bld tx-grey300">Margin %</th>-->
                    <!--            <th class="bld tx-grey300">Contract Size</th>-->
                    <!--        </tr>-->
                    <!--    </thead>-->
                    <!--    <tbody>-->
                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="#0C3D93"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    EUR<em>USD</em>-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>Euro vs US Dollar</td>-->
                    <!--            <td>100%-->
                    <!--                <span>-->
                    <!--                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">-->
                    <!--                        <path d="M38.5156 3C38.5156 1.34315 37.1725 6.42172e-07 35.5156 1.23223e-06L8.51563 -4.53646e-07C6.85877 -4.53646e-07 5.51563 1.34314 5.51563 3C5.51563 4.65686 6.85877 6 8.51563 6H32.5156V30C32.5156 31.6569 33.8588 33 35.5156 33C37.1725 33 38.5156 31.6569 38.5156 30L38.5156 3ZM4.63695 38.1213L37.6369 5.12132L33.3943 0.87868L0.394305 33.8787L4.63695 38.1213Z" fill="url(#paint0_linear_455_29506)"/>-->
                    <!--                        <defs>-->
                    <!--                            <linearGradient id="paint0_linear_455_29506" x1="1.04241" y1="37.4732" x2="10.395" y2="43.5629" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                            </linearGradient>-->
                    <!--                        </defs>-->
                    <!--                    </svg>-->
                    <!--                </span>-->
                    <!--            </td>-->
                    <!--            <td>100000</td>-->
                    <!--        </tr>-->
                    <!--    </tbody>-->
                    <!--</table>-->
                </div>

                <!--<div class="forex-table-pagination text-center">-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="#"><i class="fas fa-angle-left"></i></a>-->
                <!--        </li>-->

                <!--        <li class="activePage">-->
                <!--            <span>1</span>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <em>of</em>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <span>4</span>-->
                <!--        </li>-->

                <!--        <li>-->
                <!--            <a href="#"><i class="fas fa-angle-right"></i></a>-->
                <!--        </li>-->
                <!--    </ul>-->

                <!--</div>-->
            </div>
        </div>
    </section>

    <section class='forex-section4 pb200'>
        <div class='container'>
            <div class='forexSec4-cont'>
                <ul>
                    <li>
                        <span>01</span>
                        <div class='forexSec4-main-cont'>
                            <div>
                                <h6 class='tx-blue bld'><?php echo getPageMetaByIDKeyGroup(32,'Heading','Example 1');?></h6>
                                <ol>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description','Example 1');?>
                                </ol>
                                <p><?php echo getPageMetaByIDKeyGroup(32,'Description 2','Example 1');?></p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <span>02</span>
                        <div class='forexSec4-main-cont'>
                            <div>
                                <h6 class='tx-blue bld'><?php echo getPageMetaByIDKeyGroup(32,'Heading','Example 2');?></h6>
                                <ol>
                                    <?php echo getPageMetaByIDKeyGroup(32,'Description','Example 2');?>
                                </ol>
                                <p><?php echo getPageMetaByIDKeyGroup(32,'Description 2','Example 2');?></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class='mn-btn'>
                    <a class='gd-btn marR1 signUp' href='<?php echo getPageMetaByIDKeyGroup(32,'Button URL 1','Bottom Buttons');?>'><?php echo getPageMetaByIDKeyGroup(32,'Button Text 1','Bottom Buttons');?>
                    <span>
                        <svg xmlns='http://www.w3.org/2000/svg' width='21' height='16' viewBox='0 0 21 16' fill='none'>
                            <path d='M2 9L19 9' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                            <path d='M15 4L20 9L15 14' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
                        </svg>
                    </span>
                    </a>
                    <a class='ol-btn loginUp' href='<?php echo getPageMetaByIDKeyGroup(32,'Button URL 2','Bottom Buttons');?>'><?php echo getPageMetaByIDKeyGroup(32,'Button Text 2','Bottom Buttons');?></a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Title Here</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php"); ?>
</head>
<body>
    <?php include("includes/header.php"); ?>

    <section class="stock-banner" style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(28, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2 class="pdB1"><?php echo getPageMetaByIDKeyGroup(28,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white pdB1 text-center"><?php echo getPageMetaByIDKeyGroup(28,'Banner Description','Banner');?></p>
                <a class="gd-btn marR1 signUp" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL : getPageMetaByIDKeyGroup(28,'Banner Button URL','Banner'); ?>" ><?php echo getPageMetaByIDKeyGroup(28,'Banner Button Text','Banner');?>
                    <span>
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
                <a class="ol-btn loginUp" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL :'#'; ?>" >Open Live Account</a>
            </div>
        </div>
    </section>

    <section class="forex-section3 pdT2">
        <div class="container">
            <div class="forex-table">
                <div class="forex-table-header">
                    <div class="header-cont mn-hd">
                        <div class="header-top">
                            <h5 class="tx-blue"><?php echo getPageMetaByIDKeyGroup(28,'Heading','Stock CFDs');?></h5>
                            <div class="forex-tag">
                                <span data-targetit="box-table1" class="p-fs5 tx-grey-new4 padR2 current">US Shares</span>
                                <span data-targetit="box-table2" class="p-fs5 tx-grey-new4">UK Shares</span>
                            </div>
                        </div>
                        <div class="header-main">
                            <p class="p-fs3 tx-grey300"><?php echo getPageMetaByIDKeyGroup(28,'Description','Stock CFDs');?></p>
                        </div>
                    </div>
                </div>

                <div class="stocktable-main">
                    <div class="box-table1 showfirst">
                        <iframe src="https://www.jmibrokers.com/en/datatable4" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <div class="box-table2">
                        <iframe src="https://www.jmibrokers.com/en/datatable5" style="width: 100%; height: 500px;"></iframe>
                    </div>
                    <!--<table>-->
                    <!--    <thead>-->
                    <!--        <tr>-->
                    <!--            <th class="bld tx-grey300">Symbol</th>-->
                    <!--            <th class="bld tx-grey300">Name</th>-->
                    <!--            <th class="bld tx-grey300">Margin %</th>-->
                    <!--            <th class="bld tx-grey300">Contract Size</th>-->
                    <!--            <th class="bld tx-grey300">Tick Size</th>-->
                    <!--        </tr>-->
                    <!--    </thead>-->
                    <!--    <tbody>-->
                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    A-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>A</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    AA-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>AA</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    AAON.O-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>AAON.O</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    ABC-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>ABC</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    AAON.O-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>AAON.O</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    ABC-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>ABC</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    AAON.O-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>AAON.O</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    ABC-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>ABC</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    AAON.O-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>AAON.O</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    ABC-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>ABC</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->

                    <!--        <tr>-->
                    <!--            <td>-->
                    <!--                <div class="mainData">-->
                    <!--                    <span class="td-plus-btn me-3">-->
                    <!--                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">-->
                    <!--                            <path d="M41.1667 6.5H10.8333C8.4401 6.5 6.5 8.4401 6.5 10.8333V41.1667C6.5 43.5599 8.4401 45.5 10.8333 45.5H41.1667C43.5599 45.5 45.5 43.5599 45.5 41.1667V10.8333C45.5 8.4401 43.5599 6.5 41.1667 6.5Z" fill="url(#paint0_linear_455_34772)"/>-->
                    <!--                            <path d="M26 17.334V34.6673" stroke="url(#paint1_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <path d="M17.332 26H34.6654" stroke="url(#paint2_linear_455_34772)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                    <!--                            <defs>-->
                    <!--                                <linearGradient id="paint0_linear_455_34772" x1="4.75893" y1="6.50001" x2="49.4141" y2="11.0285" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#FEDC18"/>-->
                    <!--                                <stop offset="1" stop-color="#FFF7C5"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint1_linear_455_34772" x1="26.982" y1="17.334" x2="25.2737" y2="17.4626" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                                <linearGradient id="paint2_linear_455_34772" x1="34.354" y1="26" x2="34.2959" y2="27.3144" gradientUnits="userSpaceOnUse">-->
                    <!--                                <stop stop-color="#323B4B"/>-->
                    <!--                                <stop offset="1" stop-color="#111212"/>-->
                    <!--                                </linearGradient>-->
                    <!--                            </defs>-->
                    <!--                        </svg>-->
                    <!--                    </span>-->
                    <!--                    AAON.O-->
                    <!--                </div>-->
                    <!--            </td>-->
                    <!--            <td>AAON.O</td>-->
                    <!--            <td>15%</td>-->
                    <!--            <td>100</td>-->
                    <!--            <td>0.01</td>-->
                    <!--        </tr>-->
                    <!--    </tbody>-->
                    <!--</table>-->
                </div>

                <div class="forex-table-pagination text-center">
                    <ul>
                        <li>
                            <a href="#"><i class="fas fa-angle-left"></i></a>
                        </li>

                        <li class="activePage">
                            <span>1</span>
                        </li>

                        <li>
                            <em>of</em>
                        </li>

                        <li>
                            <span>4</span>
                        </li>

                        <li>
                            <a href="#"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="forex-section4 pb200">
        <div class="container">
            <div class="forexSec4-hd mn-hd hd-pad">
                 <div class="row align-items-center">
                    <div class="col-md-5">
                        <h3 class="fw-bold tx-blue"><?php echo getPageMetaByIDKeyGroup(28,'heading','Calculate Profit Loss');?></h3>
                    </div>

                    <div class="col-md-7">
                        <ul class="list100">
                            <?php echo getPageMetaByIDKeyGroup(28,'Description','Calculate Profit Loss');?>
                        </ul>
                    </div>
                 </div>
            </div>
            <div class="forexSec4-cont">
                <ul>
                    <li>
                        <span>01</span>
                        <div class="forexSec4-main-cont">
                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="tx-blue bld"><?php echo getPageMetaByIDKeyGroup(28,'Example 1','Calculate Profit Loss');?></h6>
                                        <ol>
                                            <?php echo getPageMetaByIDKeyGroup(28,'Description 1','Calculate Profit Loss');?>
                                        </ol>
                                    </div>

                                    <div class="col-md-6">
                                        <h6 class="tx-blue bld"><?php echo getPageMetaByIDKeyGroup(28,'Example 1','Calculate Profit Loss');?></h6>
                                        <ol>
                                            <?php echo getPageMetaByIDKeyGroup(28,'Description 2','Calculate Profit Loss');?>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <span>02</span>
                        <div class="forexSec4-main-cont">
                            <div>
                                <h6 class="tx-blue bld d-inline-block"><?php echo getPageMetaByIDKeyGroup(28,'heading 1','Corporate Actions');?></h6>

                                <div class="row">
                                    <div class="col-md-6">
                                        <ol>
                                            <?php echo getPageMetaByIDKeyGroup(28,'Description 1','Corporate Actions');?>
                                        </ol>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <ol>
                                            <?php echo getPageMetaByIDKeyGroup(28,'Description 2','Corporate Actions');?>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <span>03</span>
                        <div class="forexSec4-main-cont">
                            <div>
                                <h6 class="tx-blue bld"><?php echo getPageMetaByIDKeyGroup(28,'heading','Commission on Stock');?></h6>
                                <p><?php echo getPageMetaByIDKeyGroup(28,'Description 1','Commission on Stock');?></p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mn-btn">
                    <a class="gd-btn marR1 signUp" href="<?php echo isset($_SESSION['sessionuser']) ? $demoAccountURL :getPageMetaByIDKeyGroup(28,'Button URL 1','Commission on Stock'); ?>" ><?php echo getPageMetaByIDKeyGroup(28,'Button Text 1','Commission on Stock');?>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="16" viewBox="0 0 21 16" fill="none">
                            <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    </a>
                    <a class="ol-btn loginUp" href="<?php echo isset($_SESSION['sessionuser']) ? $liveAccountURL :getPageMetaByIDKeyGroup(28,'Button URL 2','Commission on Stock'); ?>" ><?php echo getPageMetaByIDKeyGroup(28,'Button Text 2','Commission on Stock');?></a>
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
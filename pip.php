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

    <section class="pip-banner">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2 class="pdB1"><?php echo getPageMetaByIDKeyGroup(24,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white pdB1"><?php echo getPageMetaByIDKeyGroup(24,'Description','Banner');?></p>
                <a class="gd-btn marR1 signUp" href="<?php echo getPageMetaByIDKeyGroup(24,'Banner Button URL','Banner');?>"><?php echo getPageMetaByIDKeyGroup(24,'Banner Button Text','Banner');?> 
                    <span>
                        <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
                <a class="ol-btn loginUp" href="#">Open Live Account</a>
            </div>
        </div>
    </section>

    <section class="calendar-section1">
        <div class="container">
            <div class="calendar-header">
                <div class="mn-hd">
                    <div class="header-cont">
                        <div class="cont1">
                            <h5 class="tx-blue">JMI Brokers | Pip Calculator</h5>
                        </div>
                        <!--<div class="cont2">-->
                        <!--    <div class="d-flex align-items-center">-->
                        <!--        <span>-->
                        <!--            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">-->
                        <!--                <path d="M30.0833 6.33203H7.91667C6.16776 6.33203 4.75 7.7498 4.75 9.4987V31.6654C4.75 33.4143 6.16776 34.832 7.91667 34.832H30.0833C31.8322 34.832 33.25 33.4143 33.25 31.6654V9.4987C33.25 7.7498 31.8322 6.33203 30.0833 6.33203Z" stroke="#0C3D93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                        <!--                <path d="M25.334 3.16797V9.5013" stroke="#0C3D93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                        <!--                <path d="M12.666 3.16797V9.5013" stroke="#0C3D93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                        <!--                <path d="M4.75 15.832H33.25" stroke="#0C3D93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>-->
                        <!--            </svg>-->
                        <!--        </span>-->
                        <!--        <p class="p-fs5 tx-grey300">3 - 9 Jul, 2023</p>-->
                        <!--    </div>-->

                        <!--    <a class="calendar-btn" href="#">Current time: 4:25 (GMT +5:00)</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="table100 piptable">
                <iframe src="https://www.jmibrokers.com/en/pip-calculator2/" scrolling="no" style="width: 100%; height: 100%; min-height: 1200px;"></iframe>
                <!--<table>-->
                <!--    <thead>-->
                <!--        <tr>-->
                <!--            <th class="bld tx-grey300">Currency</th>-->
                <!--            <th class="bld tx-grey300">Price</th>-->
                <!--            <th class="text-center bld tx-grey300">Standard Lot <br> (Units 100,000)</th>-->
                <!--            <th class="text-center bld tx-grey300">Mini Lot <br> (Units 10,000)</th>-->
                <!--            <th class="text-center bld tx-grey300">Micro Lot <br> (Units 1,000)</th>-->
                <!--        </tr>-->
                <!--    </thead>-->
                <!--    <tbody>-->
                <!--        <tr>-->
                <!--            <td>AUD/CAD</td>-->
                <!--            <td>0.8880</td>-->
                <!--            <td class="text-center">7.53</td>-->
                <!--            <td class="text-center tb-blue">0.75</td>-->
                <!--            <td class="text-center">0.08</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CHF</td>-->
                <!--            <td>0.5945</td>-->
                <!--            <td class="text-center">11.25</td>-->
                <!--            <td class="text-center tb-blue">1.12</td>-->
                <!--            <td class="text-center">1.12</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CAD</td>-->
                <!--            <td>0.8880</td>-->
                <!--            <td class="text-center">7.53</td>-->
                <!--            <td class="text-center tb-blue">0.75</td>-->
                <!--            <td class="text-center">0.08</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CHF</td>-->
                <!--            <td>0.5945</td>-->
                <!--            <td class="text-center">11.25</td>-->
                <!--            <td class="text-center tb-blue">1.12</td>-->
                <!--            <td class="text-center">1.12</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CAD</td>-->
                <!--            <td>0.8880</td>-->
                <!--            <td class="text-center">7.53</td>-->
                <!--            <td class="text-center tb-blue">0.75</td>-->
                <!--            <td class="text-center">0.08</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CHF</td>-->
                <!--            <td>0.5945</td>-->
                <!--            <td class="text-center">11.25</td>-->
                <!--            <td class="text-center tb-blue">1.12</td>-->
                <!--            <td class="text-center">1.12</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CAD</td>-->
                <!--            <td>0.8880</td>-->
                <!--            <td class="text-center">7.53</td>-->
                <!--            <td class="text-center tb-blue">0.75</td>-->
                <!--            <td class="text-center">0.08</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CHF</td>-->
                <!--            <td>0.5945</td>-->
                <!--            <td class="text-center">11.25</td>-->
                <!--            <td class="text-center tb-blue">1.12</td>-->
                <!--            <td class="text-center">1.12</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CAD</td>-->
                <!--            <td>0.8880</td>-->
                <!--            <td class="text-center">7.53</td>-->
                <!--            <td class="text-center tb-blue">0.75</td>-->
                <!--            <td class="text-center">0.08</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>AUD/CHF</td>-->
                <!--            <td>0.5945</td>-->
                <!--            <td class="text-center">11.25</td>-->
                <!--            <td class="text-center tb-blue">1.12</td>-->
                <!--            <td class="text-center">1.12</td>-->
                <!--        </tr>-->
                <!--    </tbody>-->
                <!--</table>-->
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
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

    <section class="calendar-banner">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2 class="pdB1"><?php echo getPageMetaByIDKeyGroup(17,'Banner Heading 1','Banner');?></h2>
                <p class="p-fs4 tx-white pdB1"><?php echo getPageMetaByIDKeyGroup(17,'Description','Banner');?></p>
                <a class="gd-btn marR1 signUp" href="<?php echo getPageMetaByIDKeyGroup(17,'Banner Button URL','Banner');?>"><?php echo getPageMetaByIDKeyGroup(17,'Banner Button Text','Banner');?>
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
                            <h5 class="tx-blue">Economic Calendar</h5>
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
            <div class="table100 tablefirstremove">
                <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradays.com/en/economic-calendar/widget?mode=2&amp;utm_source=www.jmibrokers.com" style="width: 100%; min-height: 500px;"></iframe>
                <!--<table>-->
                <!--    <thead>-->
                <!--        <tr>-->
                <!--            <th>Time</th>-->
                <!--            <th>Currency</th>-->
                <!--            <th>Canada Day</th>-->
                <!--            <th>Actual</th>-->
                <!--            <th>Forecast</th>-->
                <!--            <th>Previous</th>-->
                <!--        </tr>-->
                <!--    </thead>-->
                <!--    <tbody>-->
                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
                <!--        </tr>-->

                <!--        <tr>-->
                <!--            <td>3:45</td>-->
                <!--            <td><div class="d-flex align-items-center"><span class="me-3"><img src="assets/images/calendar/1.png" alt=""></span>CAD</div></td>-->
                <!--            <td>Building Consents m/m</td>-->
                <!--            <td class="text-danger">-2.2%</td>-->
                <!--            <td>-1.8%</td>-->
                <!--            <td>-2.6%</td>-->
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
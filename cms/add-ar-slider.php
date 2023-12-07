<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .arabic {
            direction: rtl;
        }

        .custom-radio {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }


        input {
            font-family: 'Russo One', sans-serif;
        }

        .custom-radio input {
            margin-right: 8px;
            /* Adjust spacing between radio button and label */
            appearance: none;
            width: 12px;
            height: 12px;
            /* Border color */
            border-radius: 50%;
            /* Make it a circle */
            outline: none;
            cursor: pointer;
        }

        .custom-radio input:checked {
            background-color: #3498db;
            /* Background color when checked */
        }

        .custom-radio label {
            margin-bottom: 0;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <?php include('includes/header.php');

    ?>
    <div class="app-wrapper arabic">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">إضافة عرض تقديمي</h1>
                <hr class="mb-4">
                <div id="error-message"></div>
                <form class="add-ar-slideshow" enctype="multipart/form-data">
                    <ul>
                        <li class="a">
                            <!-- <div>
                            <label style="display:block;">ID</label>
                            <input type="text" name="id" id="a1_link" placeholder="id" class="form-control" />
                        </div> -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>رابط الصورة</label>
                                    <input type="file" placeholder="رابط الصورة" name="fileToUpload" id="fileToUpload"
                                        class="form-control" />
                                </div>

                                <div class="col-sm-5">
                                    <label style="display:block;">التعليق</label>
                                    <input type="text" name="slide" id="arabicInput" placeholder="التعليق"
                                        class="form-control" />
                                </div>

                                <div class="col-sm-4">
                                    <label style="display:block;">عرض الشريحة</label>

                                    <div class="custom-radio">
                                        <input type="radio" name="slide_display" id="slide_display" value="1">
                                        <label for="show">عرض</label>
                                    </div>

                                    <div class="custom-radio">
                                        <input type="radio" name="slide_display" id="slide_display" value="0">
                                        <label for="hide">إخفاء</label>
                                    </div>
                                </div>
                            </div>



            </div>
            <br /><br />
            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">شريحة A1</label>
                    <input type="text" placeholder="شريحة a1" name="a1" id="arabicInput" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="a1_display" id="a1_display_show" value="1">
                        <label class="text-white" for="a1_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="a1_display" id="a1_display_hide" value="0">
                        <label class="text-white" for="a1_display_hide">إخفاء</label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">a1 رابط</label>
                    <input type="url" name="a1_link" id="a1_link" placeholder="رابط a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 حجم الخط</label>
                    <input type="text" name="a1_fontsize" id="a1_fontsize" placeholder="حجم الخط a1"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">لون a1</label>
                    <input type="color" name="a1_color" id="a1_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 خلفية</label>
                    <input type="color" name="a1_background" id="a1_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 عرض</label>
                    <input type="text" name="a1_width" id="a1_width" placeholder="عرض a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 ارتفاع</label>
                    <input type="text" name="a1_height" id="a1_height" placeholder="ارتفاع a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 أعلى</label>
                    <input type="text" name="a1_top" id="a1_top" placeholder="أعلى a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 اليسار</label>
                    <input type="text" name="a1_left" id="a1_left" placeholder="اليسار a1" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>شريحة t</label>
                    <input type="text" placeholder="شريحة t" name="t" id="t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="t_display" id="t_display_show" value="1">
                        <label for="t_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="t_display" id="t_display_hide" value="0">
                        <label for="t_display_hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">t رابط</label>
                    <input type="url" name="t_link" id="t_link" placeholder="رابط t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t حجم الخط</label>
                    <input type="text" name="t_fontsize" id="t_fontsize" placeholder="حجم الخط t"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">لون t</label>
                    <input type="color" name="t_color" id="t_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t خلفية</label>
                    <input type="color" name="t_background" id="t_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t عرض</label>
                    <input type="text" name="t_width" id="t_width" placeholder="عرض t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t ارتفاع</label>
                    <input type="text" name="t_height" id="t_height" placeholder="ارتفاع t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t أعلى</label>
                    <input type="text" name="t_top" id="t_top" placeholder="أعلى t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t اليسار</label>
                    <input type="text" name="t_left" id="t_left" placeholder="اليسار t" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">شريحة d1</label>
                    <input type="text" placeholder="شريحة d1" name="d1" id="d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="d1_display" id="d1_display_show" value="1">
                        <label class="text-white" for="d1_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d1_display" id="d1_display_hide" value="0">
                        <label class="text-white" for="d1_display_hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">d1 رابط</label>
                    <input type="url" name="d1_link" id="d1_link" placeholder="رابط d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 حجم الخط</label>
                    <input type="text" name="d1_fontsize" id="d1_fontsize" placeholder="حجم الخط d1"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">لون d1</label>
                    <input type="color" name="d1_color" id="d1_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 خلفية</label>
                    <input type="color" name="d1_background" id="d1_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 عرض</label>
                    <input type="text" name="d1_width" id="d1_width" placeholder="عرض d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 ارتفاع</label>
                    <input type="text" name="d1_height" id="d1_height" placeholder="ارتفاع d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 أعلى</label>
                    <input type="text" name="d1_top" id="d1_top" placeholder="أعلى d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 اليسار</label>
                    <input type="text" name="d1_left" id="d1_left" placeholder="اليسار d1" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>شريحة d2</label>
                    <input type="text" placeholder="شريحة d2" name="d2" id="d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="d2_display" id="d2_display_show" value="1">
                        <label for="d2_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d2_display" id="d2_display_hide" value="0">
                        <label for="d2_display_hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">d2 رابط</label>
                    <input type="url" name="d2_link" id="d2_link" placeholder="رابط d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 حجم الخط</label>
                    <input type="text" name="d2_fontsize" id="d2_fontsize" placeholder="حجم الخط d2"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">لون d2</label>
                    <input type="color" name="d2_color" id="d2_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 خلفية</label>
                    <input type="color" name="d2_background" id="d2_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 عرض</label>
                    <input type="text" name="d2_width" id="d2_width" placeholder="عرض d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 ارتفاع</label>
                    <input type="text" name="d2_height" id="d2_height" placeholder="ارتفاع d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 أعلى</label>
                    <input type="text" name="d2_top" id="d2_top" placeholder="أعلى d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 اليسار</label>
                    <input type="text" name="d2_left" id="d2_left" placeholder="اليسار d2" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">شريحة d3</label>
                    <input type="text" placeholder="شريحة d3" name="d3" id="d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="d3_display" id="d3_display_show" value="1">
                        <label class="text-white" for="d3_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d3_display" id="d3_display_hide" value="0">
                        <label class="text-white" for="d3_display_hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">d3 رابط</label>
                    <input type="url" name="d3_link" id="d3_link" placeholder="رابط d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 حجم الخط</label>
                    <input type="text" name="d3_fontsize" id="d3_fontsize" placeholder="حجم الخط d3"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">لون d3</label>
                    <input type="color" name="d3_color" id="d3_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 خلفية</label>
                    <input type="color" name="d3_background" id="d3_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 عرض</label>
                    <input type="text" name="d3_width" id="d3_width" placeholder="عرض d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 ارتفاع</label>
                    <input type="text" name="d3_height" id="d3_height" placeholder="ارتفاع d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 أعلى</label>
                    <input type="text" name="d3_top" id="d3_top" placeholder="أعلى d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 اليسار</label>
                    <input type="text" name="d3_left" id="d3_left" placeholder="اليسار d3" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>شريحة d4</label>
                    <input type="text" placeholder="شريحة d4" name="d4" id="d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="d4_display" id="d4_display_show" value="1">
                        <label for="d4_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d4_display" id="d4_display_hide" value="0">
                        <label for="d4_display_hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">d4 رابط</label>
                    <input type="url" name="d4_link" id="d4_link" placeholder="رابط d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 حجم الخط</label>
                    <input type="text" name="d4_fontsize" id="d4_fontsize" placeholder="حجم الخط d4"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">لون d4</label>
                    <input type="color" name="d4_color" id="d4_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 خلفية</label>
                    <input type="color" name="d4_background" id="d4_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 عرض</label>
                    <input type="text" name="d4_width" id="d4_width" placeholder="عرض d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 ارتفاع</label>
                    <input type="text" name="d4_height" id="d4_height" placeholder="ارتفاع d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 أعلى</label>
                    <input type="text" name="d4_top" id="d4_top" placeholder="أعلى d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 اليسار</label>
                    <input type="text" name="d4_left" id="d4_left" placeholder="اليسار d4" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">شريحة d5</label>
                    <input type="text" placeholder="شريحة d5" name="d5" id="d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 العرض</label>
                    <div class="custom-radio">
                        <input type="radio" name="d5_display" id="d5_display_show" value="1">
                        <label class="text-white" for="d5_display_show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d5_display" id="d5_display_hide" value="0">
                        <label class="text-white" for="d5_display_hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">d5 رابط</label>
                    <input type="url" name="d5_link" id="d5_link" placeholder="رابط d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 حجم الخط</label>
                    <input type="text" name="d5_fontsize" id="d5_fontsize" placeholder="حجم الخط d5"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">لون d5</label>
                    <input type="color" name="d5_color" id="d5_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 خلفية</label>
                    <input type="color" name="d5_background" id="d5_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 عرض</label>
                    <input type="text" name="d5_width" id="d5_width" placeholder="عرض d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 ارتفاع</label>
                    <input type="text" name="d5_height" id="d5_height" placeholder="ارتفاع d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 أعلى</label>
                    <input type="text" name="d5_top" id="d5_top" placeholder="أعلى d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 اليسار</label>
                    <input type="text" name="d5_left" id="d5_left" placeholder="اليسار d5" class="form-control" />
                </div>
            </div>


            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>زر الشريحة</label>
                    <input type="text" placeholder="زر الشريحة" name="btn" id="btn" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">عرض الزر</label>
                    <div class="custom-radio">
                        <input type="radio" name="btn_display" id="btn_display" value="1">
                        <label for="show">عرض</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="btn_display" id="btn_display" value="0">
                        <label for="hide">إخفاء</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">رابط الزر</label>
                    <input type="url" name="btn_link" id="btn_link" placeholder="رابط الزر" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">حجم خط الزر</label>
                    <input type="text" name="btn_fontsize" id="btn_fontsize" placeholder="حجم خط الزر"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">لون الزر</label>
                    <input type="color" name="btn_color" id="btn_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">خلفية الزر</label>
                    <input type="color" name="btn_background" id="btn_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">عرض الزر</label>
                    <input type="text" name="btn_width" id="btn_width" placeholder="عرض الزر" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">ارتفاع الزر</label>
                    <input type="text" name="btn_height" id="btn_height" placeholder="ارتفاع الزر"
                        class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">أعلى الزر</label>
                    <input type="text" name="btn_top" id="btn_top" placeholder="أعلى الزر" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">اليسار الزر</label>
                    <input type="text" name="btn_left" id="btn_left" placeholder="اليسار الزر" class="form-control" />
                </div>
            </div>


            </li>
            <div class="col-sm-3" style="display: block; text-align: center;">
                <button type="submit" class="btn btn-success">حفظ العرض التقديمي</button>
            </div>


            </form>
        </div>
        <footer class="app-footer">
            <div class="container text-center py-3">
            </div>
        </footer>
    </div>
    <script>
        // Function to convert English text to Arabic text
        function convertToArabic(text) {
            return text.replace(/[a-zA-Z]/g, function (match) {
                const englishToArabicMap = {
                    a: 'ا', b: 'ب', c: 'ج', d: 'د', e: 'ه',
                    f: 'ف', g: 'غ', h: 'ح', i: 'ي', j: 'ج',
                    k: 'ك', l: 'ل', m: 'م', n: 'ن', o: 'أ',
                    p: 'ب', q: 'ق', r: 'ر', s: 'س', t: 'ت',
                    u: 'و', v: 'ف', w: 'و', x: 'خ', y: 'ي', z: 'ز'
                };

                return englishToArabicMap[match.toLowerCase()] || match;
            });
        }

        // Event listener to update the displayed text in real-time
        document.getElementById('arabicInput').addEventListener('input', function () {
            const inputValue = this.value;
            const arabicText = convertToArabic(inputValue);
            this.value = arabicText;
        });
    </script>

    <?php include('includes/footer.php'); ?>
</body>

</html>
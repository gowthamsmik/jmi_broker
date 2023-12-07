<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .arabhic{
            direction: rtl;
        }
        .border {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            /* Adjust as needed */
            align-items: center;
            /* Center items vertically */
        }

        .m-3 {
            flex: 1;
            /* Adjust as needed */
        }

        .mb-2 {
            display: flex;
            align-items: center;
        }

        .input-radio-container {
            display: flex;
            justify-content: flex-end;
            /* Align radio buttons to the end */
            align-items: center;
        }

        .form-check-inline {
            display: flex;
            align-items: center;
        }

        input[type=radio] {
            width: 10px;
            height: 10px;
        }

        input[type="radio"]:checked {
            background-color: blue;
            color: #ffffff;
        }

        .input-field-container {
            display: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            /* Adjust the duration and easing as needed */
        }
        .label {
    text-align: right;
}

    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <div class="app-wrapper arabhic">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center card">
                    <hr
                        style="height:5px;border-width:0;color:gray;background-color:blue;margin-top:0px;margin-bottom:2px;">
                        <div class="">
    <p class="mb-0 mt-0"><b>المتزلج الإنجليزي</b></p>
</div>

                    <div class="row">
        <div class="col-md-6">
        <div class="mb-2 mt-2">
    <p class="mb-0 mt-0">المتزلج</p>
</div>

        </div>
        <div class="col-md-6">
            <div class="mb-2 mt-2 justify-content-end">
            <button class="btn app-btn-secondary">
    <a class="" href="add-ar-slider.php">إضافة المتزلج</a>
</button>

            </div>
        </div>
    </div>
                    <div class=" my-5">

                        <?php
                        $slideshow = arslidshow();
                        foreach ($slideshow as $slideshowItem) {
                            $slideValue = $slideshowItem['t'];
                            $idValue = $slideshowItem["id"];
                            $displayValue = $slideshowItem['slide_display'];


                            ?>

                                                                                                                                                                                                                                                                                                                                                                                                <div class="mb-2 border h-0 mx-auto" style="background-color:#2466ab;width:90%">
                                                                                                                                                                                                                                                                                                                                                                                                    <div class="m-3 mb-2">
                                                                                                                                                                                                                                                                                                                                                                                                        <i class="fa-solid fa-circle-right p-0"
                                                                                                                                                                                                                                                                                                                                                                                                            style="color: white; display: inline-block;"></i>
                                                                                                                                                                                                                                                                                                                                                                                                        <p style="color: white; display: inline-block; margin-right: 20px;" class="mt-3 p-0"><b>
                                                                                                                                                                                                                                                                                                                                                                                                                <?php echo $slideValue; ?>
                                                                                                                                                                                                                                                                                                                                                                                                            </b></p>
                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                    <div class="input-radio-container">
                                                                                                                                                                                                                                                                                                                                                                                                        <div class="form-check form-check-inline p-0 mx-4 ">
                                                                                                                                                                                                                                                                                                                                                                                                            <input class="form-check-input form-check-input-sm p-1" type="radio" id="<?php echo $idValue ?>"
                                                                                                                                                                                                                                                                                                                                                                                                                name="radio_<?php echo $slideValue; ?>" value="show">
                                                                                                                                                                                                                                                                                                                                                                                                            <label style="text-align:right"   class="form-check-label form-check-label-sm p-0" for="showRadio">عرض</label>
                                                                                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                                                                                        <div class="form-check form-check-inline ">
                                                                                                                                                                                                                                                                                                                                                                                                            <input class="form-check-input form-check-input-sm p-1 " type="radio"
                                                                                                                                                                                                                                                                                                                                                                                                                name="radio_<?php echo $slideValue; ?>" value="hide" checked>
                                                                                                                                                                                                                                                                                                                                                                                                            <label style="text-align:right"   class="form-check-label p-0" for="hideRadio">إخفاء</label>
                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                </div>


                                                                                                                                                                                                                                                                                                                                                                                   <div class="input-field-container mx-auto my-3" id="input_<?php echo $slideValue; ?>"
                                                                                                                                                                                                                                                                                                                                                                                                    style="width:80%;display: <?php echo ($displayValue == 'show') ? 'block' : 'none'; ?>">
                                                                                                                                                                                                                                                                                                                                                                                                    <form class="en-slideshow"  enctype="multipart/form-data">
                                                                                                                                                                                                                                                                                                                                                                                                    <ul style="list-style-type: none;">
                                                                                                                                                                                                                                                                                                                                                                                                    <li class="a" >
                                                                                                                                                                                                                                                                                                                                                                                                    <div>
                                                                                                                                                                <label style="text-align:right"   style="display:block;">الرقم الهويّ</label>
                                                                                                                                                                <input type="text" name="id" id="a1_link" placeholder="الرقم الهويّ" value=<?php echo $slideshowItem['id']; ?> class="form-control"  readonly/>
                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                <div class="col-sm-3">
                                                                                                                                                                    <label style="text-align:right"  >رابط الصورة</label>
                                                                                                                                                                    <input type="file" placeholder="صورة الشريحة" name="fileToUpload" id="fileToUpload" class="form-control" />
                                                                                                                                                                </div>

                                                                                                                                                                <div class="col-sm-9">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض الصورة</label>
                                                                                                                                                                    <img src="jmi-sms<?php echo $slideshowItem['img']; ?>" alt="الصورة الحالية" width="100%" height="auto" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                                                        <br /><br />
                                                                                                                                                                                                                                                                                                                                                                                                        <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >شريحة a1</label>
                                                                                                                                                                    <input type="text" placeholder="شريحة a1" value=<?php echo $slideshowItem['a1'] ?> name="a1" id="a1" class="form-control"  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض a1</label>
                                                                                                                                                                    <input type="radio" name="a1_display" id="a1_display" value="1" <?php echo ($slideshowItem['a1_display'] == 1) ? 'checked' : ''; ?> /> عرض
                                                                                                                                                                    <input type="radio" name="a1_display" id="a1_display" style="margin-left:10px;" value="0" <?php echo ($slideshowItem['a1_display'] == "hide") ? 'checked' : ''; ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط a1</label>
                                                                                                                                                                    <input type="url" name="a1_link" id="a1_link" placeholder="رابط a1"  value=<?php echo $slideshowItem['a1_link'] ?> class="form-control"  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط a1</label>
                                                                                                                                                                    <input type="text" name="a1_fontsize" id="a1_fontsize" placeholder="حجم الخط a1"  value=<?php echo $slideshowItem['a1_fontsize'] ?> class="form-control"  />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون a1</label>
                                                                                                                                                                    <input type="color" name="a1_color" id="a1_color" value=<?php echo $slideshowItem['a1_color'] ?>/>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية a1</label>
                                                                                                                                                                    <input type="color" name="a1_background" id="a1_background"  value=<?php echo $slideshowItem['a1_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض a1</label>
                                                                                                                                                                    <input type="text" name="a1_width" id="a1_width" placeholder="عرض a1"  class="form-control"  value=<?php echo $slideshowItem['a1_width'] ?>  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع a1</label>
                                                                                                                                                                    <input type="text" name="a1_height" id="a1_height" placeholder="ارتفاع a1"  class="form-control"  value=<?php echo $slideshowItem['a1_height'] ?>  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى a1</label>
                                                                                                                                                                    <input type="text" name="a1_top" id="a1_top" placeholder="أعلى a1"  class="form-control"  value=<?php echo $slideshowItem['a1_top'] ?>  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار a1</label>
                                                                                                                                                                    <input type="text" name="a1_left" id="a1_left" placeholder="يسار a1"  class="form-control"  value=<?php echo $slideshowItem['a1_left'] ?>  />
                                                                                                                                                                </div>
                                                                                                                                                            </div>



                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >الشريحة t</label>
                                                                                                                                                                    <input type="text" placeholder="الشريحة t" name="t" id="t" value=<?php echo $slideshowItem['t'] ?> class="form-control"  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض t</label>
                                                                                                                                                                    <input type="radio" name="t_display" id="t_display" value="1" <?PHP if ($slideshowItem['t_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> عرض <input type="radio" name="t_display" id="t_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['t_display'] == 0) {
                                                                                                                                                                          echo 'checked';
                                                                                                                                                                      } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط t</label>
                                                                                                                                                                    <input type="url" name="t_link" id="t_link" placeholder="رابط t"  value=<?php echo $slideshowItem['t_link'] ?> class="form-control"  />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط t</label>
                                                                                                                                                                    <input type="text" name="t_fontsize" id="t_fontsize" placeholder="حجم الخط t"  value=<?php echo $slideshowItem['t_fontsize'] ?> class="form-control"  />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون t</label>
                                                                                                                                                                    <input type="color" name="t_color" id="t_color"  value=<?php echo $slideshowItem['t_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية t</label>
                                                                                                                                                                    <input type="color" name="t_background" id="t_background"  value=<?php echo $slideshowItem['t_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض t</label>
                                                                                                                                                                    <input type="text" name="t_width" id="t_width" placeholder="عرض t"  class="form-control"  value=<?php echo $slideshowItem['t_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع t</label>
                                                                                                                                                                    <input type="text" name="t_height" id="t_height" placeholder="ارتفاع t"  class="form-control"  value=<?php echo $slideshowItem['t_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى t</label>
                                                                                                                                                                    <input type="text" name="t_top" id="t_top" placeholder="أعلى t"  class="form-control"  value=<?php echo $slideshowItem['t_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار t</label>
                                                                                                                                                                    <input type="text" name="t_left" id="t_left" placeholder="يسار t"  class="form-control"  value=<?php echo $slideshowItem['t_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >الشريحة d1</label>
                                                                                                                                                                    <input type="text" placeholder="الشريحة d1" name="d1" id="d1" value=<?php echo $slideshowItem['d1'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d1</label>
                                                                                                                                                                    <input type="radio" name="d1_display" id="d1_display" value="1" <?PHP if ($slideshowItem['d1_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> عرض
                                                                                                                                                                    <input type="radio" name="d1_display" id="d1_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d1_display'] == 0) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط d1</label>
                                                                                                                                                                    <input type="url" name="d1_link" id="d1_link" placeholder="رابط d1" value=<?php echo $slideshowItem['d1_link'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط d1</label>
                                                                                                                                                                    <input type="text" name="d1_fontsize" id="d1_fontsize" placeholder="حجم الخط d1" value=<?php echo $slideshowItem['d1_fontsize'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون d1</label>
                                                                                                                                                                    <input type="color" name="d1_color" id="d1_color" value=<?php echo $slideshowItem['d1_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية d1</label>
                                                                                                                                                                    <input type="color" name="d1_background" id="d1_background" value=<?php echo $slideshowItem['d1_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d1</label>
                                                                                                                                                                    <input type="text" name="d1_width" id="d1_width" placeholder="عرض d1" class="form-control" value=<?php echo $slideshowItem['d1_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع d1</label>
                                                                                                                                                                    <input type="text" name="d1_height" id="d1_height" placeholder="ارتفاع d1" class="form-control" value=<?php echo $slideshowItem['d1_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى d1</label>
                                                                                                                                                                    <input type="text" name="d1_top" id="d1_top" placeholder="أعلى d1" class="form-control" value=<?php echo $slideshowItem['d1_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار d1</label>
                                                                                                                                                                    <input type="text" name="d1_left" id="d1_left" placeholder="يسار d1" class="form-control" value=<?php echo $slideshowItem['d1_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>



                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >الشريحة d2</label>
                                                                                                                                                                    <input type="text" placeholder="الشريحة d2"  name="d2" id="d2" value=<?php echo $slideshowItem['d2'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d2</label>
                                                                                                                                                                    <input type="radio" name="d2_display" id="d2_display" value="1" <?PHP if ($slideshowItem['d2_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> عرض <input type="radio" name="d2_display" id="d2_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d2_display'] == 0) {
                                                                                                                                                                          echo 'checked';
                                                                                                                                                                      } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط d2</label>
                                                                                                                                                                    <input type="url" name="d2_link" id="d2_link" placeholder="رابط d2"  value=<?php echo $slideshowItem['d2_link'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط d2</label>
                                                                                                                                                                    <input type="text" name="d2_fontsize" id="d2_fontsize" placeholder="حجم الخط d2"  value=<?php echo $slideshowItem['d2_fontsize'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون d2</label>
                                                                                                                                                                    <input type="color" name="d2_color" id="d2_color"  value=<?php echo $slideshowItem['d2_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية d2</label>
                                                                                                                                                                    <input type="color" name="d2_background" id="d2_background"  value=<?php echo $slideshowItem['d2_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d2</label>
                                                                                                                                                                    <input type="text" name="d2_width" id="d2_width" placeholder="عرض d2" class="form-control" value=<?php echo $slideshowItem['d2_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع d2</label>
                                                                                                                                                                    <input type="text" name="d2_height" id="d2_height" placeholder="ارتفاع d2" class="form-control" value=<?php echo $slideshowItem['d2_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى d2</label>
                                                                                                                                                                    <input type="text" name="d2_top" id="d2_top" placeholder="أعلى d2" class="form-control" value=<?php echo $slideshowItem['d2_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار d2</label>
                                                                                                                                                                    <input type="text" name="d2_left" id="d2_left" placeholder="يسار d2" class="form-control" value=<?php echo $slideshowItem['d2_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >الشريحة d3</label>
                                                                                                                                                                    <input type="text" placeholder="الشريحة d3" name="d3" id="d3" value=<?php echo $slideshowItem['d3'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d3</label>
                                                                                                                                                                    <input type="radio" name="d3_display" id="d3_display" value="1" <?PHP if ($slideshowItem['d3_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> إظهار
                                                                                                                                                                    <input type="radio" name="d3_display" id="d3_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d3_display'] == 0) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط d3</label>
                                                                                                                                                                    <input type="url" name="d3_link" id="d3_link" placeholder="رابط d3" value=<?php echo $slideshowItem['d3_link'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط d3</label>
                                                                                                                                                                    <input type="text" name="d3_fontsize" id="d3_fontsize" placeholder="حجم الخط d3" value=<?php echo $slideshowItem['d3_fontsize'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون d3</label>
                                                                                                                                                                    <input type="color" name="d3_color" id="d3_color" value=<?php echo $slideshowItem['d3_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية d3</label>
                                                                                                                                                                    <input type="color" name="d3_background" id="d3_background" value=<?php echo $slideshowItem['d3_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d3</label>
                                                                                                                                                                    <input type="text" name="d3_width" id="d3_width" placeholder="عرض d3" class="form-control" value=<?php echo $slideshowItem['d3_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع d3</label>
                                                                                                                                                                    <input type="text" name="d3_height" id="d3_height" placeholder="ارتفاع d3" class="form-control" value=<?php echo $slideshowItem['d3_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى d3</label>
                                                                                                                                                                    <input type="text" name="d3_top" id="d3_top" placeholder="أعلى d3" class="form-control" value=<?php echo $slideshowItem['d3_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار d3</label>
                                                                                                                                                                    <input type="text" name="d3_left" id="d3_left" placeholder="يسار d3" class="form-control" value=<?php echo $slideshowItem['d3_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>



                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >الشريحة d4</label>
                                                                                                                                                                    <input type="text" placeholder="الشريحة d4" name="d4" id="d4" value=<?php echo $slideshowItem['d4'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d4</label>
                                                                                                                                                                    <input type="radio" name="d4_display" id="d4_display" value="1" <?PHP if ($slideshowItem['d4_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> عرض <input type="radio" name="d4_display" id="d4_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d4_display'] == 0) {
                                                                                                                                                                          echo 'checked';
                                                                                                                                                                      } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط d4</label>
                                                                                                                                                                    <input type="url" name="d4_link" id="d4_link" placeholder="رابط d4" value=<?php echo $slideshowItem['d4_link'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط d4</label>
                                                                                                                                                                    <input type="text" name="d4_fontsize" id="d4_fontsize" placeholder="حجم الخط d4" value=<?php echo $slideshowItem['d4_fontsize'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون d4</label>
                                                                                                                                                                    <input type="color" name="d4_color" id="d4_color" value=<?php echo $slideshowItem['d4_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية d4</label>
                                                                                                                                                                    <input type="color" name="d4_background" id="d4_background" value=<?php echo $slideshowItem['d4_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d4</label>
                                                                                                                                                                    <input type="text" name="d4_width" id="d4_width" placeholder="عرض d4" class="form-control" value=<?php echo $slideshowItem['d4_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع d4</label>
                                                                                                                                                                    <input type="text" name="d4_height" id="d4_height" placeholder="ارتفاع d4" class="form-control" value=<?php echo $slideshowItem['d4_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى d4</label>
                                                                                                                                                                    <input type="text" name="d4_top" id="d4_top" placeholder="أعلى d4" class="form-control" value=<?php echo $slideshowItem['d4_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار d4</label>
                                                                                                                                                                    <input type="text" name="d4_left" id="d4_left" placeholder="يسار d4" class="form-control" value=<?php echo $slideshowItem['d4_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"  >سلايد d5</label>
                                                                                                                                                                    <input type="text" placeholder="سلايد d5" name="d5" id="d5" value=<?php echo $slideshowItem['d5'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d5</label>
                                                                                                                                                                    <input type="radio" name="d5_display" id="d5_display" value="1" <?PHP if ($slideshowItem['d5_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> عرض <input type="radio" name="d5_display" id="d5_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d5_display'] == 0) {
                                                                                                                                                                          echo 'checked';
                                                                                                                                                                      } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">رابط d5</label>
                                                                                                                                                                    <input type="url" name="d5_link" id="d5_link" placeholder="رابط d5" value=<?php echo $slideshowItem['d5_link'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط d5</label>
                                                                                                                                                                    <input type="text" name="d5_fontsize" id="d5_fontsize" placeholder="حجم الخط d5" value=<?php echo $slideshowItem['d5_fontsize'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:gray;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون d5</label>
                                                                                                                                                                    <input type="color" name="d5_color" id="d5_color"  value=<?php echo $slideshowItem['d5_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية d5</label>
                                                                                                                                                                    <input type="color" name="d5_background" id="d5_background"  value=<?php echo $slideshowItem['d5_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض d5</label>
                                                                                                                                                                    <input type="text" name="d5_width" id="d5_width" placeholder="عرض d5" class="form-control" value=<?php echo $slideshowItem['d5_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع d5</label>
                                                                                                                                                                    <input type="text" name="d5_height" id="d5_height" placeholder="ارتفاع d5" class="form-control" value=<?php echo $slideshowItem['d5_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى d5</label>
                                                                                                                                                                    <input type="text" name="d5_top" id="d5_top" placeholder="أعلى d5" class="form-control" value=<?php echo $slideshowItem['d5_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار d5</label>
                                                                                                                                                                    <input type="text" name="d5_left" id="d5_left" placeholder="يسار d5" class="form-control" value=<?php echo $slideshowItem['d5_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>

                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                <label style="text-align:right"   style="text-align: right;">سلايد btn</label>
                                                                                                                                                                    <input type="text" placeholder="سلايد btn"  name="btn" id="btn" value=<?php echo $slideshowItem['btn'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض btn</label>
                                                                                                                                                                    <input type="radio" name="btn_display" id="btn_display" value="1" <?PHP if ($slideshowItem['btn_display'] == 1) {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?> /> عرض <input type="radio" name="btn_display" id="btn_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['btn_display'] == 0) {
                                                                                                                                                                          echo 'checked';
                                                                                                                                                                      } ?> /> إخفاء
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;" >رابط btn</label>
                                                                                                                                                                    <input type="url" name="btn_link" id="btn_link" placeholder="رابط btn" value=<?php echo $slideshowItem['btn_link'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">حجم الخط btn</label>
                                                                                                                                                                    <input type="text" name="btn_fontsize" id="btn_fontsize" placeholder="حجم الخط btn" value=<?php echo $slideshowItem['btn_fontsize'] ?> class="form-control" />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                            <div class="row" style="background:white;padding-bottom:25px;">
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">لون btn</label>
                                                                                                                                                                    <input type="color" name="btn_color" id="btn_color"  value=<?php echo $slideshowItem['btn_color'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">خلفية btn</label>
                                                                                                                                                                    <input type="color" name="btn_background" id="btn_background"  value=<?php echo $slideshowItem['btn_background'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">عرض btn</label>
                                                                                                                                                                    <input type="text" name="btn_width" id="btn_width" placeholder="عرض btn" class="form-control"  value=<?php echo $slideshowItem['btn_width'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">ارتفاع btn</label>
                                                                                                                                                                    <input type="text" name="btn_height" id="btn_height" placeholder="ارتفاع btn" class="form-control"  value=<?php echo $slideshowItem['btn_height'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">أعلى btn</label>
                                                                                                                                                                    <input type="text" name="btn_top" id="btn_top" placeholder="أعلى btn" class="form-control"  value=<?php echo $slideshowItem['btn_top'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-2">
                                                                                                                                                                    <label style="text-align:right"   style="display:block;">يسار btn</label>
                                                                                                                                                                    <input type="text" name="btn_left" id="btn_left" placeholder="يسار btn" class="form-control"  value=<?php echo $slideshowItem['btn_left'] ?> />
                                                                                                                                                                </div>
                                                                                                                                                            </div>


                                                                                                                                                                                                                                                                                                                                                                                                </li>
                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-sm-3" style="display:block;text-align:center;">
                                                                                                                                                                <button type="submit" class="btn btn-success">تحديث العرض التقديمي</button>
                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                            </form>
                                                                                                                                                                                                                                                                                                                                                                                            </ul>

                                                                                                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                                                                                                <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var radioButtons = document.querySelectorAll('[name^="radio_"]');
        var inputFields = document.querySelectorAll('.input-field-container');

        radioButtons.forEach(function (radioButton) {
            radioButton.addEventListener('click', function () {
                var slideValue = this.name.replace('radio_', '');
                var inputField = document.getElementById('input_' + slideValue);
                var idValue = this.id;

                if (this.value === 'show') {
                    inputFields.forEach(function (field) {
                        if (field.id !== 'input_' + slideValue) {
                            hideInputField(field);
                        }
                    });
                    showInputField(inputField, slideValue, idValue);
                } else {
                    hideInputField(inputField);
                }
            });
        });
        function showInputField(inputField, slideValue, idValue) {
            inputField.style.display = 'block';
            inputField.style.maxHeight = inputField.scrollHeight + 'px';
            // onRadioButtonClick(slideValue, idValue);
        }
        function hideInputField(inputField) {
            inputField.style.maxHeight = '0';
            setTimeout(function () {
                inputField.style.display = 'none';
            }, 300);
        }
    });
</script>
</body>
</html>
<?php include('includes/footer.php'); ?>
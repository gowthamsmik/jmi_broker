<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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
    </style>
</head>

<body>
    <?php include('includes/header.php'); ?>
<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
<div class="container-xl">

<div class="row g-3 mb-4 align-items-center card">
<hr
style="height:5px;border-width:0;color:gray;background-color:blue;margin-top:0px;margin-bottom:2px;">
<div class="">
<p class="mb-0 mt-0"><b>Русский слайдер</b></p>
</div>
<div class="row">
<div class="col-md-6">
<div class="mb-2 mt-2">
<p class="mb-0 mt-0">Слайдер</p>
</div>
</div>
<div class="col-md-6">
<div class="mb-2 mt-2 justify-content-end">
<button class="btn app-btn-secondary">
<a class="" href="add-ru-slider.php">Добавить слайд</a>
</button>
</div>
</div>
</div>

<div class=" my-5">

<?php
$slideshow = ruslidshow();
foreach ($slideshow as $slideshowItem) {
    $slideValue = $slideshowItem['t'];
    $idValue = $slideshowItem["id"];
    $displayValue = $slideshowItem['slide_display'];


    ?>

                                                <div class="mb-2 border h-0 mx-auto" style="background-color:#2466ab;width:90%">
                                                    <div class="m-3 mb-2">
                                                        <i class="fa-solid fa-circle-right p-0" style="color: white; display: inline-block;"></i>
                                                        <p style="color: white; display: inline-block; margin-left: 5px;" class="mt-3 p-0"><b>
                                                                <?php echo $slideValue; ?>
                                                            </b></p>
                                                    </div>
                                                    <div class="input-radio-container">
                                                        <div class="form-check form-check-inline p-0">
                                                            <input class="form-check-input form-check-input-sm p-1" type="radio" id="<?php echo $idValue ?>"
                                                                name="radio_<?php echo $slideValue; ?>" value="show">
                                                            <label class="form-check-label form-check-label-sm p-0" for="showRadio">Показывать</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input form-check-input-sm p-1" type="radio" name="radio_<?php echo $slideValue; ?>"
                                                                value="hide" checked>
                                                            <label class="form-check-label p-0" for="hideRadio">Скрывать</label>
                                                        </div>
                                                    </div>
                                                </div>



                                                    <div class="input-field-container mx-auto my-3" id="input_<?php echo $slideValue; ?>"
                                                                    style="width:80%;display: <?php echo ($displayValue == 'show') ? 'block' : 'none'; ?>">
                                                                    <form class="ru-slideshow"  enctype="multipart/form-data">
                                                                    <ul>
                                                                    <li class="a" >
                                                                    <div>
                                        <label style="display:block;">ИД</label>
                                        <input type="text" name="id" id="a1_link" placeholder="ИД" value=<?php echo $slideshowItem['id']; ?> class="form-control" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>URL изображения</label>
                                            <input type="file" placeholder="Изображение слайда" name="fileToUpload" id="fileToUpload" class="form-control" />
                                        </div>

                                        <div class="col-sm-9">
                                            <label style="display:block;">Просмотр изображения</label>
                                            <img src="jmi-sms<?php echo $slideshowItem['img']; ?>" alt="Текущее изображение" width="100%" height="auto" />
                                        </div>
                                    </div>

                                                                        <br /><br />
                                                                        <div class="row" style="background:gray; padding-bottom:25px;">
                                    <div class="col-sm-4">
                                        <label>Слайд a1</label>
                                        <input type="text" placeholder="Слайд a1" value=<?php echo $slideshowItem['a1'] ?> name="a1" id="a1" class="form-control" />
                                    </div>
                                    <div class="col-sm-2">
                                        <label style="display:block;">Отображение a1</label>
                                        <input type="radio" name="a1_display" id="a1_display" value="1" <?php echo ($slideshowItem['a1_display'] == 1) ? 'checked' : ''; ?> /> Показать
                                        <input type="radio" name="a1_display" id="a1_display" style="margin-left:10px;" value="0" <?php echo ($slideshowItem['a1_display'] == "hide") ? 'checked' : ''; ?> /> Скрыть
                                    </div>
                                    <div class="col-sm-4">
                                        <label style="display:block;">Ссылка a1</label>
                                        <input type="url" name="a1_link" id="a1_link" placeholder="Ссылка a1" value=<?php echo $slideshowItem['a1_link'] ?> class="form-control" />
                                    </div>
                                    <div class="col-sm-2">
                                        <label style="display:block;">Размер шрифта a1</label>
                                        <input type="text" name="a1_fontsize" id="a1_fontsize" placeholder="Размер шрифта a1" value=<?php echo $slideshowItem['a1_fontsize'] ?> class="form-control" />
                                    </div>
                                </div>


                                <div class="row" style="background:gray; padding-bottom:25px;">
                                <div class="col-sm-2">
                                    <label style="display:block;">Цвет a1</label>
                                    <input type="color" name="a1_color" id="a1_color" value=<?php echo $slideshowItem['a1_color'] ?>/>
                                </div>
                                <div class="col-sm-2">
                                    <label style="display:block;">Фон a1</label>
                                    <input type="color" name="a1_background" id="a1_background" value=<?php echo $slideshowItem['a1_background'] ?> />
                                </div>
                                <div class="col-sm-2">
                                    <label style="display:block;">Ширина a1</label>
                                    <input type="text" name="a1_width" id="a1_width" placeholder="Ширина a1" class="form-control" value=<?php echo $slideshowItem['a1_width'] ?>/>
                                </div>
                                <div class="col-sm-2">
                                    <label style="display:block;">Высота a1</label>
                                    <input type="text" name="a1_height" id="a1_height" placeholder="Высота a1" class="form-control" value=<?php echo $slideshowItem['a1_height'] ?> />
                                </div>
                                <div class="col-sm-2">
                                    <label style="display:block;">Верх a1</label>
                                    <input type="text" name="a1_top" id="a1_top" placeholder="Верх a1" class="form-control" value=<?php echo $slideshowItem['a1_top'] ?> />
                                </div>
                                <div class="col-sm-2">
                                    <label style="display:block;">Лево a1</label>
                                    <input type="text" name="a1_left" id="a1_left" placeholder="Лево a1" class="form-control" value=<?php echo $slideshowItem['a1_left'] ?> />
                                </div>
                            </div>



                            <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Слайд t</label>
                                <input type="text" placeholder="Слайд t" name="t" id="t" value=<?php echo $slideshowItem['t'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение t</label>
                                <input type="radio" name="t_display" id="t_display" value="1" <?PHP if ($slideshowItem['t_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать
                                <input type="radio" name="t_display" id="t_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['t_display'] == 0) {
                                    echo 'checked';
                                } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка t</label>
                                <input type="url" name="t_link" id="t_link" placeholder="Ссылка t" value=<?php echo $slideshowItem['t_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта t</label>
                                <input type="text" name="t_fontsize" id="t_fontsize" placeholder="Размер шрифта t" value=<?php echo $slideshowItem['t_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет t</label>
                                <input type="color" name="t_color" id="t_color" value=<?php echo $slideshowItem['t_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон t</label>
                                <input type="color" name="t_background" id="t_background" value=<?php echo $slideshowItem['t_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина t</label>
                                <input type="text" name="t_width" id="t_width" placeholder="Ширина t" class="form-control" value=<?php echo $slideshowItem['t_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота t</label>
                                <input type="text" name="t_height" id="t_height" placeholder="Высота t" class="form-control" value=<?php echo $slideshowItem['t_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верх t</label>
                                <input type="text" name="t_top" id="t_top" placeholder="Верх t" class="form-control" value=<?php echo $slideshowItem['t_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Лево t</label>
                                <input type="text" name="t_left" id="t_left" placeholder="Лево t" class="form-control" value=<?php echo $slideshowItem['t_left'] ?> />
                            </div>
                        </div>


                        <div class="row" style="background:gray; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Слайд d1</label>
                                <input type="text" placeholder="Слайд d1" name="d1" id="d1" value=<?php echo $slideshowItem['d1'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение d1</label>
                                <input type="radio" name="d1_display" id="d1_display" value="1" <?PHP if ($slideshowItem['d1_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать
                                <input type="radio" name="d1_display" id="d1_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d1_display'] == 0) {
                                    echo 'checked';
                                } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка d1</label>
                                <input type="url" name="d1_link" id="d1_link" placeholder="Ссылка d1" value=<?php echo $slideshowItem['d1_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта d1</label>
                                <input type="text" name="d1_fontsize" id="d1_fontsize" placeholder="Размер шрифта d1" value=<?php echo $slideshowItem['d1_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:gray; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет d1</label>
                                <input type="color" name="d1_color" id="d1_color" value=<?php echo $slideshowItem['d1_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон d1</label>
                                <input type="color" name="d1_background" id="d1_background" value=<?php echo $slideshowItem['d1_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина d1</label>
                                <input type="text" name="d1_width" id="d1_width" placeholder="Ширина d1" class="form-control" value=<?php echo $slideshowItem['d1_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота d1</label>
                                <input type="text" name="d1_height" id="d1_height" placeholder="Высота d1" class="form-control" value=<?php echo $slideshowItem['d1_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верх d1</label>
                                <input type="text" name="d1_top" id="d1_top" placeholder="Верх d1" class="form-control" value=<?php echo $slideshowItem['d1_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Лево d1</label>
                                <input type="text" name="d1_left" id="d1_left" placeholder="Лево d1" class="form-control" value=<?php echo $slideshowItem['d1_left'] ?> />
                            </div>
                        </div>



                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Слайд d2</label>
                                <input type="text" placeholder="Слайд d2" name="d2" id="d2" value=<?php echo $slideshowItem['d2'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение d2</label>
                                <input type="radio" name="d2_display" id="d2_display" value="1" <?PHP if ($slideshowItem['d2_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать
                                <input type="radio" name="d2_display" id="d2_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d2_display'] == 0) {
                                    echo 'checked';
                                } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка d2</label>
                                <input type="url" name="d2_link" id="d2_link" placeholder="Ссылка d2" value=<?php echo $slideshowItem['d2_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта d2</label>
                                <input type="text" name="d2_fontsize" id="d2_fontsize" placeholder="Размер шрифта d2" value=<?php echo $slideshowItem['d2_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет d2</label>
                                <input type="color" name="d2_color" id="d2_color" value=<?php echo $slideshowItem['d2_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон d2</label>
                                <input type="color" name="d2_background" id="d2_background" value=<?php echo $slideshowItem['d2_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина d2</label>
                                <input type="text" name="d2_width" id="d2_width" placeholder="Ширина d2" class="form-control" value=<?php echo $slideshowItem['d2_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота d2</label>
                                <input type="text" name="d2_height" id="d2_height" placeholder="Высота d2" class="form-control" value=<?php echo $slideshowItem['d2_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верх d2</label>
                                <input type="text" name="d2_top" id="d2_top" placeholder="Верх d2" class="form-control" value=<?php echo $slideshowItem['d2_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Лево d2</label>
                                <input type="text" name="d2_left" id="d2_left" placeholder="Лево d2" class="form-control" value=<?php echo $slideshowItem['d2_left'] ?> />
                            </div>
                        </div>


                        <div class="row" style="background:gray; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Слайд d3</label>
                                <input type="text" placeholder="Слайд d3" name="d3" id="d3" value=<?php echo $slideshowItem['d3'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение d3</label>
                                <input type="radio" name="d3_display" id="d3_display" value="1" <?PHP if ($slideshowItem['d3_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать
                                <input type="radio" name="d3_display" id="d3_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d3_display'] == 0) {
                                    echo 'checked';
                                } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка d3</label>
                                <input type="url" name="d3_link" id="d3_link" placeholder="Ссылка d3" value=<?php echo $slideshowItem['d3_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта d3</label>
                                <input type="text" name="d3_fontsize" id="d3_fontsize" placeholder="Размер шрифта d3" value=<?php echo $slideshowItem['d3_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:gray; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет d3</label>
                                <input type="color" name="d3_color" id="d3_color" value=<?php echo $slideshowItem['d3_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон d3</label>
                                <input type="color" name="d3_background" id="d3_background" value=<?php echo $slideshowItem['d3_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина d3</label>
                                <input type="text" name="d3_width" id="d3_width" placeholder="Ширина d3" class="form-control" value=<?php echo $slideshowItem['d3_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота d3</label>
                                <input type="text" name="d3_height" id="d3_height" placeholder="Высота d3" class="form-control" value=<?php echo $slideshowItem['d3_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верх d3</label>
                                <input type="text" name="d3_top" id="d3_top" placeholder="Верх d3" class="form-control" value=<?php echo $slideshowItem['d3_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Лево d3</label>
                                <input type="text" name="d3_left" id="d3_left" placeholder="Лево d3" class="form-control" value=<?php echo $slideshowItem['d3_left'] ?> />
                            </div>
                        </div>



                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Слайд d4</label>
                                <input type="text" placeholder="Слайд d4" name="d4" id="d4" value=<?php echo $slideshowItem['d4'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение d4</label>
                                <input type="radio" name="d4_display" id="d4_display" value="1" <?PHP if ($slideshowItem['d4_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать
                                <input type="radio" name="d4_display" id="d4_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d4_display'] == 0) {
                                    echo 'checked';
                                } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка d4</label>
                                <input type="url" name="d4_link" id="d4_link" placeholder="Ссылка d4" value=<?php echo $slideshowItem['d4_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта d4</label>
                                <input type="text" name="d4_fontsize" id="d4_fontsize" placeholder="Размер шрифта d4" value=<?php echo $slideshowItem['d4_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет d4</label>
                                <input type="color" name="d4_color" id="d4_color" value=<?php echo $slideshowItem['d4_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон d4</label>
                                <input type="color" name="d4_background" id="d4_background" value=<?php echo $slideshowItem['d4_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина d4</label>
                                <input type="text" name="d4_width" id="d4_width" placeholder="Ширина d4" class="form-control" value=<?php echo $slideshowItem['d4_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота d4</label>
                                <input type="text" name="d4_height" id="d4_height" placeholder="Высота d4" class="form-control" value=<?php echo $slideshowItem['d4_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верх d4</label>
                                <input type="text" name="d4_top" id="d4_top" placeholder="Верх d4" class="form-control" value=<?php echo $slideshowItem['d4_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Лево d4</label>
                                <input type="text" name="d4_left" id="d4_left" placeholder="Лево d4" class="form-control" value=<?php echo $slideshowItem['d4_left'] ?> />
                            </div>
                        </div>


                        <div class="row" style="background:gray; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Слайд d5</label>
                                <input type="text" placeholder="Слайд d5" name="d5" id="d5" value=<?php echo $slideshowItem['d5'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение d5</label>
                                <input type="radio" name="d5_display" id="d5_display" value="1" <?PHP if ($slideshowItem['d5_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать
                                <input type="radio" name="d5_display" id="d5_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['d5_display'] == 0) {
                                    echo 'checked';
                                } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка d5</label>
                                <input type="url" name="d5_link" id="d5_link" placeholder="Ссылка d5" value=<?php echo $slideshowItem['d5_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта d5</label>
                                <input type="text" name="d5_fontsize" id="d5_fontsize" placeholder="Размер шрифта d5" value=<?php echo $slideshowItem['d5_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:gray; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет d5</label>
                                <input type="color" name="d5_color" id="d5_color" value=<?php echo $slideshowItem['d5_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон d5</label>
                                <input type="color" name="d5_background" id="d5_background" value=<?php echo $slideshowItem['d5_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина d5</label>
                                <input type="text" name="d5_width" id="d5_width" placeholder="Ширина d5" class="form-control" value=<?php echo $slideshowItem['d5_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота d5</label>
                                <input type="text" name="d5_height" id="d5_height" placeholder="Высота d5" class="form-control" value=<?php echo $slideshowItem['d5_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верх d5</label>
                                <input type="text" name="d5_top" id="d5_top" placeholder="Верх d5" class="form-control" value=<?php echo $slideshowItem['d5_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Лево d5</label>
                                <input type="text" name="d5_left" id="d5_left" placeholder="Лево d5" class="form-control" value=<?php echo $slideshowItem['d5_left'] ?> />
                            </div>
                        </div>


                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-4">
                                <label>Кнопка слайда</label>
                                <input type="text" placeholder="Кнопка слайда" name="btn" id="btn" value=<?php echo $slideshowItem['btn'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Отображение кнопки</label>
                                <input type="radio" name="btn_display" id="btn_display" value="1" <?PHP if ($slideshowItem['btn_display'] == 1) {
                                    echo 'checked';
                                } ?> /> Показать <input type="radio" name="btn_display" id="btn_display" style="margin-left:10px;" value="0" <?PHP if ($slideshowItem['btn_display'] == 0) {
                                      echo 'checked';
                                  } ?> /> Скрыть
                            </div>
                            <div class="col-sm-4">
                                <label style="display:block;">Ссылка кнопки</label>
                                <input type="url" name="btn_link" id="btn_link" placeholder="Ссылка кнопки" value=<?php echo $slideshowItem['btn_link'] ?> class="form-control" />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Размер шрифта кнопки</label>
                                <input type="text" name="btn_fontsize" id="btn_fontsize" placeholder="Размер шрифта кнопки" value=<?php echo $slideshowItem['btn_fontsize'] ?> class="form-control" />
                            </div>
                        </div>


                        <div class="row" style="background:white; padding-bottom:25px;">
                            <div class="col-sm-2">
                                <label style="display:block;">Цвет кнопки</label>
                                <input type="color" name="btn_color" id="btn_color" value=<?php echo $slideshowItem['btn_color'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Фон кнопки</label>
                                <input type="color" name="btn_background" id="btn_background" value=<?php echo $slideshowItem['btn_background'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Ширина кнопки</label>
                                <input type="text" name="btn_width" id="btn_width" placeholder="Ширина кнопки" class="form-control" value=<?php echo $slideshowItem['btn_width'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Высота кнопки</label>
                                <input type="text" name="btn_height" id="btn_height" placeholder="Высота кнопки" class="form-control" value=<?php echo $slideshowItem['btn_height'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Верхняя граница кнопки</label>
                                <input type="text" name="btn_top" id="btn_top" placeholder="Верхняя граница кнопки" class="form-control" value=<?php echo $slideshowItem['btn_top'] ?> />
                            </div>
                            <div class="col-sm-2">
                                <label style="display:block;">Левая граница кнопки</label>
                                <input type="text" name="btn_left" id="btn_left" placeholder="Левая граница кнопки" class="form-control" value=<?php echo $slideshowItem['btn_left'] ?> />
                            </div>
                        </div>


                                                                </li>
                                                <div class="col-sm-3" style="display:block;text-align:center;">
                                                <button type="submit" class="btn btn-success">Обновить слайдшоу</button>

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
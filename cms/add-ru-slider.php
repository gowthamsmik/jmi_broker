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
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Добавить слайд-шоу</h1>
                <hr class="mb-4">
                <div id="error-message"></div>
                <form class="add-ru-slideshow" enctype="multipart/form-data">
                    <ul>
                        <li class="a">
                            <!-- <div>
                            <label style="display:block;">ID</label>
                            <input type="text" name="id" id="a1_link" placeholder="id" class="form-control" />
                        </div> -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>URL изображения</label>
                                    <input type="file" placeholder="URL изображения" name="fileToUpload"
                                        id="fileToUpload" class="form-control" />
                                </div>

                                <div class="col-sm-5">
                                    <label style="display:block;">горка</label>
                                    <input type="text" name="slide" placeholder="горка" class="form-control"
                                        style="font-family: 'Russo One', sans-serif;" id="russianInput" />
                                </div>

                                <div class="col-sm-4">
                                    <label style="display:block;">Слайд-дисплей</label>

                                    <div class="custom-radio">
                                        <input type="radio" name="slide_display" id="slide_display" value="1">
                                        <label for="show">Показывать</label>
                                    </div>

                                    <div class="custom-radio">
                                        <input type="radio" name="slide_display" id="slide_display" value="0">
                                        <label for="hide">Скрывать</label>
                                    </div>
                                </div>
                            </div>


            </div>
            <br /><br />
            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">Слайд А1</label>
                    <input type="text" placeholder="Слайд a1" name="a1" id="russianInput" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">а1 Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="a1_display" id="a1_display_show" value="1">
                        <label class="text-white" for="a1_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="a1_display" id="a1_display_hide" value="0">
                        <label class="text-white" for="a1_display_hide">Скрывать</label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">а1 ссылка</label>
                    <input type="url" name="a1_link" id="a1_link" placeholder="Ссылка a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">а1 Размер шрифта</label>
                    <input type="text" name="a1_fontsize" id="a1_fontsize" placeholder="Размер шрифта a1"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">Цвет а1</label>
                    <input type="color" name="a1_color" id="a1_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 Фон</label>
                    <input type="color" name="a1_background" id="a1_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 Ширина</label>
                    <input type="text" name="a1_width" id="a1_width" placeholder="Ширина a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 Высота</label>
                    <input type="text" name="a1_height" id="a1_height" placeholder="Высота a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 Верх</label>
                    <input type="text" name="a1_top" id="a1_top" placeholder="Верх a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">a1 Слева</label>
                    <input type="text" name="a1_left" id="a1_left" placeholder="Слева a1" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>Слайд t</label>
                    <input type="text" placeholder="Слайд t" name="t" id="t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="t_display" id="t_display_show" value="1">
                        <label for="t_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="t_display" id="t_display_hide" value="0">
                        <label for="t_display_hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">t Ссылка</label>
                    <input type="url" name="t_link" id="t_link" placeholder="Ссылка t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Размер шрифта</label>
                    <input type="text" name="t_fontsize" id="t_fontsize" placeholder="Размер шрифта t"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">t Цвет</label>
                    <input type="color" name="t_color" id="t_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Фон</label>
                    <input type="color" name="t_background" id="t_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Ширина</label>
                    <input type="text" name="t_width" id="t_width" placeholder="Ширина t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Высота</label>
                    <input type="text" name="t_height" id="t_height" placeholder="Высота t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Верх</label>
                    <input type="text" name="t_top" id="t_top" placeholder="Верх t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">t Слева</label>
                    <input type="text" name="t_left" id="t_left" placeholder="Слева t" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">Слайд d1</label>
                    <input type="text" placeholder="Слайд d1" name="d1" id="d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="d1_display" id="d1_display_show" value="1">
                        <label class="text-white" for="d1_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d1_display" id="d1_display_hide" value="0">
                        <label class="text-white" for="d1_display_hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">d1 Ссылка</label>
                    <input type="url" name="d1_link" id="d1_link" placeholder="Ссылка d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Размер шрифта</label>
                    <input type="text" name="d1_fontsize" id="d1_fontsize" placeholder="Размер шрифта d1"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Цвет</label>
                    <input type="color" name="d1_color" id="d1_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Фон</label>
                    <input type="color" name="d1_background" id="d1_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Ширина</label>
                    <input type="text" name="d1_width" id="d1_width" placeholder="Ширина d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Высота</label>
                    <input type="text" name="d1_height" id="d1_height" placeholder="Высота d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Верх</label>
                    <input type="text" name="d1_top" id="d1_top" placeholder="Верх d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d1 Слева</label>
                    <input type="text" name="d1_left" id="d1_left" placeholder="Слева d1" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>Слайд d2</label>
                    <input type="text" placeholder="Слайд d2" name="d2" id="d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="d2_display" id="d2_display_show" value="1">
                        <label for="d2_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d2_display" id="d2_display_hide" value="0">
                        <label for="d2_display_hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">d2 Ссылка</label>
                    <input type="url" name="d2_link" id="d2_link" placeholder="Ссылка d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Размер шрифта</label>
                    <input type="text" name="d2_fontsize" id="d2_fontsize" placeholder="Размер шрифта d2"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">d2 Цвет</label>
                    <input type="color" name="d2_color" id="d2_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Фон</label>
                    <input type="color" name="d2_background" id="d2_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Ширина</label>
                    <input type="text" name="d2_width" id="d2_width" placeholder="Ширина d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Высота</label>
                    <input type="text" name="d2_height" id="d2_height" placeholder="Высота d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Верх</label>
                    <input type="text" name="d2_top" id="d2_top" placeholder="Верх d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d2 Слева</label>
                    <input type="text" name="d2_left" id="d2_left" placeholder="Слева d2" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">Слайд d3</label>
                    <input type="text" placeholder="Слайд d3" name="d3" id="d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="d3_display" id="d3_display_show" value="1">
                        <label class="text-white" for="d3_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d3_display" id="d3_display_hide" value="0">
                        <label class="text-white" for="d3_display_hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">d3 Ссылка</label>
                    <input type="url" name="d3_link" id="d3_link" placeholder="Ссылка d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Размер шрифта</label>
                    <input type="text" name="d3_fontsize" id="d3_fontsize" placeholder="Размер шрифта d3"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Цвет</label>
                    <input type="color" name="d3_color" id="d3_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Фон</label>
                    <input type="color" name="d3_background" id="d3_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Ширина</label>
                    <input type="text" name="d3_width" id="d3_width" placeholder="Ширина d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Высота</label>
                    <input type="text" name="d3_height" id="d3_height" placeholder="Высота d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Верх</label>
                    <input type="text" name="d3_top" id="d3_top" placeholder="Верх d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d3 Слева</label>
                    <input type="text" name="d3_left" id="d3_left" placeholder="Слева d3" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>Слайд d4</label>
                    <input type="text" placeholder="Слайд d4" name="d4" id="d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="d4_display" id="d4_display_show" value="1">
                        <label for="d4_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d4_display" id="d4_display_hide" value="0">
                        <label for="d4_display_hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">d4 Ссылка</label>
                    <input type="url" name="d4_link" id="d4_link" placeholder="Ссылка d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Размер шрифта</label>
                    <input type="text" name="d4_fontsize" id="d4_fontsize" placeholder="Размер шрифта d4"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">d4 Цвет</label>
                    <input type="color" name="d4_color" id="d4_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Фон</label>
                    <input type="color" name="d4_background" id="d4_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Ширина</label>
                    <input type="text" name="d4_width" id="d4_width" placeholder="Ширина d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Высота</label>
                    <input type="text" name="d4_height" id="d4_height" placeholder="Высота d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Верх</label>
                    <input type="text" name="d4_top" id="d4_top" placeholder="Верх d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">d4 Слева</label>
                    <input type="text" name="d4_left" id="d4_left" placeholder="Слева d4" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label class="text-white">Слайд d5</label>
                    <input type="text" placeholder="Слайд d5" name="d5" id="d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Дисплей</label>
                    <div class="custom-radio">
                        <input type="radio" name="d5_display" id="d5_display_show" value="1">
                        <label class="text-white" for="d5_display_show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d5_display" id="d5_display_hide" value="0">
                        <label class="text-white" for="d5_display_hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label class="text-white" style="display: block;">d5 Ссылка</label>
                    <input type="url" name="d5_link" id="d5_link" placeholder="Ссылка d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Размер шрифта</label>
                    <input type="text" name="d5_fontsize" id="d5_fontsize" placeholder="Размер шрифта d5"
                        class="form-control" />
                </div>
            </div>

            <div class="row" style="background: gray; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Цвет</label>
                    <input type="color" name="d5_color" id="d5_color" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Фон</label>
                    <input type="color" name="d5_background" id="d5_background" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Ширина</label>
                    <input type="text" name="d5_width" id="d5_width" placeholder="Ширина d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Высота</label>
                    <input type="text" name="d5_height" id="d5_height" placeholder="Высота d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Верх</label>
                    <input type="text" name="d5_top" id="d5_top" placeholder="Верх d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label class="text-white" style="display: block;">d5 Слева</label>
                    <input type="text" name="d5_left" id="d5_left" placeholder="Слева d5" class="form-control" />
                </div>
            </div>

            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-4">
                    <label>Слайд кнопка</label>
                    <input type="text" placeholder="Слайд кнопка" name="btn" id="btn" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Кнопка отображение</label>
                    <div class="custom-radio">
                        <input type="radio" name="btn_display" id="btn_display" value="1">
                        <label for="show">Показывать</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="btn_display" id="btn_display" value="0">
                        <label for="hide">Скрывать</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display: block;">Кнопка ссылка</label>
                    <input type="url" name="btn_link" id="btn_link" placeholder="Кнопка ссылка" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Кнопка размер шрифта</label>
                    <input type="text" name="btn_fontsize" id="btn_fontsize" placeholder="Кнопка размер шрифта"
                        class="form-control" />
                </div>
            </div>


            <div class="row" style="background: white; padding-bottom: 25px;">
                <div class="col-sm-2">
                    <label style="display: block;">Цвет кнопки</label>
                    <input type="color" name="btn_color" id="btn_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Фон кнопки</label>
                    <input type="color" name="btn_background" id="btn_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Ширина кнопки</label>
                    <input type="text" name="btn_width" id="btn_width" placeholder="Ширина кнопки"
                        class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Высота кнопки</label>
                    <input type="text" name="btn_height" id="btn_height" placeholder="Высота кнопки"
                        class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Верх кнопки</label>
                    <input type="text" name="btn_top" id="btn_top" placeholder="Верх кнопки" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display: block;">Лево кнопки</label>
                    <input type="text" name="btn_left" id="btn_left" placeholder="Лево кнопки" class="form-control" />
                </div>
            </div>

            </li>
            <div class="col-sm-3" style="display: block; text-align: center;">
                <button type="submit" class="btn btn-success">Сохранить слайдшоу</button>
            </div>

            </form>
        </div>
        <footer class="app-footer">
            <div class="container text-center py-3">
            </div>
        </footer>
    </div>
    <script>
        // Function to convert English text to Russian text
        function convertToRussian(text) {
            return text.replace(/[a-zA-Z]/g, function (match) {
                const englishToRussianMap = {
                    a: 'а', b: 'б', c: 'ц', d: 'д', e: 'е',
                    f: 'ф', g: 'г', h: 'х', i: 'и', j: 'й',
                    k: 'к', l: 'л', m: 'м', n: 'н', o: 'о',
                    p: 'п', q: 'к', r: 'р', s: 'с', t: 'т',
                    u: 'у', v: 'в', w: 'в', x: 'х', y: 'й', z: 'з'
                };

                return englishToRussianMap[match.toLowerCase()] || match;
            });
        }

        // Event listener to update the displayed text in real-time
        document.getElementById('russianInput').addEventListener('input', function () {
            const inputValue = this.value;
            const russianText = convertToRussian(inputValue);
            this.value = russianText;
        });
    </script>
    <?php include('includes/footer.php'); ?>
</body>

</html>
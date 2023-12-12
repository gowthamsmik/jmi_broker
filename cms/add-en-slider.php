<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .custom-radio {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
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
                <h1 class="app-page-title">Add Slideshow</h1>
                <hr class="mb-4">
                <div id="error-message"></div>
                <form class="add-en-slideshow" enctype="multipart/form-data">
                    <ul>
                        <li class="a">
                            <!-- <div>
                            <label style="display:block;">ID</label>
                            <input type="text" name="id" id="a1_link" placeholder="id" class="form-control" />
                        </div> -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Image URL</label>
                                    <input type="file" placeholder="Slide Image" name="fileToUpload" id="fileToUpload"
                                        class="form-control" />
                                </div>

                                <div class="col-sm-5">
                                    <label style="display:block;">slide</label>
                                    <input type="text" name="slide" id="slide" placeholder="slide"
                                        class="form-control" />
                                </div>
                                <div class="col-sm-4">
                                    <label style="display:block;">Slide Display</label>

                                    <div class="custom-radio">
                                        <input type="radio" name="slide_display" id="slide_display" value="1">
                                        <label for="show">Show</label>
                                    </div>

                                    <div class="custom-radio">
                                        <input type="radio" name="slide_display" id="slide_display" value="0">
                                        <label for="hide">Hide</label>
                                    </div>
                                </div>
                            </div>
            </div>
            <br /><br />
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide a1</label>
                    <input type="text" placeholder="Slide a1" name="a1" id="a1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="a1_display" id="a1_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="a1_display" id="a1_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label style="display:block;">a1 Link</label>
                    <input type="url" name="a1_link" id="a1_link" placeholder="a1 Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Font size</label>
                    <input type="text" name="a1_fontsize" id="a1_fontsize" placeholder="a1 Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">a1 color</label>
                    <input type="color" name="a1_color" id="a1_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Background</label>
                    <input type="color" name="a1_background" id="a1_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Width</label>
                    <input type="text" name="a1_width" id="a1_width" placeholder="a1 width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Height</label>
                    <input type="text" name="a1_height" id="a1_height" placeholder="a1 height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Top</label>
                    <input type="text" name="a1_top" id="a1_top" placeholder="a1 Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">a1 Left</label>
                    <input type="text" name="a1_left" id="a1_left" placeholder="a1 Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="bacskground:red;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide t</label>
                    <input type="text" placeholder="Slide t" name="t" id="t" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="t_display" id="t_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="t_display" id="t_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">t Link</label>
                    <input type="url" name="t_link" id="t_link" placeholder="t Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Font size</label>
                    <input type="text" name="t_fontsize" id="t_fontsize" placeholder="t Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="backgsround:red;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">t color</label>
                    <input type="color" name="t_color" id="t_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Background</label>
                    <input type="color" name="t_background" id="t_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Width</label>
                    <input type="text" name="t_width" id="t_width" placeholder="t width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Height</label>
                    <input type="text" name="t_height" id="t_height" placeholder="t height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Top</label>
                    <input type="text" name="t_top" id="t_top" placeholder="t Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">t Left</label>
                    <input type="text" name="t_left" id="t_left" placeholder="t Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide d1</label>
                    <input type="text" placeholder="Slide d1" name="d1" id="d1" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="d1_display" id="d1_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d1_display" id="d1_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">d1 Link</label>
                    <input type="url" name="d1_link" id="d1_link" placeholder="d1 Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Font size</label>
                    <input type="text" name="d1_fontsize" id="d1_fontsize" placeholder="d1 Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">d1 color</label>
                    <input type="color" name="d1_color" id="d1_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Background</label>
                    <input type="color" name="d1_background" id="d1_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Width</label>
                    <input type="text" name="d1_width" id="d1_width" placeholder="d1 width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Height</label>
                    <input type="text" name="d1_height" id="d1_height" placeholder="d1 height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Top</label>
                    <input type="text" name="d1_top" id="d1_top" placeholder="d1 Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d1 Left</label>
                    <input type="text" name="d1_left" id="d1_left" placeholder="d1 Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="backgrsound:red;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide d2</label>
                    <input type="text" placeholder="Slide d2" name="d2" id="d2" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="d2_display" id="d2_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d2_display" id="d2_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">d2 Link</label>
                    <input type="url" name="d2_link" id="d2_link" placeholder="d2 Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Font size</label>
                    <input type="text" name="d2_fontsize" id="d2_fontsize" placeholder="d2 Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="backgrosund:red;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">d2 color</label>
                    <input type="color" name="d2_color" id="d2_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Background</label>
                    <input type="color" name="d2_background" id="d2_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Width</label>
                    <input type="text" name="d2_width" id="d2_width" placeholder="d2 width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Height</label>
                    <input type="text" name="d2_height" id="d2_height" placeholder="d2 height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Top</label>
                    <input type="text" name="d2_top" id="d2_top" placeholder="d2 Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d2 Left</label>
                    <input type="text" name="d2_left" id="d2_left" placeholder="d2 Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide d3</label>
                    <input type="text" placeholder="Slide d3" name="d3" id="d3" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="d3_display" id="d3_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d3_display" id="d3_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">d3 Link</label>
                    <input type="url" name="d3_link" id="d3_link" placeholder="d3 Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Font size</label>
                    <input type="text" name="d3_fontsize" id="d3_fontsize" placeholder="d3 Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">d3 color</label>
                    <input type="color" name="d3_color" id="d3_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Background</label>
                    <input type="color" name="d3_background" id="d3_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Width</label>
                    <input type="text" name="d3_width" id="d3_width" placeholder="d3 width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Height</label>
                    <input type="text" name="d3_height" id="d3_height" placeholder="d3 height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Top</label>
                    <input type="text" name="d3_top" id="d3_top" placeholder="d3 Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d3 Left</label>
                    <input type="text" name="d3_left" id="d3_left" placeholder="d3 Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="backgrousnd:red;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide d4</label>
                    <input type="text" placeholder="Slide d4" name="d4" id="d4" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="d4_display" id="d4_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d4_display" id="d4_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">d4 Link</label>
                    <input type="url" name="d4_link" id="d4_link" placeholder="d4 Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Font size</label>
                    <input type="text" name="d4_fontsize" id="d4_fontsize" placeholder="d4 Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="backgrosund:red;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">d4 color</label>
                    <input type="color" name="d4_color" id="d4_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Background</label>
                    <input type="color" name="d4_background" id="d4_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Width</label>
                    <input type="text" name="d4_width" id="d4_width" placeholder="d4 width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Height</label>
                    <input type="text" name="d4_height" id="d4_height" placeholder="d4 height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Top</label>
                    <input type="text" name="d4_top" id="d4_top" placeholder="d4 Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d4 Left</label>
                    <input type="text" name="d4_left" id="d4_left" placeholder="d4 Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide d5</label>
                    <input type="text" placeholder="Slide d5" name="d5" id="d5" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="d5_display" id="d5_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="d5_display" id="d5_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">d5 Link</label>
                    <input type="url" name="d5_link" id="d5_link" placeholder="d5 Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Font size</label>
                    <input type="text" name="d5_fontsize" id="d5_fontsize" placeholder="d5 Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="background:gray;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">d5 color</label>
                    <input type="color" name="d5_color" id="d5_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Background</label>
                    <input type="color" name="d5_background" id="d5_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Width</label>
                    <input type="text" name="d5_width" id="d5_width" placeholder="d5 width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Height</label>
                    <input type="text" name="d5_height" id="d5_height" placeholder="d5 height" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Top</label>
                    <input type="text" name="d5_top" id="d5_top" placeholder="d5 Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">d5 Left</label>
                    <input type="text" name="d5_left" id="d5_left" placeholder="d5 Left" class="form-control" />
                </div>

            </div>
            <div class="row" style="basckground:gray;padding-bottom:25px;">
                <div class="col-sm-4">
                    <label>Slide btn</label>
                    <input type="text" placeholder="Slide btn" name="btn" id="btn" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Display</label>
                    <div class="custom-radio">
                        <input type="radio" name="btn_display" id="btn_display" value="1">
                        <label for="show">Show</label>
                    </div>

                    <div class="custom-radio">
                        <input type="radio" name="btn_display" id="btn_display" value="0">
                        <label for="hide">Hide</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label style="display:block;">btn Link</label>
                    <input type="url" name="btn_link" id="btn_link" placeholder="btn Link" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Font size</label>
                    <input type="text" name="btn_fontsize" id="btn_fontsize" placeholder="btn Font size"
                        class="form-control" />
                </div>

            </div>
            <div class="row" style="backgsround:gray;padding-bottom:25px;">
                <div class="col-sm-2">
                    <label style="display:block;">btn color</label>
                    <input type="color" name="btn_color" id="btn_color" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Background</label>
                    <input type="color" name="btn_background" id="btn_background" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Width</label>
                    <input type="text" name="btn_width" id="btn_width" placeholder="btn width" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Height</label>
                    <input type="text" name="btn_height" id="btn_height" placeholder="btn height"
                        class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Top</label>
                    <input type="text" name="btn_top" id="btn_top" placeholder="btn Top" class="form-control" />
                </div>
                <div class="col-sm-2">
                    <label style="display:block;">btn Left</label>
                    <input type="text" name="btn_left" id="btn_left" placeholder="btn Left" class="form-control" />
                </div>

            </div>
            </li>
            <div class="col-sm-3" style="display:block;text-align:center;">
                <button type="submit" class="btn btn-success">Save Slideshow</button>
            </div>
            </form>
        </div>
        <footer class="app-footer">
            <div class="container text-center py-3">
            </div>
        </footer>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

</html>
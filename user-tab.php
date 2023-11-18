<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <title>Tab</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
    <div class="bg-white roundes-3 p-3">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1">Forex</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2">Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3">Indices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3">Commodities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3">Cyptro</a>
            </li>
        </ul>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab1">
                <h3>Content for Tab 1</h3>
                <p>This is the content of Tab 1.</p>
            </div>
            <div class="tab-pane fade" id="tab2">
                <h3>Content for Tab 2</h3>
                <p>This is the content of Tab 2.</p>
            </div>
            <div class="tab-pane fade" id="tab3">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
            <div class="tab-pane fade" id="tab3">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
            <div class="tab-pane fade" id="tab3">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <title>Tab</title>
   <?php include("includes/style.php"); ?>

   <style>
        .tab-text{
            color:#0342ab !important;
            font-size: 12px !important;
        }
        .tab-text.active {
            border-bottom: 2px solid #0342ab !important;
            background: none !important;
        }
   </style>
</head>

<body>
    <div class="bg-white p-3 my-3">
        <ul class="nav nav-tabs d-flex w-100" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active tab-text border-0" id="tab1-tab" data-toggle="tab" href="#tab11">Forex</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0" id="tab2-tab" data-toggle="tab" href="#tab12">Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0" id="tab3-tab" data-toggle="tab" href="#tab13">Indices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0" id="tab3-tab" data-toggle="tab" href="#tab13">Commodities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tab-text border-0" id="tab3-tab" data-toggle="tab" href="#tab13">Cyptro</a>
            </li>
        </ul>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab11">
                <h3>Content for Tab 1</h3>
                <p>This is the content of Tab 1.</p>
            </div>
            <div class="tab-pane fade" id="tab12">
                <h3>Content for Tab 2</h3>
                <p>This is the content of Tab 2.</p>
            </div>
            <div class="tab-pane fade" id="tab13">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
            <div class="tab-pane fade" id="tab14">
                <h3>Content for Tab 3</h3>
                <p>This is the content of Tab 3.</p>
            </div>
            <div class="tab-pane fade" id="tab15">
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
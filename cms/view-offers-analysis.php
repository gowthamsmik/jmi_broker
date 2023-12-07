<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <?php include("../includes/style.php"); ?>
    <?php include("includes/softwareinclude/functions.php"); ?>
    <style>
        .body {
            background-color: #F0F0F0;
        }
        .border-bottom-80 {
            border-bottom: 1px solid #DEE2E6;
            height: 80%;
        }
        .card {
            border-radius: 10px;
        }
        .account_circle {
            height: 30px;
            width: 30px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .grid-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
        .row-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .row-item {
            margin: 10px;
        }
        .button {
            background-color: #007BFF !important;
            color: #fff !important;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #FFC107 !important;
            color: #000000 !important;
        }
    </style>
</head>
<body>
<?php include("../includes/header.php");
$id = $_GET['id'];
?>
    <div>
    <div class="container mt-5 ">
<?php
     session_start();


     $view = isset($_SESSION['offerType']) ? $_SESSION['offerType'] : null;
    $getdata = getoffersview($id);


    if($getdata["offerstatus"]=='1' || $view=='1')
    {
?>
<div>
    <div class="app-page-title h2"><?php echo $getdata["title"]?></div>
    <div class="bg-secondary mt-4 p-5">
    <p><?php echo $getdata["details"]?></p>
    <p class="text-end text-primary"><?php echo $getdata["updated_at"]?></p>
    </div>
</div>
<?php }
unset($_SESSION['viewType']);
?>

    <div class="row">
        <?php
        $data = [
            ['image' => '../assets/images/pay-methods/1.png'],
            ['image' => '../assets/images/pay-methods/2.png'],
            ['image' => '../assets/images/pay-methods/3.png'],
            ['image' => '../assets/images/pay-methods/4.png'],
            ['image' => '../assets/images/pay-methods/5.png'],
            ['image' => '../assets/images/pay-methods/6.png'],
            ['image' => '../assets/images/pay-methods/7.png'],
            ['image' => '../assets/images/pay-methods/8.png'],
            ['image' => '../assets/images/pay-methods/9.png'],
        ];

        foreach ($data as $item) {
        ?>
            <div class="col-md-4">
                <div class="grid-item bg-white rounded box d-flex justify-content-center align-items-center">
                    <div class="w-100 h-100 mx-auto border">
                        <img src="<?php echo $item['image']; ?>" class="img-fluid" alt="Image">
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>
</div>

    <?php include("../includes/footer.php"); ?>
</body>
</html>
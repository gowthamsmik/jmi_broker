<?php if(!isset($_SESSION['sessionuser']))session_start();
$type = isset($_GET['type'])?$_GET['type']:'all';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
       <?php include ("../includes/softwareinclude/functions.php")?>
    <style>
        .body {
            background-color: #F0F0;
        }

        .border-bottom-80 {
            border-bottom: 1px solid #DEE2E6;
            /* or your preferred border color */
            height: 80%;
        }

        .btn {
            background-color: #FFBF10;
        }

        .custom-input {
            border: 1.5px solid black;
            border-radius: 8px;
        }

        table {
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 12px;
        }

        .serial {
            background-color: #DFDFDF;
            color: #053C9E;
            border-radius: 5px;
            justify-content: center;
            align-items: center;
            margin: 15px 15px 15px 15px;
            font-weight: bolder;
        }

        .status1 {
            background-color: #053C9E;
            color: #FFFFFF;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
        }

        .status2 {
            background: linear-gradient(to right, #FEDC18, #FFF7C5); 
            font-weight: bold;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
        }
        .status3 {
            background:  red; 
            font-weight: bold;
            border-radius: 2px;
            justify-content: center;
            align-items: center;
            font-weight: bolder;
        }

        .description {
            background-color: #F8F8F8;
            border: .5px solid #E9ECFF;
            padding: 2%;
            border-radius: 5px;
        }

        .active_but {
            background-color: #FFBF10 !important;
        }

        .active_button {
            background-color: #0342AB !important;
            color: white !important;
        }
    </style>
</head>

<body>
<?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
    <div class="d-flex">
        <h2 class="fs-4"><?php echo $lang['transactionalHistory'] ?></h2>
        <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
            <p class="mt-1 ms-2"><?php echo $lang['welcome1'] ?>,
                <?php echo $_SESSION['sessionusername']; ?>
            </p>
        </div>
    </div>
    <div class=" d-flex my-2">
        <button class="btn mx-1  px-3 active_but <?php echo $type=='all' ? 'active_button':'' ?>" onclick="makeActive(this,'all')"><?php echo $lang['all']?></button>
        <button class="btn mx-1 active_but <?php echo $type=='deposit' ? 'active_button':'' ?>" onclick="makeActive(this,'deposit')"><?php echo $lang['deposit1']?></button>
        <button class="btn mx-1 active_but <?php echo $type=='withdraw' ? 'active_button':'' ?>" onclick="makeActive(this,'withdraw')"><?php echo $lang['withdraw1']?></button>
        <button class="btn mx-1 active_but <?php echo $type=='internal' ? 'active_button':'' ?>" onclick="makeActive(this,'internal')"><?php echo $lang['internalTransfers']?></button>
        <div class="custom-input p-1 ms-auto">
            <input type="text" placeholder=<?php echo $lang['search']?> />
            <img src="../assets/images/svg/Shape.svg" alt="404">
        </div>
    </div>
    <script>
        function makeActive(button,type) {
            // Remove 'active_but' class from all buttons
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(function (btn) {
                btn.classList.remove('active_button');
            });

            // Add 'active_but' class to the clicked button
            button.classList.add('active_button');
            window.location.href='<?php echo $siteurl."cpanel/transactional-history.php?tab=1&type=" ?>'+type;
        }
    </script>
    <div>
        <table class='gap-3 bg-white table mt-3'>
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo $lang['type1']?></th>
                    <th><?php echo $lang['via']?> </th>
                    <th><?php echo $lang['account1']?></th>
                    <th><?php echo $lang['status']?> </th>
                    <th><?php echo $lang['details']?> </th>
                    <th><?php echo $lang['date']?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $transactionArray=getAlltransactions($type);
                if (is_array($transactionArray)&& count($transactionArray)>0) {
                    foreach ($transactionArray as $data) {
                        echo "<tr>";
                        echo "<td class='align-middle'><div  class=' m-2 serial py-1 px-2'>" . htmlspecialchars($data['id']) . "</div></td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['type']) . "</td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['via']) . "</td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['account']) . "</td>";
                         
                        if($data['status'] == '1')
                                    { 
                        echo "<td class='align-middle'><div class='status1 m-2 py-2 px-2'>" . htmlspecialchars('Success') . "</td>";
			            } 
                        elseif ($data['status'] == '0')
                        {
                            echo "<td class='align-middle'><div class='status2 m-2 py-2 px-2'>" . htmlspecialchars('Pending') . "</td>";
                        }
                        else
                        {
                            echo "<td class='align-middle'><div class='status3 m-2 py-2 px-2'>" . htmlspecialchars('Rejected') . "</td>";
   
                        }
                        echo "<td class='align-middle'><div class='description m-1 p-4'>" . htmlspecialchars($data['details_user']) . "</div></td>";
                        echo "<td class='align-middle'>" . htmlspecialchars($data['created_at']) . "</td>";
                        echo "</tr>";
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
 

</html>
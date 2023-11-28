<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("../includes/compatibility.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
      .dashboard-subheader-bg {
         height: 130px;
         width: 100%;
         background: url(../assets/images/svg/Gradient.png);
         background-size: 100% 100%;
         overflow: hidden;
      }

      .dashboard-subheader-box {
         height: 232px;
         width: auto;
         background: url(../assets/images/svg/2.svg);
         background-size: 100% 100%;
      }
      .position {
         text-align: center;
         padding-top: 4%;
      }

      .font-size {
         font-size: 12px;
         opacity: 70%;
      }

      .layout {
         display: flex;
         width: 100%;
         background-color: #F0F0F0;
      }

      .sidebar-box {
         width: 25%;
      }

      @media screen and (min-width:700px) and (max-width:800px) {
         .sidebar-box {
            width: 30%;
         }
      }

      .sidebar {
         background-color: #ffbf10;
         margin: 10px;
         border-bottom-right-radius: 10px;
         border-bottom-left-radius: 10px;
         overflow: hidden;
      }

      .sidebar a {
         padding: 5px;
         /* justify-content: center; */
         text-decoration: none;
         font-size: 18px;
         color: #818181;
         border: 1px solid white;
         display: block;
         color: white;
      }

      .sidebar a:hover {
         color: white;
         background-color: #0342ab;
      }

      .sidebar a:active {
         color: white;
         background-color: #0342ab;
      }

      .sidebar .tab-pane .active{
         color: white;
         background-color: #0342ab; 
      }

      .content {
         flex: 1;
         padding: 1%;
         margin: 1%;
         width: 60%;
         overflow-x: auto;
      }

      .nav-tabs .nav-item .nav-link {
         color: white;
         border-radius: 0px;
      }

      .nav-tabs .nav-item .nav-link:hover {
         color: white;
         border-color: #0342ab;
         border-radius: 0px;
      }

      .nav-tabs .nav-item .nav-link.active {
         background-color: #0342ab;
         color: white;
         border-color: #0342ab;
         border-radius: 0px;
      }

      #myTabs {
         margin-bottom: -7px;
      }

      .slidebar_table {
         background-color: white;
         margin: 10px;
         border-radius: 10px;
         overflow: hidden;
      }

      .tab-pane a {
         padding: 10px;
         /* justify-content: center; */
      }

      @media screen and (min-width:700px) and (max-width:1236px) {
         .tool_img {
            max-width: 25%;
         }
      }

      @media screen and (min-width:300px) and (max-width:700px) {

         .my_account,
         #my_account {
            display: none !important;
         }

         .sidebar-box {
            width: 20%;
         }

         .slidebar_table {
            justify-content: center;
         }

         .sidebar a {
            justify-content: center;
         }

         .tool_img {
            max-width: 100%;
         }

         .popup {
            display: none !important;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
         }

         .popup-content {
            max-width: 600px;
            margin: 0 auto;
         }

         .popup{
            display: none !important;
         }
      }
   </style>
    <style>
        form .row {
            border: 0px solid;
        }
        .custom-button{
            background-color: #0342AB !important;
            
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class="dashboard-subheader-bg">
      <div class="dashboard-subheader-box">
         <div class="position">
            <h5 class="text-white">Control Panel | Account Overview</h5>
            <p class="text-white font-size">Home > Dashboard ><span id="routeText"></span></p>
         </div>
      </div>
    </div>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4">Copy Trade</h2>
                    <div class="d-flex ml-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                        <p class="mt-1 ms-2">Welcome, <?php echo isset($_SESSION['sessionusername']) ? $_SESSION['sessionusername'] :"" ?></p>
                    </div>
            </div>
            <div class="bg-white mt-4 p-5 rounded-3">
            <form>
                <div class="row border-0">
                    <div class="col border-0">
                        <label for="">Copy From:</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>-Select-</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col border-0">
                        <label for="">Copy To:</label>
                        <select class="form-select mt-2" id="sel1" name="sellist1">
                            <option>-Select-</option>
                        </select>
                    </div>
                </div>
                <div class="row border-0 mt-4">
                    <div class="col border-0">
                        <label for="">Copy Percentage:</label>
                        <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="">
                    </div>
                    <div class="col border-0">
                        <label for="">Account Password:</label>
                        <input type="password" class="form-control border rounded-3 mt-2" placeholder="***********"
                            name="pswd">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                            checked>
                        <label class="form-check-label mt-1" for="check1">I agree the terms and conditions</label>
                    </div>
                </div>
            </form>
            <button type="button" class="btn custom-button text-light w-25 mt-4">Submit</button>
            </div>
        </div>
    </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
      function getScreenSize() {
            // Get the screen width using JavaScript
            var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            // Update styles based on screen width
            console.log("lopsid",screenWidth);
            var sidebarregular = document.getElementById('display_sidetable1');
            var sidebarmini = document.getElementById('display_sidetable2');
            console.log("lopsid",sidebarregular,sidebarmini);
            if (screenWidth >= 300 && screenWidth <=880) {
               sidebarregular.style.display = 'none';
               sidebarmini.style.display = 'block';
            } else {
               sidebarmini.style.display = 'none';
               sidebarregular.style.display = 'block';
            }

            //console.log("lopsid",sidebarmini);
        }

        window.onload = getScreenSize,showRoute('link1');
        
        window.addEventListener('resize', getScreenSize);
   </script>

</html>
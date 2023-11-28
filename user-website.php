<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("includes/compatibility.php"); ?>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <title>Dashboard</title>
   <?php include("includes/style.php"); ?>
   <style>
      .dashboard-subheader-bg {
         height: 130px;
         width: 100%;
         background: url(assets/images/svg/Gradient.png);
         background-size: 100% 100%;
         overflow: hidden;
      }

      .dashboard-subheader-box {
         height: 232px;
         width: auto;
         background: url(assets/images/svg/2.svg);
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
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   </head>
<body>
   <?php include("includes/header.php") ?>
   <div class="dashboard-subheader-bg">
      <div class="dashboard-subheader-box">
         <div class="position">
            <h5 class="text-white">Control Panel | Account Overview</h5>
            <p class="text-white font-size">Home > Dashboard ><span id="routeText"></span></p>
         </div>
      </div>
   </div>

   <div class='layout'>
      <div class="sidebar-box">
         <div class="sidebar">
            <input type="hidden" value="" id="paneselected" />
            <ul class="nav nav-tabs border-0 row px-2" id="myTabs">
               <li class="nav-item col p-0 ">
                  <a class="nav-link active m-0 w-100 h-100 d-flex px-2" id="tab1-tab" data-toggle="tab" href="#"
                     data-target="#tab1" onclick="showRoute('link13')">
                     <img src="assets/images/svg/hamburger.svg" alt="Link 1 Icon" class="tool_img">
                     <p class="text-white ms-2 my_account">My Account</p>

                  </a>
               </li>
               <li class="nav-item col p-0">
                  <a class="nav-link m-0 w-100 h-100 d-flex px-2" id="tab2-tab" data-toggle="tab" href="#"
                     data-target="#tab2" onclick="showRoute('link14')"> <img src="assets/images/svg/settings.svg"
                        class="tool_img" alt="Link 1 Icon">
                     <p class="text-white ms-2 d-flex align-items-center" id="my_account">Tools</p>
                  </a>
               </li>
            </ul>
            <div class="tab-content mt-2">
               <div class="tab-pane fade show active" id="tab1">
                  <a class="d-flex" href="#" onclick="showRoute('link1')" id="mylink1"> <img src="assets/images/sidebar/image9.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Account Overview</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link2')" id="mylink2"> <img src="assets/images/sidebar/image12.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Open Live Account</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link3')" id="mylink3"> <img src="assets/images/sidebar/image6.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Open Demo Account</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link4')" id="mylink4"> <img src="assets/images/sidebar/image1.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Add Existing Account</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link5')" id="mylink5"> <img src="assets/images/sidebar/image11.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Live Accounts</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link6')" id="mylink6"> <img src="assets/images/sidebar/image3.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Deposit</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link7')" id="mylink7"> <img src="assets/images/sidebar/image4.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Withdraw</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link8')" id="mylink8"> <img src="assets/images/sidebar/image10.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Internal Transfers</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link9')" id="mylink9"> <img src="assets/images/sidebar/image8.svg"
                        alt="Link 1 Icon" class="my-1">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Copy Trade</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link10')" id="mylink10"> <img src="assets/images/sidebar/image10.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-2 ps-1 mt-2 my_account">Transaction History</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link11')" id="mylink11"> <img src="assets/images/sidebar/image2.svg"
                        alt="Link 1 Icon" class="my-1">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Referral System</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link12')" id="mylink12"> <img src="assets/images/sidebar/image7.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">My Referrals</h4>
                  </a>
                  <!-- Add more links as needed -->
               </div>
               <div class="tab-pane fade" id="tab2">
                  <a class="d-flex" href="#" onclick="showRoute('link15')"> <i class="fa fa-key fa-lg"
                        aria-hidden="true"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Password Change</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link16')"><i class="fa fa-download fa-lg"
                        aria-hidden="true"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Download Center</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link17')"><i class="fa fa-book fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Ebooks</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link18')"> <i class="fa fa-calendar fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Economic Calendar</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link19')"> <i class="fa fa-calculator fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">PIP Calculators</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link20')"> <i class="fa fa-fire fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Forex Heatmap</h4>
                  </a>
               </div>
            </div>
         </div>


         <div class="slidebar_table" id="display_sidetable1">
            <?php include("user-tab.php") ?>
         </div>

         <button class="slidebar_table" id="display_sidetable2" onclick="openPopup()">
            <p>Table</p>
         </button>
      </div>
      <div class="content">
         <div class="route-content" id="link1">
            <?php include("control-panel/account-overview.php"); ?>
         </div>

         <div class="route-content" id="link2">
            <?php include("control-panel/open-live-account.php"); ?>
         </div>

         <div class="route-content" id="link3">
            <?php include("control-panel/open-demo-account.php"); ?>
         </div>
         <div class="route-content" id="link4">
            <?php include("control-panel/add-existing-account.php"); ?>
         </div>
         <div class="route-content" id="link5">
            <?php include("control-panel/live-account.php"); ?>
         </div>
         <div class="route-content" id="link6">
            <?php include("control-panel/deposit.php"); ?>
         </div>
         <div class="route-content" id="link7">
            <?php include("control-panel/withdraw.php"); ?>
         </div>
         <div class="route-content" id="link8">
            <?php include("control-panel/internal-transfers.php"); ?>
         </div>
         <div class="route-content" id="link9">
            <?php include("control-panel/copy-trade.php"); ?>
         </div>
         <div class="route-content" id="link10">
            <?php include("control-panel/transactional-history.php"); ?>
         </div>
         <div class="route-content" id="link11">
            <?php include("control-panel/referral-system.php"); ?>
         </div>
         <div class="route-content" id="link12">
            <?php include("control-panel/my-referral.php"); ?>
         </div>
         <div class="route-content" id="link15">
            <?php include("control-panel/password-change.php"); ?>
         </div>
         <div class="route-content" id="link16">
            <?php include("control-panel/download-center.php"); ?>
         </div>
         <div class="route-content" id="link17">
            <?php include("control-panel/ebooks.php"); ?>
         </div>
         <div class="route-content" id="link18">
            <?php include("control-panel/economic-calendar.php"); ?>
         </div>
         <div class="route-content" id="link19">
            <?php include("control-panel/pip-calculators.php"); ?>
         </div>
         <div class="route-content" id="link20">
            <?php include("control-panel/forex-heatmap.php"); ?>
         </div>
      </div>
   </div>
   <?php
   $isUserWebsitePage = true;
   include("includes/footer.php");
   ?>

   <?php include("includes/scripts.php"); ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
   function showRoute(routeId) {
      // Hide all route content
      var routeContents = document.querySelectorAll('.route-content');
      routeContents.forEach(function (routeContent) {
         routeContent.style.display = 'none';
      });

      // Show the selected route content
      var selectedRoute = document.getElementById(routeId);
      var highlighted = document.getElementById('my'+routeId);
      var deselectpane = document.getElementById('paneselected').value; 
      if (selectedRoute) {
         selectedRoute.style.display = 'block';
         highlighted.className = 'de-flex active';
         if(deselectpane !=="")
         document.getElementById('my'+deselectpane).className = "de-flex";
      }
      document.getElementById('paneselected').value = routeId;
      var routeText = document.getElementById('routeText');
      if (routeText) {
         switch (routeId) {
            case 'link1':
               routeText.innerText = 'Accounts Overview';
               break;
            case 'link2':
               routeText.innerText = 'Open Live Account';
               break;
            case 'link3':
               routeText.innerText = 'Open Demo Account';
               break;
            case 'link4':
               routeText.innerText = 'Add Existing Account';
               break;
            case 'link5':
               routeText.innerText = 'Live Accounts';
               break;
            case 'link6':
               routeText.innerText = 'Deposit';
               break;
            case 'link7':
               routeText.innerText = 'Withdraw';
               break;
            case 'link8':
               routeText.innerText = 'Internal Transfers';
               break;
            case 'link9':
               routeText.innerText = 'Copy Trade';
               break;
            case 'link10':
               routeText.innerText = 'Transaction History';
               break;
            case 'link11':
               routeText.innerText = 'Referral System';
               break;
            case 'link12':
               routeText.innerText = 'My Referrals';
               break;
            case 'link15':
               routeText.innerText = 'Password Change';
               break;
            case 'link16':
               routeText.innerText = 'Download Center';
               break;
            case 'link17':
               routeText.innerText = 'Ebooks';
               break;
            case 'link18':
               routeText.innerText = 'Economic Calendar';
               break;
            case 'link19':
               routeText.innerText = 'PIP Calculators';
               break;
            case 'link20':
               routeText.innerText = 'Forex Heatmap';
               break;
            default:
               routeText.innerText = '';
               break;
         }
      }
      window.scrollTo(0, 0);
   }
   window.onload = function () {
      showRoute("link1")
   }
</script>
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
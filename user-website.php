<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
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

      .sidebar {
         width: 30%;
         background-color: #ffbf10;
         /* padding-top: 20px; */
         margin: 10px;
         border-radius: 10px;
         overflow: hidden;
      }

      .sidebar a {
         padding: 8px 8px 8px 32px;
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

      .content {
         flex: 1;
         padding: 16px;
         margin: 10px;
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

      #myTabs{
         margin-bottom: -8px;
      }
   </style>
</head>

<body>
   <?php include("includes/header.php"); ?>
   <div class="dashboard-subheader-bg">
      <div class="dashboard-subheader-box">
         <div class="position">
            <h5 class="text-white">Control Panel | Account Overview</h5>
            <p class="text-white font-size">Home > Dashboard</p>
         </div>
      </div>
   </div>
   <div class='layout'>

      <div class="sidebar">
         <ul class="nav nav-tabs border-0 row" id="myTabs">
            <li class="nav-item col p-0 ">
               <a class="nav-link active m-0 w-100 h-100 d-flex" id="tab1-tab" data-toggle="tab" href="#" data-target="#tab1" onclick="showRoute('link13')">
                  <img src="assets/images/svg/hamburger.svg" alt="Link 1 Icon">
                  <p class="text-white ms-2">My Account</p></a>
            </li>
            <li class="nav-item col p-0">
               <a class="nav-link m-0 w-100 h-100 d-flex" id="tab2-tab" data-toggle="tab" href="#" data-target="#tab2" onclick="showRoute('link14')"> <img
                     src="assets/images/svg/settings.svg" alt="Link 1 Icon">
                  <p class="text-white ms-2">Tools</p></a>
            </li>
         </ul>
         <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab1">
               <a class="d-flex" href="#" onclick="showRoute('link1')"> <img src="assets/images/sidebar/image9.svg"
                     alt="Link 1 Icon">
                  <h4 class="text-white ms-3 mt-2">Account Overview</h4></a>
               <a class="d-flex" href="#" onclick="showRoute('link2')"> <img src="assets/images/sidebar/image12.svg"
                     alt="Link 1 Icon"> <h4 class="text-white ms-3 mt-2">Open Live Account</h4></a>
               <a class="d-flex" href="#" onclick="showRoute('link3')"> <img src="assets/images/sidebar/image6.svg" alt="Link 1 Icon">
               <h4 class="text-white ms-3 mt-2">Open Demo Account</h4></a>
               <a class="d-flex" href="#" onclick="showRoute('link4')"> <img src="assets/images/sidebar/image1.svg"
                     alt="Link 1 Icon"><h4 class="text-white ms-3 mt-2">Add Existing Account</h4></a>

               <a class="d-flex" href="#" onclick="showRoute('link5')"> <img src="assets/images/sidebar/image11.svg"
                     alt="Link 1 Icon"><h4 class="text-white ms-3 mt-2">Live Accounts</h4></a>

               <a class="d-flex" href="#" onclick="showRoute('link6')"> <img src="assets/images/sidebar/image3.svg" alt="Link 1 Icon">
               <h4 class="text-white ms-3 ps-1 mt-2">Deposit</h4></a>

               <a class="d-flex" href="#" onclick="showRoute('link7')"> <img src="assets/images/sidebar/image4.svg" alt="Link 1 Icon">
               <h4 class="text-white ms-3 ps-1 mt-2">Withdraw</h4></a>

               <a class="d-flex" href="#" onclick="showRoute('link8')"> <img src="assets/images/sidebar/image10.svg"
                     alt="Link 1 Icon"><h4 class="text-white ms-3 mt-2">Internal Transfers</h4></a>

               <a class="d-flex" href="#" onclick="showRoute('link9')"> <img src="assets/images/sidebar/image8.svg"
                     alt="Link 1 Icon" class="my-1"><h4 class="text-white ms-3 ps-1 mt-2">Copy Trade</h4></a>

               <a class="d-flex" href="#" onclick="showRoute('link10')"> <img src="assets/images/sidebar/image10.svg"
                     alt="Link 1 Icon"><h4 class="text-white ms-2 ps-1 mt-2">Transaction History</h4></a>
               <a class="d-flex" href="#" onclick="showRoute('link11')"> <img src="assets/images/sidebar/image2.svg"
                     alt="Link 1 Icon" class="my-1"><h4 class="text-white ms-3 ps-1 mt-2">Referral System</h4></a>
               <a class="d-flex" href="#" onclick="showRoute('link12')"> <img src="assets/images/sidebar/image7.svg"
                     alt="Link 1 Icon"><h4 class="text-white ms-3 ps-1 mt-2">My Referrals</h4></a>
               <!-- Add more links as needed -->
            </div>
            <div class="tab-pane fade" id="tab2">
               <h2>jj</h2>
            </div>
         </div>

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
      if (selectedRoute) {
         selectedRoute.style.display = 'block';
      }
   }
   window.onload = function () {
      showRoute("link1")
   }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>
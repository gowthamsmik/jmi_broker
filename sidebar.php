<html>
    <head>
        <style>
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

      .content {
         flex: 1;
         padding: 1%;
         margin: 1%;
         width: 60%;
         overflow-x: auto;
         border:2px solid red;
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
    </head>
<body>
<div class="sidebar-box">
         <div class="sidebar">
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
                  <a class="d-flex" href="#" onclick="showRoute('link1')"> <img src="assets/images/sidebar/image9.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Account Overview</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link2')"> <img src="assets/images/sidebar/image12.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Open Live Account</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link3')"> <img src="assets/images/sidebar/image6.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Open Demo Account</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link4')"> <img src="assets/images/sidebar/image1.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Add Existing Account</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link5')"> <img src="assets/images/sidebar/image11.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Live Accounts</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link6')"> <img src="assets/images/sidebar/image3.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Deposit</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link7')"> <img src="assets/images/sidebar/image4.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Withdraw</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link8')"> <img src="assets/images/sidebar/image10.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Internal Transfers</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link9')"> <img src="assets/images/sidebar/image8.svg"
                        alt="Link 1 Icon" class="my-1">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Copy Trade</h4>
                  </a>

                  <a class="d-flex" href="#" onclick="showRoute('link10')"> <img src="assets/images/sidebar/image10.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-2 ps-1 mt-2 my_account">Transaction History</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link11')"> <img src="assets/images/sidebar/image2.svg"
                        alt="Link 1 Icon" class="my-1">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Referral System</h4>
                  </a>
                  <a class="d-flex" href="#" onclick="showRoute('link12')"> <img src="assets/images/sidebar/image7.svg"
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
</body>
</html>
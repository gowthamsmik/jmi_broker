<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//echo $uriSegments[3];
?>
<div class="sidebar-box">
        <div class="sidebar">
            <input type="hidden" value="" id="paneselected" />
            <ul class="nav nav-tabs border-0 row px-2" id="myTabs">
               <li class="nav-item col p-0 ">
                  <a class="nav-link active m-0 w-100 h-100 d-flex px-2" id="tab1-tab" data-toggle="tab" href="#"
                     data-target="#tab1" onclick="showRoute('link13')">
                     <img src="../assets/images/svg/hamburger.svg" alt="Link 1 Icon" class="tool_img">
                     <p class="text-white ms-2 my_account">My Account</p>

                  </a>
               </li>
               <li class="nav-item col p-0">
                  <a class="nav-link m-0 w-100 h-100 d-flex px-2" id="tab2-tab" data-toggle="tab" href="#"
                     data-target="#tab2" onclick="showRoute('link14')"> <img src="../assets/images/svg/settings.svg"
                        class="tool_img" alt="Link 1 Icon">
                     <p class="text-white ms-2 d-flex align-items-center" id="my_account">Tools</p>
                  </a>
               </li>
            </ul>
            <div class="tab-content mt-2">
               <div class="tab-pane fade show active" id="tab1">
                  <a class="d-flex <?php echo $uriSegments[3] == 'account-overview.php'?'active':'' ?>" href="../cpanel/account-overview.php" onclick="showRoute('link1')" id="mylink1"> <img src="../assets/images/sidebar/image9.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Account Overview</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'open-live-account.php'?'active':'' ?>" href="../cpanel/open-live-account.php" onclick="showRoute('link2')" id="mylink2"> <img src="../assets/images/sidebar/image12.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Open Live Account</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'open-demo-account.php'?'active':'' ?>" href="../cpanel/open-demo-account.php" onclick="showRoute('link3')" id="mylink3"> <img src="../assets/images/sidebar/image6.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Open Demo Account</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'add-existing-account.php'?'active':'' ?>" href="../cpanel/add-existing-account.php" onclick="showRoute('link4')" id="mylink4"> <img src="../assets/images/sidebar/image1.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Add Existing Account</h4>
                  </a>

                  <a class="d-flex <?php echo $uriSegments[3] == 'live-account.php'?'active':'' ?>" href="../cpanel/live-account.php" onclick="showRoute('link5')" id="mylink5"> <img src="../assets/images/sidebar/image11.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Live Accounts</h4>
                  </a>

                  <a class="d-flex <?php echo $uriSegments[3] == 'deposit.php'?'active':'' ?>" href="../cpanel/deposit.php" onclick="showRoute('link6')" id="mylink6"> <img src="../assets/images/sidebar/image3.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Deposit</h4>
                  </a>

                  <a class="d-flex <?php echo $uriSegments[3] == 'withdraw.php'?'active':'' ?>"  href="../cpanel/withdraw.php" onclick="showRoute('link7')" id="mylink7"> <img src="../assets/images/sidebar/image4.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Withdraw</h4>
                  </a>

                  <a class="d-flex <?php echo $uriSegments[3] == 'internal-transfers.php'?'active':'' ?>" href="../cpanel/internal-transfers.php" onclick="showRoute('link8')" id="mylink8"> <img src="../assets/images/sidebar/image10.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 mt-2 my_account">Internal Transfers</h4>
                  </a>

                  <a class="d-flex <?php echo trim($uriSegments[3]) == 'copy-trade.php'?'active':'' ?>" href="../cpanel/copy-trade.php" onclick="showRoute('link9')" id="mylink9"> <img src="../assets/images/sidebar/image8.svg"
                        alt="Link 1 Icon" class="my-1">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Copy Trade</h4>
                  </a>

                  <a class="d-flex <?php echo trim($uriSegments[3]) == 'transaction-history.php'?'active':'' ?>" href="../cpanel/transactional-history.php" onclick="showRoute('link10')" id="mylink10"> <img src="../assets/images/sidebar/image10.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-2 ps-1 mt-2 my_account">Transaction History</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'referral-system.php'?'active':'' ?>" href="../cpanel/referral-system.php" onclick="showRoute('link11')" id="mylink11"> <img src="../assets/images/sidebar/image2.svg"
                        alt="Link 1 Icon" class="my-1">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">Referral System</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'my-referral.php'?'active':'' ?>" href="../cpanel/my-referral.php" onclick="showRoute('link12')" id="mylink12"> <img src="../assets/images/sidebar/image7.svg"
                        alt="Link 1 Icon">
                     <h4 class="text-white ms-3 ps-1 mt-2 my_account">My Referrals</h4>
                  </a>
                  <!-- Add more links as needed -->
               </div>
               <div class="tab-pane fade" id="tab2">
                  <a class="d-flex <?php echo $uriSegments[3] == 'password-change.php'?'active':'' ?>" href="../cpanel/password-change.php" onclick="showRoute('link15')"> <i class="fa fa-key fa-lg"
                        aria-hidden="true"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Password Change</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'download-center.php'?'active':'' ?>" href="../cpanel/download-center.php" onclick="showRoute('link16')"><i class="fa fa-download fa-lg"
                        aria-hidden="true"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Download Center</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'ebooks.php'?'active':'' ?>" href="../cpanel/ebooks.php" onclick="showRoute('link17')"><i class="fa fa-book fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Ebooks</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'economic-calendar.php'?'active':'' ?>" href="../cpanel/economic-calendar.php" onclick="showRoute('link18')"> <i class="fa fa-calendar fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Economic Calendar</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'pip-calculators.php'?'active':'' ?>" href="../cpanel/pip-calculators.php" onclick="showRoute('link19')"> <i class="fa fa-calculator fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">PIP Calculators</h4>
                  </a>
                  <a class="d-flex <?php echo $uriSegments[3] == 'forex-heatmap.php'?'active':'' ?>" href="../cpanel/forex-heatmap.php" onclick="showRoute('link20')"> <i class="fa fa-fire fa-lg"></i>
                     <h4 class="text-white ms-3 mt-2 my_account">Forex Heatmap</h4>
                  </a>
               </div>
            </div>
        </div>
        <div class="slidebar_table" id="display_sidetable1">
            <?php include("../user-tab.php") ?>
         </div>

         <button class="slidebar_table" id="display_sidetable2" onclick="openPopup()">
            <p>Table</p>
         </button>
    </div>
 

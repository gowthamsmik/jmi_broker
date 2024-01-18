<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),);
// if ($uriSegments[1]=="cpanel"){
// 	include("../includes/softwareinclude/functions.php")
// }else{
// 	include("includes/softwareinclude/functions.php");
// }




function getPreferredLanguage()
{
	return isset($_SESSION['user_language']) ? $_SESSION['user_language'] : 'en';
}

$userPreferredLanguage = getPreferredLanguage();

if ($uriSegments[1]==="cpanel"){
	$langFilePath ="../languages/lang_".$userPreferredLanguage.".php";
}else{
	$langFilePath ="languages/lang_".$userPreferredLanguage.".php";
}


// Include the language file
// $langFilePath ="../languages/lang_".$userPreferredLanguage.".php";
//echo $langFilePath; exit(0);
if (file_exists($langFilePath)) {
	include_once($langFilePath);
} else {
	include_once(__DIR__."../languages/lang_en.php");
}

?>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    body {
        font-family: Inter;
    }

    a {
        text-decoration: none;
    }

    .largemenu {
        height: 98px !important;
    }

    #languageDropdown {
        width: 120px;
        color: white;
    }

    #options {
        color: black;
    }

    .dropdown-nav a {
        font-family: Inter !important;
    }

    .fo-family{
        font-family: Inter !important;
        font-size: 16px;
    }

    .topHeader-btn {
			margin-left: 20px !important;
			padding-left: 20px !important;
		}

		
        
		#badgeBox {
			max-height: 200px;
			width: 420px;
			overflow-y: auto !important;
            background: #0059b2;
            position: relative;
            overflow: hidden;
		}

        #badgeBox .dropdown-item:hover{
            background: #0342ab;
            width:100%;
            overflow-x: auto;
            color: #0059b2 !important;
        }

        #badgeBox .dropdown-value{
            color:yellow !important;
            
        }

        #badgeBox .date-time {
            color:white !important;
        }


    /*for search */
    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .topHeader-search {
        position: relative;
    }

    .suggestions {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: none;
    }

    .suggestions a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: #333;
    }

    .suggestions a:hover {
        background-color: #f0f0f0;
    }

    #suggestions {
        max-height: 170px;
        overflow-y: auto;
        border: 1px solid #ccc;
        z-index: 999;
    }
    .position{
        padding-top:5% !important;
    }
    .header_main{
        position: fixed;
        Z-index:2;
        width:100%;
    }
    </style>
</head>
<header class="header_main">
    <div class="top-header" >
        <div class="row container-fluid d-flex align-items-center justify-content-between">
            <div class="col topHeader-cont">
                <p>
                    <marquee behavior="scroll" direction="left">
                        <?php echo $lang['header_marquee']; ?>
                    </marquee>
                </p>
            </div>

            <div class="col d-flex align-items-center justify-content-end w-100">
                <div class="topHeader-search">
                    <input type="text" placeholder="<?php echo $lang['search']; ?>" oninput="showMatches(this.value)">
                    <button><i class="fas fa-search"></i></button>
                    <div class="suggestions" id="suggestions"></div>
                </div>
            </div>

            <div class="col topHeader-btn"
                style="<?php echo ($userPreferredLanguage === 'ar') ? 'border-right: 1px solid #ECECEC;' : 'border-left: 1px solid #ECECEC;'; ?>">
                <div class="tpBtn-language pe-2">

                    <select id="languageDropdown" onchange="changeLanguage(this.value)">
                        <option id="options" value="en"
                            <?php echo ($userPreferredLanguage === 'en') ? 'selected' : ''; ?>>English
                        </option>
                        <option id="options" value="ar"
                            <?php echo ($userPreferredLanguage === 'ar') ? 'selected' : ''; ?>>العربية
                        </option>
                        <!-- <option id="options" value="ru"
                            <?php echo ($userPreferredLanguage === 'ru') ? 'selected' : ''; ?>>русский язык
                        </option> -->

                    </select>
                </div>

                <?php if (!isset($_SESSION['sessionuser'])) { ?>
                <div class="tpBtn-login">
                    <a href="#" class="loginUp"><?php echo $lang['login']; ?></a>
                </div>
                <div class="tpBtn-register mx-3">
                    <a href="#" class="signUp"><?php echo $lang['register']; ?></a>
                </div>
                <?php } else { ?>
                <div class="tpBtn-language pe-2">

                    <a href="#">
                        <?php echo $_SESSION['sessionuser'] ?>
                    </a>

                    <div class="dropdown">
                        <button class="text-white dropdown-toggle p-0" data-bs-toggle="dropdown">
                            <i class="fa fa-user"></i>&nbsp&nbsp<?php echo $lang['my_account']?>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-secondary fs-5"
                                    href=<?php echo $siteurl."cpanel/personal-details.php"?> id="personaldetailsroute">
                                    <i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $lang['personal_details']?>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-secondary fs-5"
                                    href=<?php echo $siteurl."cpanel/upload-documents.php"?> id="fileuploadroute">
                                    <i class="fa fa-upload"></i>&nbsp;&nbsp;<?php echo $lang['uploadDocuments']?>
                                </a>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="dropdown-item text-secondary fs-5" id="logout"><i
                                        class="fa fa-sign-out"></i>&nbsp&nbsp<?php echo $lang['Logout'] ?></a></li>
                        </ul>

                    </div>

                </div>
                <?php } ?>
                <?php if (isset($_SESSION['sessionuser'])) { ?>
                <div class="dropdown d-flex">
                    <a href=<?php echo $siteurl."index.php"?>> <i class="fa fa-home mx-2" style="color: white;"></i>
                    </a>
                    <a href=<?php echo $siteurl."cpanel/account-overview.php"?>><i class="fas fa-tachometer-alt mx-2"
                            style="color: white;"></i> </a>
                            <div class="dropdown d-flex mx-2">
                                
                                <?php $notifications = getuserNotifications(); ?>
                                <script>console.log("kop",<?php echo count($notifications) ?>)</script>
                                <a href="#" class="d-flex" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell" style="color: white;"></i>
                                    <span class="badge text-white bg-danger" style="background: #0059b2;">
                                        <?php echo count($notifications) ?>
                                    </span>
                                </a>
                                
                                <ul class="dropdown-menu" id="badgeBox" aria-labelledby="dropdownMenuLink" style="color:black;">
                                </ul>
                            </div>
                            <script>
                                function generateDropdownItems() {
                                    var dropdownMenu = $("#badgeBox");
                                    dropdownMenu.empty(); // Clear existing items
                                    <?php if (count($notifications) > 0): ?>      
                                    <?php foreach ($notifications as $notification): ?>
                                        // Get the current date and time from the PHP variable
                                        var formattedDate = "<?php echo date('Y-m-d', strtotime($notification['created_at'])); ?>";
                                        var formattedTime = "<?php echo date('H:i:s', strtotime($notification['created_at'])); ?>";

                                         // Create an anchor tag with the message and link
                                         var listItem = $("<li class='dropdown-item text-white notify'  data-link='<?php echo $notification['notification_link']; ?>' data-notification='<?php echo $notification['id']; ?>'></li>");
                                       
                                       var messageLink = $("<a href='#' ></a>");
                                       messageLink.append("<span class='dropdown-value'><?php echo $notification['notification']; ?></span>");
                                       listItem.append(messageLink);
                                       listItem.append("<br><span class='date-time mt-2'>" + formattedDate + " " + formattedTime + "</span>");
                                       listItem.append("<hr class='mt-2'>");
                                       dropdownMenu.append(listItem);
                                   <?php endforeach; ?>
                                   <?php else: ?>
                                       dropdownMenu.append("<li class='dropdown-item text-white'>No Live Notifications</li>");
                                   <?php endif; ?>
                                }

                                generateDropdownItems();
                                $(document).on('click', '.notify', function (e) {
                                    e.preventDefault();
                                 
                                    var notificationId = $(this).data('notification');
                                    var notificationLink = $(this).data('link');
                                    var urlParts = notificationLink.split('?');
                                    var cleanUrl = urlParts[0];

                                    console.log("notify", notificationLink, notificationId, "<?php echo $siteurl . 'includes/compatibility.php'; ?>");
                                    // Use AJAX to send data to a PHP script
                                    $.ajax({
                                        type: "POST",
                                        url:  "<?php echo $siteurl . 'includes/compatibility.php'; ?>", // Replace with the actual PHP script file
                                        data: {
                                            action: 'updateNotificationStatus',
                                            notificationId: notificationId
                                        },
                                        success: function (response) {
                                            console.log("PHP script executed successfully:", response);
                                            window.location.href="https://jmibrokers.com"+cleanUrl+".php"; 
                                            // window.location.reload();
                                        },
                                        error: function (error) {
                                            console.error("Error in AJAX request:", error);
                                        }
                                    });                           
                                 
                                });

                            </script>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    </div>
    <div class="main-header largemenu gd-btn">
        <div class="container-fluid">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4 text-start">
                    <ul class="menu p-0">
                        <li class="dropdown-nav mt-2">
                            <a href="#"><?php echo $lang['about_us']; ?></a> <i class="fas fa-caret-down"></i>

                            <ul class="dropdown" style="<?php echo ($userPreferredLanguage === 'ar') ? '' : 'left:0'; ?>">
                                <li><a
                                        href=<?php echo $siteurl . "about-us.php" ?>><?php echo $lang['about_jmi']; ?></a>
                                </li>
                                <li><a href=<?php echo $siteurl . "licenses.php" ?>>
                                        <?php echo $lang['licenses_and_regulations']; ?></a></li>
                                <li><a
                                        href=<?php echo $siteurl . "risk-management.php" ?>><?php echo $lang['risk_management']; ?></a>
                                </li>
                                <li><a
                                        href=<?php echo $siteurl . "our-culture.php" ?>><?php echo $lang['our_culture']; ?></a>
                                </li>
                                <li><a
                                        href=<?php echo $siteurl . "ourphilosophy.php" ?>><?php echo $lang['our_philosophy']; ?></a>
                                </li>
                                <li><a href=<?php echo $siteurl . "brokers.php" ?>>
                                        <?php echo $lang['advantages_of_jmi_brokers_platform']; ?></a>
                                </li>
                                <li><a href=<?php echo $siteurl . "contact-us.php" ?>>
                                        <?php echo $lang['contact_us']; ?></a></li>
                                <li><a href=<?php echo $siteurl . "policy.php" ?>>
                                        <?php echo $lang['conflict_of_interest_policy']; ?></a></li>
                                <li><a href=<?php echo $siteurl . "faq.php" ?>><?php echo $lang['faqs']; ?></a></li>
                                <li><a href=<?php echo $siteurl . "career.php" ?>><?php echo $lang['careers']; ?></a>
                                </li>
                                <li><a
                                        href=<?php echo $siteurl . "partnership-programs.php" ?>><?php echo $lang['partnership_programs']; ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-nav m-0 mt-2">
                            <a href="#"><?php echo $lang['investment_choices']; ?></a> <i class="fas fa-caret-down"></i>

                            <ul class="dropdown" style="<?php echo ($userPreferredLanguage === 'ar') ? '' : 'left:0'; ?>">
                                <li><a href=<?php echo $siteurl ."forex-trading.php"?>>
                                        <?php echo $lang['forex_trading']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."precious-metal.php"?>>
                                        <?php echo $lang['precious_metals_trading']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."future.php"?>>
                                        <?php echo $lang['future_energies_trading']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."forex-trading.php"?>>
                                        <?php echo $lang['indices_trading']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."stock-cfds.php"?>>
                                        <?php echo $lang['stocks_cfds']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."commodities.php"?>>
                                        <?php echo $lang['commodities']; ?>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-nav m-0 mt-2">
                            <a href="#"><?php echo $lang['platforms']; ?></a> <i class="fas fa-caret-down"></i>

                            <ul class="dropdown" style="<?php echo ($userPreferredLanguage === 'ar') ? '' : 'left:0'; ?>">
                                <li><a href=<?php echo $siteurl ."forex-platform.php"?>>
                                        <?php echo $lang['forex_platform']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."metatrader.php"?>>
                                        <?php echo $lang['metatrader_4']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."mt4-platform-overview.php"?>>
                                        <?php echo $lang['mt4_platform_overview']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."iphone-ipad.php"?>>
                                        <?php echo $lang['iphone_and_ipad']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."android.php"?>>
                                        <?php echo $lang['android']; ?>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="text-center <?php echo ($userPreferredLanguage === 'ru') ? 'col-md-3' : 'col-md-4'; ?>">
                    <a href=<?php echo $siteurl ."index.php" ?>
                        class="logo d-flex justify-content-center align-items-center">
                        <img src=<?php echo $siteurl."assets/images/logo.png"; ?> alt="" class="">
                    </a>
                </div>
                <div class="text-end <?php echo ($userPreferredLanguage === 'ru') ? 'col-md-5' : 'col-md-4'; ?>">
                    <ul class="menu m-0">
                        <li class="dropdown-nav m-0">
                            <a href="#"><?php echo $lang['partnerships']; ?></a> <i class="fas fa-caret-down"></i>

                            <ul class="dropdown" style="<?php echo ($userPreferredLanguage === 'ar') ? '' : 'left:0'; ?>">
                                <li><a href=<?php echo $siteurl ."how-to-become.php"?>>
                                        <?php echo $lang['become_our_partner']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."business.php"?>>
                                        <?php echo $lang['why_make_business']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."brokers.php"?>>
                                        <?php echo $lang['introducing_brokers']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."money-manager.php"?>>
                                        <?php echo $lang['money_manager_program']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."how-to-become-money-managers.php"?>>
                                        <?php echo $lang['how_to_become_money_managers']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."white-label.php"?>>
                                        <?php echo $lang['white_labels']; ?>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="dropdown-nav m-0">
                            <a href="#"><?php echo $lang['tools']; ?></a> <i class="fas fa-caret-down"></i>

                            <ul class="dropdown" style="<?php echo ($userPreferredLanguage === 'ar') ? '' : 'left:0'; ?>">
                                <li><a href=<?php echo $siteurl ."calendar.php"?>>
                                        <?php echo $lang['economic_calendar']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."dailyfundamental.php"?>>
                                        <?php echo $lang['fundamental_analysis']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."pip-calculator.php"?>>
                                        <?php echo $lang['pip_calculator']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."daily_technical_analysis.php"?>>
                                        <?php echo $lang['daily_technical_analysis']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."fx_heatmap.php"?>>
                                        <?php echo $lang['fx_heatmap']; ?>
                                    </a></li>
                                <li><a href=<?php echo $siteurl ."download-file.php"?>>
                                        <?php echo $lang['download_files']; ?>
                                    </a></li>

                            </ul>
                        </li>

                        <li class="nav-btn text-white m-0"><a href=<?php echo $siteurl ."contact-us.php"?>><?php echo $lang['contact_us']?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header shortmenu">
        <div class="container-fluid">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <a href=<?php echo $siteurl ."index.php" ?> class="logo d-flex justify-content-center align-items-center">
                        <img src=<?php echo $siteurl . "assets/images/logo.png" ?> alt="">
                    </a>
                </div>
                <div class="col-md-4 text-end">
                    <div class="menuWrap">
                        <ul class="menu">
                            <li class="dropdown-nav">
                                <a data-bs-toggle="dropdown" class="bg" href="#"><?php echo $lang['about_us']; ?></a> <i
                                    class="fas fa-caret-down"></i>

                                <ul class="dropdown-menu">
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "about-us.php" ?>><?php echo $lang['about_jmi']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "licenses.php" ?>>
                                            <?php echo $lang['licenses_and_regulations']; ?></a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "risk-management.php" ?>><?php echo $lang['risk_management']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "our-culture.php" ?>><?php echo $lang['our_culture']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "ourphilosophy.php" ?>><?php echo $lang['our_philosophy']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "brokers.php" ?>>
                                            <?php echo $lang['advantages_of_jmi_brokers_platform']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "contact-us.php" ?>>
                                            <?php echo $lang['contact_us']; ?></a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "policy.php" ?>>
                                            <?php echo $lang['conflict_of_interest_policy']; ?></a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "faq.php" ?>><?php echo $lang['faqs']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "career.php" ?>><?php echo $lang['careers']; ?></a>
                                    </li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl . "partnership-programs.php" ?>><?php echo $lang['partnership_programs']; ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-nav">
                                <a data-bs-toggle="dropdown" class="bg" href="#"><?php echo $lang['investment_choices']; ?></a> <i
                                    class="fas fa-caret-down"></i>

                                <ul class="dropdown-menu">
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."forex-trading.php"?>>
                                            <?php echo $lang['forex_trading']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."precious-metal.php"?>>
                                            <?php echo $lang['precious_metals_trading']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."future.php"?>>
                                            <?php echo $lang['future_energies_trading']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."future.php"?>>
                                            <?php echo $lang['indices_trading']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."stock-cfds.php"?>>
                                            <?php echo $lang['stocks_cfds']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."commodities.php"?>>
                                            <?php echo $lang['commodities']; ?>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown-nav">
                                <a data-bs-toggle="dropdown" class="bg" href="#"><?php echo $lang['platforms']; ?></a> <i
                                    class="fas fa-caret-down"></i>

                                <ul class="dropdown-menu">
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."forex-platform.php"?>>
                                            <?php echo $lang['forex_platform']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."metatrader.php"?>>
                                            <?php echo $lang['metatrader_4']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                            href=<?php echo $siteurl ."mt4-platform-overview.php"?>>
                                            <?php echo $lang['mt4_platform_overview']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."iphone-ipad.php"?>>
                                            <?php echo $lang['iphone_and_ipad']; ?>
                                        </a></li>
                                    <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."android.php"?>>
                                            <?php echo $lang['android']; ?>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown-nav">
                                <a data-bs-toggle="dropdown" class="bg" href="#"><?php echo $lang['partnerships']; ?></a> <i
                                    class="fas fa-caret-down"></i>

                                <ul class="dropdown-menu">
								<li class=" p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."how-to-become.php"?>>
                                        <?php echo $lang['become_our_partner']; ?>
                                    </a>
                            </li>
                            <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."business.php"?>>
                                    <?php echo $lang['why_make_business']; ?>
                                </a></li>
                            <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."brokers.php"?>>
                                    <?php echo $lang['introducing_brokers']; ?>
                                </a></li>
                            <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."money-manager.php"?>>
                                    <?php echo $lang['money_manager_program']; ?>
                                </a></li>
                            <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                    href=<?php echo $siteurl ."how-to-become-money-managers.php"?>>
                                    <?php echo $lang['how_to_become_money_managers']; ?>
                                </a></li>
                            <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."white-label.php"?>>
                                    <?php echo $lang['white_labels']; ?>
                                </a></li>
                        </ul>
                        </li>
                        <li class="dropdown-nav">
                            <a data-bs-toggle="dropdown" class="bg" href="#"><?php echo $lang['tools']; ?></a> <i
                                class="fas fa-caret-down"></i>

                            <ul class="dropdown-menu">
                                <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."calendar.php"?>>
                                        <?php echo $lang['economic_calendar']; ?>
                                    </a></li>
                                <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."dailyfundamental.php"?>>
                                        <?php echo $lang['fundamental_analysis']; ?>
                                    </a></li>
                                <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."pip-calculator.php"?>>
                                        <?php echo $lang['pip_calculator']; ?>
                                    </a></li>
                                <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                        href=<?php echo $siteurl ."daily_technical_analysis.php"?>><?php echo $lang['daily_technical_analysis']; ?></a>
                                </li>

                                <li class="p-0 px-3"><a class="dropdown-item text-black bg"
                                        href=<?php echo $siteurl ."fx_heatmap.php"?>><?php echo $lang['heatmap']; ?></a></li>

                                <li class="p-0 px-3"><a class="dropdown-item text-black bg" href=<?php echo $siteurl ."download-file.php"?>>
                                        <?php echo $lang['download_files']; ?>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="nav-btn"><a href=<?php echo $siteurl ."contact-us.php"?>><?php echo $lang['contact_us']?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if (!isset($_SESSION['sessionuser'])) { ?>
<div></div>
<?php } else {if($uriSegments[1]=="cpanel"){ ?>
<div class="dashboard-subheader-bg">
    <div class="dashboard-subheader-box">
        <div class="position">
            <h5 class="text-white"><?php echo $lang['controlPanel']?> |
                <?php echo ucwords(substr(str_replace('-', ' ', $uriSegments[2]), 0, strlen($uriSegments[2]) - 4)); ?>
            </h5>
            <p class="text-white text-center">
                <a href='<?php echo $siteurl . "index.php" ?>' class="text-white fo-family"><?php echo $lang["home"]?></a> > <a
                    href='<?php echo $siteurl . "cpanel/account-overview.php?tab=1" ?>'
                    class="text-white fo-family"><?php echo $lang["dashboard"]?>
                </a>
                > <span
                    id="routeText" class="fs-6"><?php echo ucwords(substr(str_replace('-', ' ', $uriSegments[2]), 0, strlen($uriSegments[2]) - 4)); ?>
                </span>
            </p>
        </div>
    </div>
</div>
<?php }} ?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="<?php echo $siteurl;?>/assets/js/link.js"></script>
<script>
$(document).ready(function() {
    $('#logout').on('click', function(e) {
        var siteurl = '<?php echo $siteurl?>';
        $.ajax({
            url: siteurl + 'includes/softwareinclude/logout.php',
            type: 'POST',
            success: function(response) {
                alert(response);
                localStorage.removeItem('activeTabId')
                window.location.href = siteurl + "index.php";
            },
            error: function(xhr, status, error) {
                console.log("error", error);
            }

        });
    });
})

function changeLanguage(selectedLanguage) {
    console.log("selectedLanguage", selectedLanguage);
    // Send an AJAX request to update the user's preferred language on the server
    var siteurl = '<?php echo $siteurl?>';
    $.ajax({
        url: siteurl + 'includes/update-language.php', // Replace with the actual path to your PHP script
        type: 'POST',
        data: {
            language: selectedLanguage
        },
        success: function(response) {
            // Optionally, you can reload the page or update specific elements on the page
            location.reload(); // Reload the page to reflect the language change
        },
        error: function(xhr, status, error) {
            console.log("Error updating language:", error);
        }
    });
}

$(document).on('click', function(event) {
    // Check if the clicked element is not inside the search div
    if (!$(event.target).closest('.topHeader-search').length) {
        // Hide the suggestion box
        $('.suggestions').hide();
    }
});

$('#searchInput').on('focus', function() {
    // Show the suggestion box when the input is focused
    $('.suggestions').show();
});

function getLanguageFromQuery(query) {
    // Example: Check if the query contains Arabic characters
    const arabicCharacters = /[\u0600-\u06FF]/;
    // Example: Check if the query contains Russian characters
    const russianCharacters = /[\u0400-\u04FF]/;

    if (arabicCharacters.test(query)) {
        return 'ar';
    } else if (russianCharacters.test(query)) {
        return 'ru';
    } else {
        return 'en';
    }
}

function showMatches(query) {
    const suggestionsContainer = document.getElementById('suggestions');
    suggestionsContainer.innerHTML = '';

    const language = getLanguageFromQuery(query);

    const matches = allLinks.filter(linkData => {
        // Check the language suggestions based on the user's input language
        const languageIndex = language === 'ar' ? 2 : (language === 'ru' ? 3 : 1);
        return linkData[languageIndex].toLowerCase().includes(query.toLowerCase());
    });

    matches.forEach(match => {
        const suggestionElement = document.createElement('a');
        suggestionElement.href = match[0];
        suggestionElement.textContent = language === 'ar' ? match[2] : (language === 'ru' ? match[3] : match[
        1]);
        suggestionsContainer.appendChild(suggestionElement);
    });

    suggestionsContainer.style.display = matches.length > 0 ? 'block' : 'none';
}

var userPreferredLanguage = "<?php echo $userPreferredLanguage; ?>";
if (userPreferredLanguage === 'ar') {
    document.body.style.direction = 'rtl';
}
</script>
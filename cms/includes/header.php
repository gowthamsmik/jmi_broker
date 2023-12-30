<?php session_start();
if (isset($_SESSION['sessionkeyadmin'])) {
	global $currentuserid;
	$currentuserid = $_SESSION['sessionadmin'];
	global $siteurl;
} else { ?>
	<meta http-equiv="refresh" content="0; url=login.php">

	<?php die;
	

}
include('softwareinclude/functions.php');
$notcount = getcountnotification();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portal - CMS - JMI</title>

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - CMS - JMI">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
	<link rel="font" href="assets/fonts/RussoOne">
	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
	<style>
		.dropdown-menu-content {
			max-height: 300px;
			overflow-y: auto;
		}

		.item {
			border-bottom: 1px solid #ddd;
		}

		.unread {
			background-color: #e6f7ff;
		}
	</style>
<!-- Add this script after the modal HTML -->


</head>

<body class="app">

	<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">
					<div class="row justify-content-between align-items-center">

						<div class="col-auto">
							<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
									role="img">
									<title>Menu</title>
									<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
										stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
								</svg>
							</a>
						</div><!--//col-->
						<!-- <div class="search-mobile-trigger d-sm-none col">
							<i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
						</div>
						<div class="app-search-box col">
							<form class="app-search-form">
								<input type="text" placeholder="Search..." name="search"
									class="form-control search-input">
								<button type="submit" class="btn search-btn btn-primary" value="Search"><i
										class="fa-solid fa-magnifying-glass"></i></button>
							</form>
						</div> -->

						<div class="app-utilities col-auto">
							<div class="app-utility-item app-notifications-dropdown dropdown" onclick=seennotification()>
								<a class="dropdown-toggle text-success" data-toggle="dropdown" href="#" role="button"
									aria-haspopup="true" aria-expanded="false" >
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
										<path fill-rule="evenodd"
											d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
									</svg>
									<span class="icon-badge">
										<?php echo $notcount ?>
									</span>
								</a>

								<div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
									<div class="dropdown-menu-header p-3 overflow-auto">
										<h5 class="dropdown-menu-title mb-0">Notifications</h5>
									</div>
									<div class="dropdown-menu-content">
										<div class="item p-3">
											<?php
											$notifications = getAllNotifications();

											foreach ($notifications as $notification) {
												// $unreadClass = $notification['notification_status'] ? 'unread' : '';
												$daysAgo = calculateDaysAgo($notification['created_at']);
												if ($notification['notification_link'] == '#open_account') {
													?>
													<div class="row gx-2 bg-danger justify-content-between align-items-center  <?php echo $unreadClass; ?>"
														data-toggle="modal" data-target="#open_live_account" data-notification-id="<?php echo $notification['id']; ?>">
														<div class="col">
															<div class="info">
																<div class="desc">
																	<?php echo $notification['notification']; ?>
																</div>
															</div>
														</div>
														<div class="col-auto">
															<small class="text-muted">
																<?php echo $daysAgo; ?> days ago
															</small>
														</div>
													</div>
												<?php } else if ($notification['notification_link'] == '#edit_account') { ?>
														<div class="row gx-2 bg-warning justify-content-between align-items-center py-2 editlive <?php echo $unreadClass; ?>"
															data-toggle="modal" data-target="#edit_live_account" data-login="<?php echo $notification['notification']; ?>" data-notification-id="<?php echo $notification['id']; ?>">
															<div class="col">
																<div class="info">
																	<div class="desc">
																		<?php echo '('.$notification['id'].')'?>
																	<?php echo $notification['notification']; ?>
																	</div>
																</div>
															</div>
															<div class="col-auto">
																<small class="text-muted">
																<?php echo $daysAgo; ?> days ago
																</small>
															</div>
														</div>
												<?php } else { 
													$link=$siteurl;
													$file_name = pathinfo($notification['notification_link'], PATHINFO_FILENAME);
													$extractUrl = $file_name;
													if (strpos($extractUrl, '?') !== false) {
														$extractUrl = strtok($file_name, '?');
													}
													
													
													$link=$siteurl.$extractUrl;
													
													?>
														<div class="row gx-2 justify-content-between align-items-center py-2 notificationupdate <?php echo $unreadClass; ?>"
															data-location='<?php echo $link; ?>'
															  data-notification-id="<?php echo $notification['id']; ?>">
															<div class="col">
																<div class="info">
																	<div class="desc">
																	<?php echo $notification['notification']; ?>
																	</div>
																</div>
															</div>
															<div class="col-auto">
																<small class="text-muted">
																<?php echo $daysAgo; ?> days ago
																</small>
															</div>
														</div>
												<?php } ?>
												<hr>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>

							<?php
							function calculateDaysAgo($createdAt)
							{
								$createdTimestamp = strtotime($createdAt);
								$currentTimestamp = time();
								$secondsAgo = $currentTimestamp - $createdTimestamp;
								$daysAgo = floor($secondsAgo / (60 * 60 * 24));
								return $daysAgo;
							}
							?>



							<!-- <div class="app-utility-item">
								<a href="#" title="Settings">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
										<path fill-rule="evenodd"
											d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
									</svg>
								</a>
							</div> -->

							<!-- <div class="app-utility-item app-user-dropdown dropdown">
								<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
									role="button" aria-expanded="false"><img src="assets/images/user.png"
										alt="user profile"></a>
								<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
									<li><a class="dropdown-item" href="account.html">Account</a></li>
									<li><a class="dropdown-item" href="settings.html">Settings</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="logout.php">Log Out</a></li>
								</ul>
							</div> -->
							<div class="app-utility-item app-user-dropdown dropdown text-success">
								<a class="dropdown-toggle text-success" data-toggle="dropdown" href="#" role="button"
									aria-haspopup="true" aria-expanded="false">
									<svg width="22" height="22" color="green" viewBox="0 0 32 32" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M6.5367 24.3792C7.88253 23.3804 9.34863 22.5918 10.935 22.0133C12.5214 21.4348 14.2097 21.1455 16.0001 21.1455C17.7905 21.1455 19.4789 21.4348 21.0652 22.0133C22.6516 22.5918 24.1177 23.3804 25.4636 24.3792C26.4481 23.2972 27.2281 22.0448 27.8036 20.6218C28.379 19.1988 28.6668 17.6581 28.6668 15.9996C28.6668 12.4899 27.4331 9.50137 24.9658 7.03401C22.4984 4.56665 19.5098 3.33297 16.0001 3.33297C12.4904 3.33297 9.50186 4.56665 7.0345 7.03401C4.56714 9.50137 3.33346 12.4899 3.33346 15.9996C3.33346 17.6581 3.6212 19.1988 4.19669 20.6218C4.77218 22.0448 5.55218 23.2972 6.5367 24.3792ZM16.0006 17.1871C14.555 17.1871 13.3359 16.6909 12.3433 15.6986C11.3506 14.7063 10.8543 13.4874 10.8543 12.0418C10.8543 10.5962 11.3505 9.37706 12.3428 8.38444C13.3351 7.39182 14.5541 6.89551 15.9997 6.89551C17.4453 6.89551 18.6644 7.39166 19.657 8.38396C20.6496 9.37629 21.1459 10.5952 21.1459 12.0408C21.1459 13.4864 20.6498 14.7056 19.6575 15.6982C18.6651 16.6908 17.4462 17.1871 16.0006 17.1871ZM16.0001 31.0413C13.9113 31.0413 11.952 30.6485 10.122 29.8629C8.29207 29.0773 6.70011 28.0075 5.34615 26.6536C3.99222 25.2997 2.92246 23.7077 2.13689 21.8777C1.35129 20.0478 0.958496 18.0884 0.958496 15.9996C0.958496 13.9109 1.35129 11.9515 2.13689 10.1216C2.92246 8.29159 3.99222 6.69962 5.34615 5.34566C6.70011 3.99173 8.29207 2.92198 10.122 2.1364C11.952 1.35081 13.9113 0.958008 16.0001 0.958008C18.0889 0.958008 20.0483 1.35081 21.8782 2.1364C23.7082 2.92198 25.3001 3.99173 26.6541 5.34566C28.008 6.69962 29.0778 8.29159 29.8634 10.1216C30.649 11.9515 31.0418 13.9109 31.0418 15.9996C31.0418 18.0884 30.649 20.0478 29.8634 21.8777C29.0778 23.7077 28.008 25.2997 26.6541 26.6536C25.3001 28.0075 23.7082 29.0773 21.8782 29.8629C20.0483 30.6485 18.0889 31.0413 16.0001 31.0413ZM16.0001 28.6663C17.4292 28.6663 18.807 28.4364 20.1335 27.9766C21.4601 27.5169 22.638 26.8739 23.6671 26.0477C22.638 25.252 21.4753 24.6318 20.1792 24.1873C18.8831 23.7427 17.4901 23.5204 16.0001 23.5204C14.5102 23.5204 13.1146 23.7402 11.8134 24.1797C10.5122 24.6191 9.35212 25.2418 8.33311 26.0477C9.36228 26.8739 10.5401 27.5169 11.8667 27.9766C13.1933 28.4364 14.5711 28.6663 16.0001 28.6663ZM16.0001 14.8122C16.7877 14.8122 17.4464 14.5473 17.9763 14.0175C18.5061 13.4876 18.771 12.8289 18.771 12.0413C18.771 11.2537 18.5061 10.595 17.9763 10.0651C17.4464 9.53534 16.7877 9.27043 16.0001 9.27043C15.2125 9.27043 14.5538 9.53534 14.024 10.0651C13.4942 10.595 13.2293 11.2537 13.2293 12.0413C13.2293 12.8289 13.4942 13.4876 14.024 14.0175C14.5538 14.5473 15.2125 14.8122 16.0001 14.8122Z"
											fill="green" />
									</svg>
									Admin </a>
								<ul class="dropdown-menu dropdown-menu-left" aria-labelledby="user-dropdown-toggle">
									<li class="dropdown-item" style="cursor:pointer">
										<a class="openadminpopup" data-toggle="modal"
											data-target="#changepasswordPopup">
											Change Password
										</a>
									</li>
									<li class="dropdown-item" style="cursor:pointer">
										<a class="openuserpopup" data-toggle="modal"
											data-target="#changeuserpasswordPopup">
											Change User Password
										</a>
									</li>
								</ul>
							</div>

							<div class="app-utility-item app-user-dropdown ml-2">
								<button class="btn text-success">
									<a class="dropdown-item" href="logout.php">Log Out</a>
								</button>
							</div>
						</div>
					</div><!--//row-->
				</div><!--//app-header-content-->
			</div><!--//container-fluid-->
		</div><!--//app-header-inner-->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding">
					<a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/app-logo.svg"
							alt="logo"><span class="logo-text">PORTAL</span></a>

				</div><!--//app-branding-->

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">
						<li class="nav-item">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link active" href="index.php">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
										<path fill-rule="evenodd"
											d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
									</svg>
								</span>
								<span class="nav-link-text">Overview</span>
							</a><!--//nav-link-->
						</li><!--//nav-item-->

						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Pages</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-lang-pages.php">All Pages</a>
									</li>
								</ul>
							</div>
						</li><!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Sections</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-2" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-lang-sections.php">All
											Sections</a></li>
								</ul>
							</div>
						</li><!--//nav-item-->


						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-4" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Packages</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-4" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-lang-packages.php">All
											Packages</a></li>
								</ul>
							</div>
						</li><!--//nav-item-->

						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-5" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Faq's</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-5" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-lang-faqs.php">All FAQ's</a>
									</li>
								</ul>
							</div>
						</li><!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-8" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">News</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-8" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-news.php">All News</a>
									</li>
								</ul>
							</div>
						</li><!--//nav-item-->
						<!-- <li class="nav-item has-submenu">
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-9" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Funamental Analysis</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span>
							</a>
							<div id="submenu-9" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-f-analysis.php">All
											Funamental Analysis</a></li>
								</ul>
							</div>
						</li> -->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-6" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Leads</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-6" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="all-leads.php">All Leads</a>
									</li>
								</ul>
							</div>
						</li><!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-11" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">General</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-11" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="documents.php">Documents</a>
									</li>
									<li class="submenu-item"><a class="submenu-link" href="admins.php">Admins</a></li>
									<li class="submenu-item" style="cursor:pointer"><a
											class="submenu-link openadminpopup" data-toggle="modal"
											data-target="#changepasswordPopup">
											Change Password
										</a></li>
									<li class="submenu-item" style="cursor:pointer"><a
											class="submenu-link openuserpopup" data-toggle="modal"
											data-target="#changeuserpasswordPopup">
											Change User Password
										</a></li>
									<!-- <li class="submenu-item"><a class="submenu-link" href="union-pay-card.php">UnionPay
											Cards</a></li> -->
								</ul>
							</div>

						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-12" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">All Accounts</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-12" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="website-account.php">Website
											Accounts</a></li>
									<li class="submenu-item"><a class="submenu-link" href="demo-account.php">Demo
											Accounts</a></li>
									<li class="submenu-item"><a class="submenu-link" href="live-account.php">Live
											Accounts</a></li>
									<li class="submenu-item"><a class="submenu-link"
											href="referral-account.php">Referrals Accounts</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-13" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Fund Requests</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-13" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link"
											href="deposite-f-requests.php">Deposite Fund Requests</a></li>
									<li class="submenu-item"><a class="submenu-link"
											href="withdraw-f-requests.php">Withdraw Fund Requests</a></li>
									<li class="submenu-item"><a class="submenu-link"
											href="internal-transfer-f-requests.php">Internal Transfer Requests</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-14" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">SlideShow</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-14" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="en-slideshow.php">EN
											SlideShow</a></li>
									<li class="submenu-item"><a class="submenu-link" href="ru-slideshow.php">RU
											SlideShow</a></li>
									<li class="submenu-item"><a class="submenu-link" href="ar-slideshow.php">AR
											SlideShow</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-15" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Analysis | News | Offers</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-15" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link"
											href="technical-analysis.php">Technical Analysis</a></li>
									<li class="submenu-item"><a class="submenu-link"
											href="fundamental-analysis.php">Fundamental Analysis</a></li>
									<li class="submenu-item"><a class="submenu-link" href="offers.php">Offers</a></li>
									<!-- <li class="submenu-item"><a class="submenu-link" href="all-leads.php">News </a></li> -->
								</ul>
							</div>
						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-16" aria-expanded="false" aria-controls="submenu-1">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Old Links</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-16" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link"
											href="callback-request.php">Callback Requests</a></li>
									<li class="submenu-item"><a class="submenu-link" href="mailer.php">Mailer</a></li>
									<li class="submenu-item"><a class="submenu-link" href="send-mails.php">Send
											Mails</a></li>
									<li class="submenu-item"><a class="submenu-link" href="landing-users.php">Landing
											Users</a></li>
									<li class="submenu-item"><a class="submenu-link" href="all-search-urls.php">All
											Search URLs</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-17" aria-expanded="false" aria-controls="submenu-17">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Become Our Partner</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-17" class="collapse submenu submenu-17" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link"
											href="all-become-our-partner.php">All Become Our
											Partner</a>
									</li>
								</ul>
							</div>
						</li><!--//nav-item-->
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
								data-bs-target="#submenu-18" aria-expanded="false" aria-controls="submenu-18">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Copy Trade</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a><!--//nav-link-->
							<div id="submenu-18" class="collapse submenu submenu-18" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="copy-trade.php">All Copy
											Trade
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item has-submenu">
							<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<a class="nav-link submenu-toggle" href="logout.php">
								<span class="nav-icon">
									<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
										<path
											d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
									</svg>
								</span>
								<span class="nav-link-text">Logout </span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
										fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span><!--//submenu-arrow-->
							</a>
						</li>
					</ul><!--//app-menu-->
				</nav><!--//app-nav-->
				<div class="app-sidepanel-footer">
					<nav class="app-nav app-nav-footer">
						<ul class="app-menu footer-menu list-unstyled">
							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<a class="nav-link" href="javascript:;">
									<span class="nav-icon">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd"
												d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
											<path fill-rule="evenodd"
												d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
										</svg>
									</span>
									<span class="nav-link-text">Settings</span>
								</a><!--//nav-link-->
							</li><!--//nav-item-->


						</ul><!--//footer-menu-->
					</nav>
				</div>
			</div>
		</div>



	</header>
	<?php include('change-password.php');
	include('change-user-password.php');
	include('open_live_account.php');
	include('edit_live_account.php');
	?>
</body>
<script>
    $('#open_live_account').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        var notificationId = button.data('notification-id'); 
        var modal = $(this);
        modal.find('#notification_id').val(notificationId);
    });
	$('#edit_live_account').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        var notificationId = button.data('notification-id');
        var modal = $(this);
        modal.find('#notification_id').val(notificationId); 
    });
</script>
</html>
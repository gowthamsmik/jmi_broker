<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// Function to parse the Accept-Language header and extract the preferred language
function getPreferredLanguage()
{
	return isset($_SESSION['user_language']) ? $_SESSION['user_language'] : 'en';
}

// Get the user's preferred language
$userPreferredLanguage = getPreferredLanguage();

// Include the language file
$langFilePath = __DIR__ ."/../languages/lang_$userPreferredLanguage.php";
if (file_exists($langFilePath)) {
	include_once($langFilePath);
} else {

	include_once(__DIR__ ."/../languages/lang_en.php");
}

?>


<header>
<div class="top-header">
		<div class="container-fluid d-flex align-items-center justify-content-between">
			<div class="topHeader-cont">
				<p>
					<?php echo $lang['header_marquee']; ?>
				</p>
			</div>

			<div class="d-flex align-items-center">
				<div class="topHeader-search">
					<input type="text" placeholder="<?php echo $lang['search']; ?>">
					<button><i class="fas fa-search"></i></button>
				</div>

				<div class="topHeader-btn">
					<div class="tpBtn-language">
						<select id="languageDropdown" onchange="changeLanguage(this.value)">
							<option value="en" <?php echo ($userPreferredLanguage === 'en') ? 'selected' : ''; ?>>English
							</option>
							<option value="ar" <?php echo ($userPreferredLanguage === 'ar') ? 'selected' : ''; ?>>العربية
							</option>
							<option value="ru" <?php echo ($userPreferredLanguage === 'ru') ? 'selected' : ''; ?>>русский язык
							</option>

							<!-- Add more language options as needed -->
						</select>
					</div>
					<?php if (!isset($_SESSION['sessionkey'])) { ?>
						<div class="tpBtn-login">
							<a href="#" class="loginUp">
								<?php echo $lang['login']; ?>
							</a>
						</div>
						<div class="tpBtn-register">
							<a href="#" class="signUp"><?php echo $lang['register']; ?></a>
						</div>
					<?php } else { ?>
						<div class="tpBtn-language">

							<a>
								<?php echo $_SESSION['sessionuser'] ?>
							</a>
							<a href="#" id="logout"><?php echo $lang['logout']; ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="main-header largemenu">
		<div class="container-fluid">
			<div class="menu-Bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-4 text-start">
					<ul class="menu">
						<li class="dropdown-nav">
							<a href="#">
								<?php echo $lang['about_us']; ?>
							</a> <i class="fas fa-caret-down"></i>
							<ul class="dropdown">
								<li><a href="about-us.php">
										<?php echo $lang['about_jmi']; ?>
									</a></li>
								<li><a href="licenses.php">
										<?php echo $lang['licenses_and_regulations']; ?>
									</a></li>
								<li><a href="brokers.php">
										<?php echo $lang['advantages_of_jmi_brokers_platform']; ?>
									</a></li>
								<li><a href="contact-us.php">
										<?php echo $lang['contact_us']; ?>
									</a></li>
								<li><a href="policy.php">
										<?php echo $lang['conflict_of_interest_policy']; ?>
									</a></li>
								<li><a href="faq.php">
										<?php echo $lang['faqs']; ?>
									</a></li>
								<li><a href="career.php">
										<?php echo $lang['careers']; ?>
									</a></li>
								<li><a href="partnership-programs.php">
										<?php echo $lang['partnership_programs']; ?>
									</a></li>
							</ul>
						</li>
						<li class="dropdown-nav">
							<a href="#">
								<?php echo $lang['investment_choices']; ?>
							</a> <i class="fas fa-caret-down"></i>
							<ul class="dropdown">
								<li><a href="forex-trading.php">
										<?php echo $lang['forex_trading']; ?>
									</a></li>
								<li><a href="precious-metal.php">
										<?php echo $lang['precious_metals_trading']; ?>
									</a></li>
								<li><a href="future.php">
										<?php echo $lang['future_energies_trading']; ?>
									</a></li>
								<li><a href="forex-trading.php">
										<?php echo $lang['indices_trading']; ?>
									</a></li>
								<li><a href="stock-cfds.php">
										<?php echo $lang['stocks_cfds']; ?>
									</a></li>
								<li><a href="commodities.php">
										<?php echo $lang['commodities']; ?>
									</a></li>
							</ul>
						</li>
						<li class="dropdown-nav">
							<a href="#">
								<?php echo $lang['platforms']; ?>
							</a> <i class="fas fa-caret-down"></i>
							<ul class="dropdown">
								<li><a href="forex-platform.php">
										<?php echo $lang['forex_platform']; ?>
									</a></li>
								<li><a href="metatrader.php">
										<?php echo $lang['metatrader_4']; ?>
									</a></li>
								<li><a href="mt4-platform-overview.php">
										<?php echo $lang['mt4_platform_overview']; ?>
									</a></li>
								<li><a href="iphone-ipad.php">
										<?php echo $lang['iphone_and_ipad']; ?>
									</a></li>
								<li><a href="android.php">
										<?php echo $lang['android']; ?>
									</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-4 text-center">
					<a href="./" class="logo">
						<img src="assets/images/logo.png" alt="">
					</a>
				</div>
				<div class="col-md-4 text-end">
					<ul class="menu">
						<li class="dropdown-nav">
							<a href="#">
								<?php echo $lang['partnerships']; ?>
							</a> <i class="fas fa-caret-down"></i>
							<ul class="dropdown">
								<li><a href="how-to-become.php">
										<?php echo $lang['become_our_partner']; ?>
									</a></li>
								<li><a href="business.php">
										<?php echo $lang['why_make_business']; ?>
									</a></li>
								<li><a href="brokers.php">
										<?php echo $lang['introducing_brokers']; ?>
									</a></li>
								<li><a href="money-manager.php">
										<?php echo $lang['money_manager_program']; ?>
									</a></li>
								<li><a href="how-to-become-money-managers.php">
										<?php echo $lang['how_to_become_money_managers']; ?>
									</a></li>
								<li><a href="white-label.php">
										<?php echo $lang['white_labels']; ?>
									</a></li>
							</ul>
						</li>
						<li class="dropdown-nav">
							<a href="#">
								<?php echo $lang['tools']; ?>
							</a> <i class="fas fa-caret-down"></i>

							<ul class="dropdown">
								<li><a href="calendar.php">
										<?php echo $lang['economic_calendar']; ?>
									</a></li>
								<li><a href="pip-calculator.php">
										<?php echo $lang['pip_calculator']; ?>
									</a></li>
								<!--<li><a href="#"><?php echo $lang['heatmap']; ?></a></li>-->
								<li><a href="dailyfundamental.php">
										<?php echo $lang['fundamental_analysis']; ?>
									</a></li>
								<!--<li><a href="#"><?php echo $lang['technical_analysis']; ?></a></li>-->
								<li><a href="download-file.php">
										<?php echo $lang['download_files']; ?>
									</a></li>

							</ul>
						</li>

						<li class="nav-btn"><a href="contact-us.php"><?php echo $lang['contact_us']; ?></a></li>
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
					<a href="./" class="logo">
						<img src="../assets/images/logo.png" alt="">
					</a>
				</div>
				<div class="col-md-4 text-end">
					<div class="menuWrap">
						<ul class="menu">
							<li class="dropdown-nav">
								<a href="#">About Us</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="about-us.php">About JMI</a></li>
									<li><a href="licenses.php">Licenses and Regulations</a></li>
									<li><a href="risk-management.php">Risk Management</a></li>
									<li><a href="our-culture.php">Our Culture</a></li>
									<li><a href="ourphilosophy.php">Our Philosophy</a></li>
									<li><a href="brokers.php">Advantages of JMI Brokers Platform</a></li>
									<li><a href="contact-us.php">Contact us</a></li>
									<li><a href="policy.php">Conflict Of Interest Policy</a></li>
									<li><a href="faq.php">FAQ's</a></li>
									<li><a href="career.php">Careers</a></li>
									<li><a href="partnership-programs.php">Partnership Programs</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">INVESTMENT CHOICES</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="forex-trading.php">Forex Trading</a></li>
									<li><a href="precious-metal.php">Precious Metals Trading</a></li>
									<li><a href="future.php">Future Energies Trading</a></li>
								    <li><a href="forex-trading.php">Indices Trading</a></li>
									<li><a href="stock-cfds.php">Stocks CFDs</a></li>
									<li><a href="commodities.php">Commodities</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">PLATFORMS</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="forex-platform.php">Forex Platform</a></li>
									<li><a href="metatrader.php">MetaTrader 4</a></li>
									<li><a href="mt4-platform-overview.php">Mt4 Platform Overview</a></li>
									<li><a href="iphone-ipad.php">IPhone and IPad</a></li>
									<li><a href="android.php">Android</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">PARTNERSHIP</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="how-to-become.php">Become Our Partner</a></li>
									<li><a href="business.php">Why to Make Business with JMI</a></li>
									<li><a href="brokers.php">Introducing Brokers</a></li>
									<li><a href="money-manager.php">Money Manager Program</a></li>
									<li><a href="how-to-become-money-managers.php">How To Become a Money Mangers</a></li>
									<li><a href="white-label.php">White Labels</a></li>
								</ul>
							</li>
							<li class="dropdown-nav">
								<a href="#">TOOLS</a> <i class="fas fa-caret-down"></i>

								<ul class="dropdown">
									<li><a href="calendar.php">Economic Calendar</a></li>
									<li><a href="pip-calculator.php">Pip Calculator</a></li>
									<!--<li><a href="#">Heatmap</a></li>-->
									<li><a href="dailyfundamental.php">Fundamental Analysis</a></li>
									<!--<li><a href="#">Technical Analysis</a></li>-->
									<li><a href="download-file.php">Download Files</a></li>
								</ul>
							</li>
							<li class="nav-btn"><a href="contact-us.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="dashboard-subheader-bg">
      <div class="dashboard-subheader-box">
         <div class="position">
            <h5 class="text-white">Control Panel | Account Overview</h5>
            <p class="text-white font-size">Home > Dashboard ><span id="routeText"></span></p>
         </div>
      </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
	var $j = jQuery.noConflict();
   $j(document).ready(function(){
	$j('#logout').on('click',function(e){
		 
	$j.ajax({
         url: '../includes/softwareinclude/logout.php',
		 type:'POST',
		 success: function(response)
		 {
			alert(response);
			window.location.href = "../index.php";
		 },
		 error: function(xhr,status,error){
			console.log("error",error);
		 }

	});
	
});
})
function changeLanguage(selectedLanguage) {
		console.log("selectedLanguage", selectedLanguage);
		// Send an AJAX request to update the user's preferred language on the server
		$j.ajax({
			url: 'http://localhost/jmi-new/jmi_broker/includes/update-language.php', // Replace with the actual path to your PHP script
			type: 'POST',
			data: { language: selectedLanguage },
			success: function (response) {
				// Optionally, you can reload the page or update specific elements on the page
				location.reload(); // Reload the page to reflect the language change
			},
			error: function (xhr, status, error) {
				console.log("Error updating language:", error);
			}
		});
	}
</script>
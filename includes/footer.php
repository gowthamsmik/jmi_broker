<?php $isUserWebsitePage = false; ?>
	<link rel="stylesheet" href=<?php $siteurl."assets/css/phoneCode.css" ?> />
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script> -->
	<style>
		.phonecheckbtn {
			width: "10px";
		}
		.meg_box {
			background-color: #0342ab;
		}
		.hand_box {
			background-color: #DFDFDF;
			margin-right: 5%;
		}
		.msghand_box {
			background-color: #F0F0F0;
		}
		.hand_box p , .meg_box p {
			font-size: 20px !important;
		}
	</style>
	<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

	<script>
		var firebaseConfig = {
			apiKey: "AIzaSyCFVvsn6dt0WsVQljltQiW-ed-NOLRN9J8",
			authDomain: "jmibrokers.com",
			projectId: "jmi-brokers",
			storageBucket: "jmibrokers.com",
			messagingSenderId: "698047998267",
			appId: "1:698047998267:web:3f68d50ce3c78ef29e2f1e",
			measurementId: "G-FTZC0TXY4K"
		};

		firebase.initializeApp(firebaseConfig);
	</script>
	<script type="text/javascript">

		window.onload = function () {
			render();
		};

		function render() {
			//  window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
			//  recaptchaVerifier.render();
			window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
				"recaptcha-container",
				{
					size: "invisible",
					callback: function (response) {
						submitPhoneNumberAuth();
					}
				}
			);
		}

		function phoneSendAuth() {
			var phone = $("#phone").val();
			var phoneCode = $('#dialcode').val();
			var phoneRegex = /^\d{7,18}$/;


			if (!phoneRegex.test(phone)) {
				alert("Invalid phone number. Please enter a valid phone number with 7 to 18 digits.");
				return;
			}

			if (phoneCode === "" || phoneCode === null) {
				alert("Invalid dial code. Please Select a valid numeric dial code based on your country!.");
				return
			}
			var number = '+' + phoneCode + phone;

			console.log("klop", phoneCode, phone, number, "+91" + $("#phone").val());
			const applicationVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container',
				{
					size: "invisible",
					callback: function (response) {
						submitPhoneNumberAuth();
					}
				}
			);
			$.ajax({
				type: "get",
				url: "https://jmibroker.net/checkmobileexist.php?phone=" + phone,

				success: function (result) {
					console.log("return result",result)
					if (result.trim()=="0") {
						firebase.auth().signInWithPhoneNumber(number, applicationVerifier).then(function (confirmationResult) {
							$element = document.getElementById("phoneVerification");
							$element.style.display = "flex";
							window.confirmationResult = confirmationResult;
							coderesult = confirmationResult;
							console.log(coderesult);

							$("#sentSuccess").text("????????? ??????? ??????????.");
							$("#sentSuccess").show();
							$("#successRegsiter").hide();
							$("#send_code").prop('readonly', true);
							$("#number").prop('readonly', true);
							$("#countryCode").prop('readonly', true);
							$("#verificationCode").show();
							$("#verify_code").show();
							$("#error").hide();


						}).catch(function (error) {
							$("#error").text(error.message);
							$("#error").show();
						});

					} else {
						alert("Mobile Number Already Exists!, Try a different number.")
					}


				},
				error: function (result) {
					$("#emailerror").text('An error has occured');
					$("#emailerror").show();
				}
			});


		}

		function codeverify() {
			var code = $("#phoneCode").val();
			console.log("code", code)
			coderesult.confirm(code).then(function (result) {
				var user = result.user;
				$element = document.getElementById("phoneVerification");
				$element.style.display = "none";
				$sendPhone = document.getElementById("SendphoneCode");
				$sendPhone.style.display = "none";
				$phoneVerified = document.getElementById("phoneverifiedLink");
				$phoneVerified.style.display = "flex";
				smsverified = true;

				$("#successRegsiter").text("??? ????????, ?? ?????? ?????????????????? ??????.");
				$("#successRegsiter").show();
				$("#sentSuccess").hide();
				$("#number").prop('readonly', true);
				$("button#register").prop('disabled', false);
				$("#verify_code").prop('readonly', true);
				$("#verificationCode").prop('readonly', true);

			}).catch(function (error) {
				$("#error").text(error.message);
				$("#error").show();
				alert("Invalid OTP!")
			});
		}


		function emailSendAuth() {
			var email = $("#email").val();
			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        //e.preventDefault();
			if (!emailRegex.test(email)) {
				alert('Please enter a valid email address.');
				return;
			}
			$.ajax({
				type: "get",
				url: "https://jmibroker.net/verificationemail.php?email=" + email,

				success: function (result) {
					console.log("result email", result)
					if (result == "true") {
						console.log("result1 email", result)
						$element = document.getElementById("emailVerification");
						$element.style.display = "block";
						$("#emailsentSuccess").text("Email Sent Successfully.");
						$("#emailsentSuccess").show();
						$("#emailsuccessRegsiter").hide(); 
						$("#emailverificationCode").show();
						$("#email_verify_code").show();
						$("#emailerror").hide();
					}
					 else if (result == "false") {
						//alert("Invalid Verification Code for Email")
						console.log("Email verification table is missing");
						$("#emailerror").text('Invalid Code');
						$("#emailerror").show(); 
					} 
					else if (result == "Available") {
						alert("Email Already Registered!, Try to Login!")
					}

				},
				error: function (result) {
					$("#emailerror").text('An error has occured');
					$("#emailerror").show();
				}
			});
		}

		function emailcodeverify() {
			//var emailverified = false;
			var emailcode = $("#emailcode").val();
			var email = $("#email").val();
			//e.preventDefault();
			console.log("lkop", email, emailcode);
			$.ajax({
				type: "get",
				url: "verificationemailcode.php/?email=" + email + "&emailcode=" + emailcode,
				success: function (result) {
					console.log("res..", result)
					if (result == "true") {
						$element = document.getElementById("emailVerification");
						$element.style.display = "none";
						$emailverifiedLink = document.getElementById("emailverifiedLink");
						$emailverifiedLink.style.display = "flex";
						$sendEmail = document.getElementById("SencodeEmail");
						$sendEmail.style.display = "none";
						emailverified = true;

						$("#emailsuccessRegsiter").text("Code Verified, you can resume now.");
						$("#emailsuccessRegsiter").show();
						$("#emailsentSuccess").hide();
						$("#emailverify_code").prop('disabled', true);
						$("#emailverificationCode").prop('readonly', true);
						console.log("success", result)

					} else if (result == "false") {
						$("#emailerror").text('Invalid Code');
						$("#emailerror").show();
						alert("Invalid Email Verification Code!")
						console.log("failed", result)
					}
				},
				error: function (result) {
					$("#emailerror").text('An error has occured');
					$("#emailerror").show();
				}
			});



		}



		$.getJSON('https://ipinfo.io/json', function (result) {
			$('option[data-countryCode="' + result.country + '"]').prop('selected', true);
		});


		$('select#countryCode option').each(function () {
			_val = $(this).val();
			_attVal = $(this).attr('data-countryCode');
			$(this).text(_attVal + '(' + _val + ')');
		});
		$(function () {
			// choose target dropdown
			var select = $('select#countryCode');
			select.html(select.find('option').sort(function (x, y) {
				// to change to descending order switch "<" for ">"
				return $(x).text() > $(y).text() ? 1 : -1;
			}));

			// select default item after sorting (first item)
			// $('select').get(0).selectedIndex = 0;
		});
	</script>

	<div class="d-flex gap-5 msghand_box justify-content-end">
		<div class="meg_box p-3 rounded-top-4 text-center">
			<img src="../assets/images/svg/msg.svg" alt="404">
			<p class="text-white">Live Chat</p>
		</div>
		<a href="contact-us.php"><div class="hand_box p-3 rounded-top-4 text-center text-dark">
			<img src="../assets/images/svg/hand.svg" alt="404">
			<p>Contact Us</p>
		</div></a>
	</div>
	<footer>
		<div class="container">
			<?php if (!$isUserWebsitePage): ?>
				<div class="footer-top">
					<div class="row">
						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['tools2'] ?></li>
									<li><a href="mt4-platform-overview.php"><?php echo $lang['mt4'] ?></a></li>
									<li><a href="calendar.php"><?php echo $lang['economicCalendar'] ?></a></li>
									<li><a href="pip-calculator.php"><?php echo $lang['pipCalculator'] ?></a></li>
									<li><a href="#"><?php echo $lang['heatmap'] ?></a></li>
									<li><a href="#"><?php echo $lang['technicalAnalysis'] ?></a></li>
									<li><a href="#"><?php echo $lang['fundamentalAnalysis'] ?></a></li>
								</ul>
							</div>
						</div>

						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['investmentChoices'] ?></li>
									<li><a href="forex-trading.php"><?php echo $lang['forexTrading'] ?></a></li>
									<li><a href="precious-metal.php"><?php echo $lang['preciousMetalsTrading'] ?></a></li>
									<li><a href="future.php"><?php echo $lang['futureEnergiesTrading'] ?></a></li>
									<li><a href="stock-cfds.php"><?php echo $lang['stocksCfds'] ?></a></li>
									<li><a href="commodities.php"><?php echo $lang['commodities1'] ?></a></li>
								</ul>
							</div>
						</div>

						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['partnership'] ?></li>
									<li><a href="how-to-become.php"><?php echo $lang['becomeOurPartner'] ?></a></li>
									<li><a href="business.php">Why to Make Business with JMI</a></li>
									<li><a href="brokers.php"><?php echo $lang['introducingBrokers'] ?></a></li>
									<li><a href="money-manager.php"><?php echo $lang['moneyManagerProgram'] ?></a></li>
									<li><a href="how-to-become-money-managers.php"><?php echo $lang['howToBecomeAMoneyManager'] ?></a></li>
									<li><a href="white-label.php"><?php echo $lang['whiteLabels'] ?></a></li>
								</ul>
							</div>
						</div>

						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['about'] ?></li>
									<li><a href="about-us.php"><?php echo $lang['aboutJMI'] ?></a></li>
									<li><a href="licenses.php"><?php echo $lang['licensesAndRegulations'] ?></a></li>
									<li><a href="brokers.php"><?php echo $lang['advantagesOfJMIBrokersPlatform'] ?></a></li>
									<li><a href="contact-us.php"><?php echo $lang['contactUs'] ?></a></li>
									<li><a href="career.php"><?php echo $lang['careers1'] ?></a></li>
								</ul>
							</div>
						</div>

						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['jmiBrokers'] ?></li>
								<li><a href="#"><?php echo $lang['whoWeAre'] ?></a></li>
								<li><a href="policy.php"><?php echo $lang['ourPolicy'] ?></a></li>
								<li><a href="contact-us.php"><?php echo $lang['contactUs1'] ?></a></li>
								</ul>
							</div>
						</div>

						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['supportsCenter'] ?></li>
								<li><a href="faq.php"><?php echo $lang['faqs1'] ?></a></li>
								<li><a href="#"><?php echo $lang['ourBlogs'] ?></a></li>
								</ul>
							</div>
						</div>

						<div class="col">
							<div class="footerT-cont">
								<ul>
									<li class="tx-gd"><?php echo $lang['tradingAccounts'] ?></li>
								<li><a href="forex-trading.php"><?php echo $lang['everyTrader'] ?></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="footer-sponser">
						<div class="sponser1">
							<div class="spon1-cont1">
								<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 1', 'Logos'); ?> alt="">
							</div>
							<div class="spon1-cont2">
								<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 2', 'Logos'); ?> alt="">
								<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 3', 'Logos'); ?> alt="">
							</div>
						</div>

						<div class="sponser2">
							<ul>
								<li>
									<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 4', 'Logos'); ?> alt="">
								</li>

								<li>
									<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 5', 'Logos'); ?> alt="">
								</li>

								<li>
									<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 6', 'Logos'); ?> alt="">
								</li>

								<li>
									<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Logo 7', 'Logos'); ?> alt="">
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="footer-middle">
				<div class="middle-cont">
					<div class="mn-hd">
						<div class="cont-title">
							<span>
								<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Image 1', 'Bottom'); ?>
									alt="">
							</span>
							<p class="tx-grey-new3 p-fs7">
								<?php echo getSectionMetaByIDKeyGroup('1', 'Heading 1', 'Bottom'); ?>
							</p>
						</div>
						<p class="tx-blue-new p-fs6 pad-sec-foot line-h">
							<?php echo getSectionMetaByIDKeyGroup('1', 'Description 1', 'Bottom'); ?>
						</p>
					</div>

					<div class="mn-hd">
						<div class="cont-title">
							<span>
								<img src=<?php echo $siteurl."cms/"?><?php echo getSectionMetaByIDKeyGroup('1', 'Image 2', 'Bottom'); ?>
									alt="">
							</span>
							<p class="tx-grey-new3 p-fs7">
								<?php echo getSectionMetaByIDKeyGroup('1', 'Heading 2', 'Bottom'); ?>
							</p>
						</div>
						<p class="tx-blue-new p-fs6 line-h">
							<?php echo getSectionMetaByIDKeyGroup('1', 'Description 1', 'Bottom'); ?>
						</p>
					</div>
				</div>
			</div>

		</div>
		<div class="copyright text-center">
			<div class="container">
				<p class="tx-white p-fs5">
					<?php echo getSectionMetaByIDKeyGroup('1', 'Copyright', 'Bottom'); ?>
				</p>
			</div>
		</div>

	</footer>


	<div class="overlay">
	</div>

	<div class="loginpopup-waper">
		<div class="loginpopup">
			<div class="myPopup">
				<div class="closePop">X</div>
				<div class="popupcont">
					<h6><?php echo $lang['login'] ?></h6>

					<form action="#">
						<div class="popupfeild">
							<label for=""><?php echo $lang['user_name_placeholder'] ?></label>
							<input type="text" name='loginUserorPhone' placeholder="<?php echo $lang['user_name_placeholder'] ?>">
						</div>

						<div class="popupfeild">
							<label for=""><?php echo $lang['password_placeholder'] ?></label>
							<input name='loginPassword' type="password" placeholder="********">
						</div>

						<div class="loginforgot">
							<label for="remenber">
								<input type="checkbox" id="remenber">
								<?php echo $lang['remember_me'] ?>
							</label>

							<a href="#"><?php echo $lang['forgot_password'] ?></a>
						</div>

						<div class="popupbutton" id='loginButton'>
							<button><?php echo $lang['login_now'] ?></button>
						</div>

						<div class="popupsingUp">
							<span><?php echo $lang['no_account'] ?></span> <a href="#"><?php echo $lang['sign_up'] ?></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="signUppopup-waper">
		<div class="signUppopup">
			<div class="myPopup">
				<div class="closePop" id='registerClose'>X</div>
				<div class="popupcont">
					<h6><?php echo $lang['registration'] ?></h6>
					<p><?php echo $lang['fill_form'] ?></p>

					<form action="#" method="post" onsubmit="return validate()" id="registerform">
						<div id="recaptcha-container"></div>
						<div class="row justify-content-center">
							<div class="col-md-4">
								<div class="popupfeild">
									<label for=""><?php echo $lang['full_name'] ?></label>
									<input name='fullName' type="text" placeholder="Input your first name in here">
								</div>
							</div>

							<div class="col-md-4">
								<div class="popupfeild">
									<label for=""><?php echo $lang['gender'] ?></label>
									<select name="gender" id="">
										<option value="0" selected disabled><?php echo $lang['select'] ?></option>
										<option value="1"><?php echo $lang['male'] ?></option>
										<option value="1"><?php echo $lang['female'] ?></option>
										<option value="1"><?php echo $lang['other'] ?></option>
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<div class="popupfeild">
									<label for=""><?php echo $lang['email_address'] ?></label>
									<input name='email' type="email" placeholder="<?php echo $lang['type_email'] ?>" class="pdmoreinput"
										id="email" oninput="changeStyle('email')">
									<a href="#" onclick="emailSendAuth();" id="SencodeEmail"><?php echo $lang['send_now'] ?></a>
									<a href="#" id="emailverifiedLink"
										style="background-color:green;color:white;display:none"><?php echo $lang['verified1'] ?></a>

								</div>
								<div class="popupfeild" id="emailVerification" style="display:none">
									<input name='emailVerification' type="text"
										placeholder="<?php echo $lang['enter_email_verification_code'] ?>" class="pdmoreinput" id="emailcode">
									<a href="#" onclick="emailcodeverify();"><?php echo $lang['verify'] ?></a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="popupfeild">
									<label for=""><?php echo $lang['user_name1'] ?></label>
									<input name='userName' type="text" placeholder="<?php echo $lang['type_user_name'] ?>">
								</div>
							</div>


							<div class="col-md-8">
								<div class="popupfeild">
									<label for="phone"><?php echo $lang['phone_number1'] ?></label>
									<div class="row">
										<div class="col-sm-6">
											<select class="form-select" style="width: 100%;" name="country"
												id='dialcode'>
												<option value="0" selected disabled><?php echo $lang['select_dial_code1'] ?></option>
												<?php

												$countriesJson = file_get_contents('assets/json/countries.json');
												if ($countriesJson === false) {
													echo "<option value=\"\">Error loading countries</option>";
												} else {
													$countries = json_decode($countriesJson, true);
													if ($countries === null) {
														echo "<option value=\"\">Error decoding countries</option>";
													} else {
														foreach ($countries as $country) {
															echo "<option value=\"{$country['code']}\">{$country['country']}(+{$country['code']})</option>";
														}
													}
												}
												?>
											</select>
										</div>
										<div class="col-sm-6">
											<div class="popupfeild">
												<input type="tel" id="phone" name="phone" class="pdmoreinput"
													placeholder="<?php echo $lang['type_phone_number'] ?>" oninput="changeStyle(' phone')">
												<!-- <a href="#" onclick="phoneSendAuth();" id="SendphoneCode"><?php/* echo $lang['send_now1'] */?></a>
												<a href="#" id="phoneverifiedLink"
													style="background-color:green;color:white;display:none"><?php /* echo $lang['verified1'] */ ?></a> -->

											</div>
											<div class="popupfeild" style="display:none" id="phoneVerification">
												<input type="tel" name="phone" class="pdmoreinput" id="phoneCode"
													placeholder="<?php echo $lang['enter_otp'] ?>">
												<a href="#" onclick="codeverify();"><?php echo $lang['verify_otp1'] ?></a>
											</div>

											<!-- <div id="phone-dropdown-container"></div> -->
										</div>
									</div>
								</div>
							</div>


							<div class="col-md-12">
								<div class="popupfeild d-flex align-items-end h-100">
									<ul>
										<li class="done">
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path
														d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986"
														stroke="url(#paint0_linear_455_26954)" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round" />
													<path d="M22 4L12 14.01L9 11.01"
														stroke="url(#paint1_linear_455_26954)" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round" />
													<defs>
														<linearGradient id="paint0_linear_455_26954" x1="1.10714"
															y1="1.99414" x2="24.0072" y2="4.31646"
															gradientUnits="userSpaceOnUse">
															<stop stop-color="#CBEFBC" />
															<stop offset="1" stop-color="#C4DFF7" />
														</linearGradient>
														<linearGradient id="paint1_linear_455_26954" x1="8.41964" y1="4"
															x2="23.2014" y2="5.94679" gradientUnits="userSpaceOnUse">
															<stop stop-color="#CBEFBC" />
															<stop offset="1" stop-color="#C4DFF7" />
														</linearGradient>
													</defs>
												</svg>
											</div>
											<span><?php echo $lang['mini_8_characters'] ?></span>
										</li>

										<li>
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path
														d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986"
														stroke="#8FABE3" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M22 4L12 14.01L9 11.01" stroke="#8FABE3" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<span><?php echo $lang['1_number'] ?></span>
										</li>

										<li>
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path
														d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986"
														stroke="#8FABE3" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M22 4L12 14.01L9 11.01" stroke="#8FABE3" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<span><?php echo $lang['special_character1'] ?></span>
										</li>

										<li>
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path
														d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986"
														stroke="#8FABE3" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M22 4L12 14.01L9 11.01" stroke="#8FABE3" stroke-width="2"
														stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<span>	<?php echo $lang['uppercase_letter1'] ?></span>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-md-4">
								<div class="popupfeild">
									<label for=""><?php echo $lang['password'] ?></label>
									<input name='password' type="password" placeholder="<?php echo $lang['password1'] ?>">
								</div>
							</div>

							<div class="col-md-4 ">
								<div class="popupfeild">
									<label for=""></label>
									<input class="mt-4" type="password" name="confirmpassword"
										placeholder="<?php echo $lang['confirm_password2'] ?>">
								</div>
							</div>

							<div class="col-md-4">
								<div class="popupbutton d-flex align-items-end h-100">
									<button id='registerButton'><?php echo $lang['register_now1'] ?> </button>
								</div>
							</div>

							<div class="col-md-4">
								<div class="googlebtn otherbtn">
									<button>
										<div class="icon">
											<img src=<?php echo $siteurl."assets/images/google-icon.png" ?> alt="">
										</div>
										<?php echo $lang['sign_in_with_google1'] ?>
									</button>
								</div>
							</div>
							<div class="col-md-4">
								<div class="facebookbtn otherbtn">
									<button>
										<div class="icon">
											<img src=<?php echo $siteurl."assets/images/facebook-icon.png" ?> alt="">
										</div>
										<?php echo $lang['sign_in_with_facebook1'] ?>
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<!-- Add this script after including jQuery -->
	<script>


		// var input = document.querySelector("#phone");
		// intlTelInput(input, {
		// 	initialCountry: "in",
		// 	separateDialCode: true, // Optional: Show dial code separately
		// 	utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",

		// });

		function validate() {
			//if (emailverified && smsverified)
			if (emailverified) {
				return true;
			}
			return false;
		}


		$(document).ready(function () {

			//Register Ajax
			emailverified = false;
			smsverified = false;
			$('#registerClose').on('click', function (e) {
				console.log("asda")
				$("#SendphoneCode").css("display", 'flex');
				$('#phoneverifiedLink').css("display", 'none');
				smsverified = false;
				$("#SencodeEmail").css("display", 'flex');
				$('#emailverifiedLink').css("display", 'none');
				emailverified = false;
				$('#phoneVerification').css("display", "none");
				$('#emailVerification').css("display", "none");

			})

			$('#registerButton ').on('click', function (e) {
				console.log("juileb")
				//if (emailverified && smsverified)
				if (emailverified) {
					e.preventDefault(); // Prevent the default form submission
					// window.location.href = "home.php";
					// Perform your validation here
					var userName = $('input[name="userName"]').val();
					var password = $('input[name="password"]').val();
					var email = $('input[name="email"]').val();
					var gender = $('select[name="gender"]').val();
					var fullName = $('input[name="fullName"]').val();
					var phone = $('input[name="phone"]').val();
					var confirmPassword = $('input[name="confirmpassword"]').val();
					var country = $('select[name="country"]').val();

					console.log("poil", userName, password, email, gender, fullName, phone, confirmPassword, country)
					var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

					// Regular expression for a valid phone number (assuming a simple format)
					var phoneRegex = /^\d{7,18}$/;
					var passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z]).{8,}$/;


					// Example: Check if the fields are not empty
					if (!userName || !password || !email || !gender || !fullName || !phone || !country) {
						alert('Please fill in all fields.');
						return;
					}
					if (!emailRegex.test(email)) {
						alert('Please enter a valid email address.');
						return;
					}
					if (!phoneRegex.test(phone)) {
						alert('Please enter a valid phone number.');
						return;
					}
					if (!passwordRegex.test(password)) {
						alert('Password must be at least 8 characters long and include at least one number, one special character (!@#$%^&*), and one uppercase letter.');
						return;
					}
					if (password != confirmPassword) {
						alert('Password Doesnt Match with confirm Password');
						return;
					}

					$.ajax({
						url: 'includes/softwareinclude/register.php',
						type: 'POST',
						data: {
							email: email,
							password: password,
							name: fullName,
							gender: gender,
							userName: userName,
							phone: phone,
							dialCode: country
							// Add other data fields as needed
						},
						success: function (response) {
							alert(response);
							if (response == "User successfully registered!") {
								console.log("Success", response);
								$('.signUppopup-waper').fadeOut();
								$('.overlay').fadeOut();
								$('#registerform').trigger("reset");
								emailverified = false;
								smsverified = false;
								$("#SencodeEmail").css("display", 'flex');
								$("#SendphoneCode").css("display", 'flex');
								$('#phoneverifiedLink').css("display", 'none');
								$('#emailverifiedLink').css("display", 'none');


							} else (
								console.log('errorrrt', response)
							)
						},
						error: function (xhr, status, error) {
							console.log("terter", xhr.responseText);
							// Handle error response
						}
					});
				}
				else {
					alert("email or sms are not verified");
				}
			});
			//Login Ajax
			$('#loginButton').on('click', function (e) {
				console.log("juileb")
				e.preventDefault(); // Prevent the default form submission

				var userNameorPhone = $('input[name="loginUserorPhone"]').val();
				var password = $('input[name="loginPassword"]').val();

				console.log("poil", userNameorPhone, password)


				// Example: Check if the fields are not empty
				if (userNameorPhone.trim() === '' || password.trim() === '') {
					alert('Please fill in all fields.');
					return;
				}


				// If validation passes, you can proceed with further actions or AJAX call
				console.log("Validation successful. Proceed with further actions or AJAX call.");


				// If validation passes, make the AJAX call
				$.ajax({
					url: 'includes/softwareinclude/login.php',
					type: 'POST',
					data: {
						userNameorPhone: userNameorPhone,
						password: password,
					},
					success: function (response) {
						alert(response);

						console.log("Success", response);
						if (response == 'Login Successful') {
							$('.loginpopup-waper').fadeOut();
							$('.overlay').fadeOut();
							window.location.href = 'cpanel/account-overview.php';
						}
					},
					error: function (xhr, status, error) {
						console.log("terter", xhr.responseText);
						// Handle error response
					}
				});
			});
		});
		function changeStyle(type) {
			console.log("phone changed");
			if (type == 'phone') {

				$("#SendphoneCode").css("display", 'flex');
				$('#phoneverifiedLink').css("display", 'none');
				smsverified = false;
			} else {
				$("#SencodeEmail").css("display", 'flex');
				$('#emailverifiedLink').css("display", 'none');
				emailverified = false;
			}
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
        window.addEventListener('resize', getScreenSize);
   </script>

</html>
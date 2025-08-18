<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
	<meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	<!-- Font Awesome 6 -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<!-- Page Title Here -->
	<title>Ecovillages</title>



	<link href="{{asset('')}}assets/css/style1.css" rel="stylesheet">

</head>

<body class="vh-100" data-typography="cairo" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sidebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">
	<div class="authincation h-100">
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Fogot Password</h3>
							<p>Sign in to your account to start using Ecovillages</p>
						</div>


						<form action="{{ route('submitResetPassword') }}" method="post">
							@csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>

							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Verification Code</label>
								<div class="input-group">
									<input type="text" class="form-control" name="code" placeholder="Enter Code" required>
									<div class="">
										<!-- Send Button with Countdown -->

										<button type="button" style="width:40px;height:56px;background-color: #212130;color:white;border-radius: 0 1rem 1rem 0;border:1px solid #31303c;" class="btn" id="sendButton" onclick="sendVerificationCode()">
											<span id="buttonLabel" style="margin: -12px;font-size:15px;">Send</span>
											<span id="countdownTimer" style="display: none;margin: -12px;font-size:18px;"></span>
										</button>

									</div>

								</div>
							</div>


							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">New Password</label>
								<input type="password" name="password" class="form-control" id="newPassword" required>
								<span class="show-pass eye" onclick="togglePassword('newPassword', 'eye1', 'eyeSlash1')">
									<i class="fa fa-eye-slash" id="eyeSlash1" style="display: none;"></i>
									<i class="fa fa-eye" id="eye1"></i>
								</span>
							</div>

							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Confirm Password</label>
								<input type="password" name="password_confirmation" class="form-control" id="confirmPassword" required>
								<span class="show-pass eye" onclick="togglePassword('confirmPassword', 'eye2', 'eyeSlash2')">
									<i class="fa fa-eye-slash" id="eyeSlash2" style="display: none;"></i>
									<i class="fa fa-eye" id="eye2"></i>
								</span>
							</div>

							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required>
										<label class="form-check-label mt-1" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="{{ route('login') }}" class="btn-link text-primary">Sign in?</a>
								</div>
							</div>

							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block"style="background-color:rgb(73, 175, 69);">Reset Password</button>
							</div>
						</form>

					</div>
				</div>
				<!-- <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100" data-theme-version="dark">
						<div class="login-content">
							<a href="index.html"><img src="{{asset('')}}assets/images/logo-full.png" class="mb-3" alt=""></a>

							<p style="color: #fff;">Your true value is determined by how much more you give in value than you take in payment. ...</p>
						</div>
						<div class="login-media text-center"style="filter: invert(84%) sepia(88%) saturate(747%) hue-rotate(85deg) brightness(60%) contrast(139%)
">
							<img src="{{asset('')}}assets/images/login.png" alt="">
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	@include('partials.notify')

	<script>
		function sendVerificationCode() {
			const email = document.querySelector('input[name="email"]').value;
			const sendButton = document.getElementById('sendButton');
			const buttonLabel = document.getElementById('buttonLabel');
			const countdownTimer = document.getElementById('countdownTimer');

			if (!email) {
				alert("Please enter your email first.");
				return;
			}

			// Disable the button to prevent multiple clicks
			sendButton.disabled = true;

			// Hide the "Send" label and show the countdown timer
			buttonLabel.style.display = 'none';
			countdownTimer.style.display = 'inline';

			// Initialize countdown
			let countdown = 60;
			countdownTimer.textContent = `${countdown}s`;

			const timerInterval = setInterval(() => {
				countdown--;
				countdownTimer.textContent = `${countdown}s`;

				if (countdown <= 0) {
					clearInterval(timerInterval);
					countdownTimer.style.display = 'none';
					buttonLabel.style.display = 'inline';
					sendButton.disabled = false;
				}
			}, 1000);

			// Proceed with sending the verification code
			fetch("{{ route('send-reset-code') }}", {
					method: "POST",
					headers: {
						"Content-Type": "application/json",
						"X-CSRF-TOKEN": "{{ csrf_token() }}"
					},
					body: JSON.stringify({
						email: email
					})
				})
				.then(res => res.json())
				.then(data => {
					alert(data.message || "Code sent successfully.");
				})
				.catch(err => {
					alert("Something went wrong.");
					console.error(err);
				});
		}
	</script>

	<script>
		function togglePassword() {
			const input = document.getElementById("passwordInput");
			const closeeyeIcon = document.getElementById("closeeyeIcon");
			const eyeIcon = document.getElementById("eyeIcon");

			if (input.type === "password") {
				input.type = "text";
				closeeyeIcon.style.display = "inline-block"; // Show the closed eye
				eyeIcon.style.display = "none"; // Hide the open eye
			} else {
				input.type = "password";
				closeeyeIcon.style.display = "none"; // Hide the closed eye
				eyeIcon.style.display = "inline-block"; // Show the open eye
			}
		}
	</script>
	<script src="vendor/global/global.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>

</body>

</html>
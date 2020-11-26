<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Virtual Indo-Kenya Agro and Food Processing Expo</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="agro-rocessing, agribusiness, virtual expo, milk processing, access to markets, agrohubexpo, agriculture" />
	<!-- //Meta tag Keywords -->

	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- //google fonts -->

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- //Style-CSS -->

	<link href="css/font-awesome.css" rel="stylesheet"><!-- //font-awesome-icons -->

</head>

<body>
	<!-- coming soon -->
	<section class="container">
		<div class="coming-page-info">
			<div class="wrapper">
				<div class="logo-center">
					<a class="logo" href="index.html">
						<img src="images/expo-logo-light-vert.svg" width="250"/>
					</a>
				</div>
				<!-- if logo is image enable this
                    <a class="logo" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> -->

				<div class="coming-block">
					<h1>October 16-18, 2020</h1>
					<h4 class="">Online Virtual Expo</h4>
					<!-- countdown -->
					<div class="countdown">
						<div class="countdown__days">
							<div class="number"></div>
							<span class>Days</span>
						</div>

						<div class="countdown__hours">
							<div class="number"></div>
							<span class>Hours</span>
						</div>

						<div class="countdown__minutes">
							<div class="number"></div>
							<span class>Minutes</span>
						</div>

						<div class="countdown__seconds">
							<div class="number"></div>
							<span class>Seconds</span>
						</div>
					</div>
					<!-- countdown -->

					<div class="contact-button">
						<a href="mailto:info@agrohubexpo.com" class="btn">Contact Us</a>
					</div>
				</div>
				<!-- copyright -->
				<div class="copyright-footer">
					<div class="mwys-copy-right">
						<p>© 2020 The AgroHub Africa.</p>
					</div>
				</div>
				<!-- //copyright -->
			</div>
		</div>

		<!-- js -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- Script for counter -->
		<script>
			(() => {
				// Specify the deadline date
				const deadlineDate = new Date('October 16, 2020 23:59:59').getTime();

				// Cache all countdown boxes into consts
				const countdownDays = document.querySelector('.countdown__days .number');
				const countdownHours = document.querySelector('.countdown__hours .number');
				const countdownMinutes = document.querySelector('.countdown__minutes .number');
				const countdownSeconds = document.querySelector('.countdown__seconds .number');

				// Update the count down every 1 second (1000 milliseconds)
				setInterval(() => {
					// Get current date and time
					const currentDate = new Date().getTime();

					// Calculate the distance between current date and time and the deadline date and time
					const distance = deadlineDate - currentDate;

					// Calculations the data for remaining days, hours, minutes and seconds
					const days = Math.floor(distance / (1000 * 60 * 60 * 24));
					const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
					const seconds = Math.floor((distance % (1000 * 60)) / 1000);

					// Insert the result data into individual countdown boxes
					countdownDays.innerHTML = days;
					countdownHours.innerHTML = hours;
					countdownMinutes.innerHTML = minutes;
					countdownSeconds.innerHTML = seconds;
				}, 1000);
			})();
		</script>
		<!-- //Script for counter -->

	</section>
	<!-- //coming soon -->

</body>

</html>
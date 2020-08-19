<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ejobrien315@gmail.com";
    $email_subject = "testing testing";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>

<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Susan O'Brien's Tutoring</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Susan O'Brien's Tutoring</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="#">Home</a></li>
								<li><a href="#one">About Me</a></li>
								<li><a href="#five">Professional Services</a></li>
								<li><a href="#footer">Contact Me</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<!-- <div class="logo"><span class="icon fa-gem"></span></div> -->
							<h2>Susan O'Brien's Tutoring</h2>
							<p><b>Meeting your child's educational needs in Sarasota and Bradenton, FL</b></p>
							<p>My mission is to provide a quality tutoring that will support your child's learning and will empower him/her to achieve success in a safe, welcoming, and caring environment.</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="images/Susan.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">About Me</h2>
										<p>Hi, I am Susan, I have been in education for over 20 years and would love to tutor your child.  I have taught elementary, middle school English, and high school English.  I am certified in Exceptional Student Education (ESE) and English to Speakers of Other Languages (ESOL).  I can offer your child individualized instruction based on evaluation/assessments.  I will design my instruction to fit the needs of your child.  Having been an instructional specialist, I have access to the curriculum that your child is using.</p>
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="images/classroom4.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Professional Degrees and Achievements</h2>
										
											<p>	Leader Florida School District Administrator (SDA) Certification<br>
												Florida School District Leader (SDL) Certification<br>
												Master of Literacy from Syracuse University<br>
												Bachelor of Science - SUNY Cortland K-12 Education, English concentration<br>
												Secondary English Certification<br>
												English Extension Certification Grades 7-12<br>
												Elementary K-6 Certification<br>
												Awarded the Post Standard Golden Apple Award for teaching 2011<br>
												Awarded Teacher of the Year for 2003<br>
											</p>									
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/classrom2.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">Areas of Expertise</h2>
										<p><b>My services include:</b></p>
										<p><b>Grades K-5th</b> tutoring in reading, writing, and math. I will specifically focus on FSA standards to assist your child in being successful on state assessments.
										</p>
										<p><b>Grades 6 -12th</b> tutoring in reading and English with a focus on FSA English and SAT.</p>
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="images/classroom1.png" alt="" /></a>
									<div class="content">
										<h2 class="major">Professional History</h2>
										<p>Manatee County School District<br>
											Instructional Specialist Elementary K-6<br>
											August 2019 – current<br>
											<br>
											Lakewood Ranch High School District of Manatee County<br>
											Dean of Students<br>
											August 2017 – August 2019<br>
											<br>
											Manatee School District<br>
											Reading Coach & English Department Chair<br>
											<br>
											Assistant Principal at West Genesee High School (suburban)<br>
											Administrative Internship at Onondaga Central School District NY<br>
											<br>
											Onondaga Central School District (rural)<br>
											Administrative Internship at West Genesee High School<br>
											Via BOCES Summer School<br>
											<br>
											Chittenango Central School District (rural)<br>
											English Department Chair Person and 7th grade English teacher<br>
											<br>
											Blodgett School, Syracuse City Schools, NY (urban)<br>
											Elementary teacher grade 4 & 7th English<br>
											<br>
											West Genesee Central Schools (Suburban school)<br>
											Adult Education Director</p>
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Five -->
							<section id="five" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Professional Services</h2>
									<p></p>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/classroom3.jpg" alt="" /></a>
											<h3 class="major">E-Learning Assistance</h3>
											<p>Does your child need help with maneuvering their online coursework and uploading materials?  I am fully trained in Schoology and can show your child how to locate coursework, upload materials, and use the platform to its fullest.</p>
											<!-- <a href="#" class="special">Learn more</a> -->
										</article>
										<!-- <article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>.</p>
											<a href="#" class="special">Learn more</a>
										</article> -->
										<!-- <article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3 class="major">Ante fermentum</h3>
											<p>.</p>
											<a href="#" class="special">Learn more</a>
										</article> -->
										<article>
											<a href="#" class="image"><img src="images/cafe1.jpg" alt="" /></a>
											<h3 class="major">Preferred Methods of Instruction</h3>
											<p>The best option is using my Zoom channel for no-contact instruction. Zoom is a web-service with screen-sharing capabilities which has been utilized by the Manatee School District, among many others.<br>
												Also, provided safety precautions are considered, I may be available to tutor in a public space, such as a library or cafe.<br>
											</p>
											<p><b>Currently, I am not making home visits due to the COVID-19 epidemic.</b></p>
											<!-- <a href="#" class="special">Learn more</a> -->
										</article>
									</section>
									<ul class="actions">
										<!-- <li><a href="#" class="button">Browse All</a></li> -->
									</ul>
								</div>
							</section>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							<p>Please contact me with any inquiries. I will be happy to discuss my credentials and our tutoring options.</p>
							<form method="post" action="">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="Name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="Email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="Message" id="message" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									Available for instruction in:<br />
									Sarasota, FL Greater Area<br />
									Bradenton, FL Greater Area
								</li>
								<li class="icon solid fa-phone">(941) 713 - 6763</li>
								<li class="icon solid fa-envelope"><a href="#">obriens3000@gmail.com</a></li>
								<li class="icon solid fa-gem">Masters in Reading<br>
									Masters in Education Administration<br>
									Bachelor of Science in Education grades K-12 and a minor in English<br>
								</li>
								<!-- <li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li> -->
								<!-- <li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li> -->
								<!-- <li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li> -->
							</ul>
							<ul class="copyright">
								<!-- <li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li> -->
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
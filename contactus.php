<!DOCTYPE html>
<html>
	<head>
		<link type= "text/css" rel="stylesheet" href="stylesheet.css"/>
		<link rel="shortcut icon" href="favicon.ico">
		<title>TJ Acupuncture Clinic</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Home of TJ Acupuncture, acupuncture you can trust. Serving the Portland, Oregon metro area.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class="all">
			<div class="inner">
				<div class="tnav">
					<div class="tnav1">
						<a href="index.html">HOME</a>
						<a href="services.html">SERVICES</a>
						<a href="about.html">ABOUT</a>
						<a href="faq.html">FAQ</a>
						<a href="location.html">LOCATION</a>
						<a href="gallery.html">GALLERY</a>
						<a href="contactus.html">CONTACT US</a>
					</div>
				</div>
				<div class="title">
					<div class="t-container">
						<img src="logo.png" height="206px" width="210px" id="logo"></img>
						<h3>Welcome to</h3>
						<h1>TJ Acupuncture</h1>
						<p>Acupuncture and Herbal Clinic</p>
					</div>
				</div>
				
				<div class="mission">
					<div id="m-container">
						<h3>Contact US</h3>
						<p>Have any questions?</p>
						<p>Feel free to email us at <a href="mailto:taiping@tjacupuncture.com" style="color:white;">taiping@tjacupuncture.com</a></p>
						<p>Call us at 503-475-9657</p>
						<p>You may also contact us using this website form.</p>
						<p>Please include your email in the provided "from" box so we can get back to you.</p>
						<p>You may also include your phone number in the comments if you would like to be reached by phone.</p>
						<div class="form" style="margin-left: auto; margin-right: auto;">
							<?php
							function spamcheck($field) {
							  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
							  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
							    return TRUE;
							  } else {
							    return FALSE;
							  }
							}
							?>
							<h2>Feedback Form</h2>
							<?php
							if (!isset($_POST["submit"])) {
							  ?>
							  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							  From: <br><input type="text" name="from"><br>
							  Subject: <br><input type="text" name="subject"><br>
							  Message: <br><textarea rows="10" cols="40" name="message"></textarea><br>
							  <input type="submit" name="submit" value="Send Message">
							  </form>
							  <?php 
							} else { 
							  if (isset($_POST["from"])) {
							    $mailcheck = spamcheck($_POST["from"]);
							    if ($mailcheck==FALSE) {
							      echo "Invalid input";
							    } else {
							      $from = $_POST["from"];
							      $subject = $_POST["subject"];
							      $message = $_POST["message"];
							      $message = wordwrap($message, 70);
							      mail("jimmy.j.jia@gmail.com",$subject,$message,"From: $from\n");
							      echo "Thank you for sending us feedback";
							    }
							  }
							}
							?>
						</div>
						<br>
						<p>Any website issues can be reported to <a href="mailto:jimmy.j.jia@gmail.com" style="color:white;">jimmy.j.jia@gmail.com</a></p>
					</div>
				</div>
				<div class="text">
					<div id="container">
						<h3>Learn more about us here!</h3>
						<a href="location.html">The Clinic</a>
						<a href="about.html">Taiping</a>
						<a href="faq.html">Acupuncture</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	if ($_POST['submit']){
		if (!$_POST['name']){			
			$error="<br/> Please enter your name";
		}

		if (isset($_POST['email']) && !empty($_POST['email'])){
			//validating the email format
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			} else {
				$error.="<br/> Please enter a valid email address";
			}
		} 
		else{
			$error.="<br/> Please enter your email address";
		}

		if (!$_POST['message']){			
			$error.="<br/> Please enter your message";
		}


		if ($error){
			$result='<div class="text-danger">There were error(s) in your form:'.$error.'</div><br/>';
		} else{	

			$emailTo="sunnyye28@hotmail.com";
			$senderName=$_POST['name'];
			$senderEmail=$_POST['email'];
			$subject="Message from sunnyye.com: ".$_POST['subject'];
			$message= $_POST['message'];
			$headers="From: ".$senderName." <".$senderEmail.">";	
		

			if(mail($emailTo, $subject, $message, $headers)){
				$result='<div class="form-success">Your message was successfully sent.'.'</div><br/>';
				}

			else{
				$result='<div class="send-mail-error">An error occurred: mail was not successfully sent. Please try again.'.'</div><br/>';
				}
			}	
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Sunny Ye | Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
	

	<!--Installing ASAP web font--> 
	<link href="http://fonts.googleapis.com/css?family=Asap" rel="stylesheet" type="text/css">

	<!--Custom CSS Styles-->
	<link rel="stylesheet" href="css/custom-contact.css" type="text/css">

	<!--Installing jQuery-->
	<script src="jquery/jquery-1.11.3.min.js"></script>

	<!-- Latest compiled and minified JavaScript for Bootstrap-->
	<script src="bootstrap/bootstrap.min.js"></script>

</head>

<body>
	<div class="container" id="main-wrapper">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
					<span class="sr-only">Toggle navigation</span>
                	<span>Menu</span>
                	<!--<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>-->	
	                </button>

					<h1>Sunny Ye</h1>
					<p class="lead">Web Developer</p>
	              	
				</div>

				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Portfolio</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>	
				</div>		
			</div>		
		</nav>

		<div class="container">
			<div class ="row">
				<section class="col-xs-12 col-sm-6 col-md-8" id="main-content-section">
					<form name="contactform" id="contact-form" method="post">
						<h2>Contact Me</h2>
						<span class="required-field"><p>* Required Fields</p></span>

						<?php
							echo $result;
						?>

						<div class="row">
							<div class="form-group col-xs-12 col-md-6">
								<label for="name"><span class="glyphicon glyphicon-user"></span> Name:<span class="required-field">*</span></label>
								<input class="form-control" id="name" type="text" name="name"/>
							</div>
					

							<div class="form-group col-xs-12 col-md-6">
								<label for="email"><span class="glyphicon glyphicon-envelope"></span> Email:<span class="required-field">*</span></label>
								<input class="form-control" id="email" type="email" name="email"/>
							</div>

							<div class="form-group col-xs-12">
								<label for="subject"><span class="glyphicon glyphicon-book"></span> Subject:</label>
								<input class="form-control" id="subject" type="text" name="subject"/>
							</div>
					
							<div class="form-group col-xs-12">
								<label for="message"><span class="glyphicon glyphicon-pencil"></span>Message:<span class="required-field">*</span></label>
								<textarea class="form-control" id="message" name="message" placeholder="Type your message here..."></textarea>
							</div>

							<div class="col-xs-12">
								<input type="submit" class="btn btn-primary" id="send-button" name="submit" value="SEND" />
							</div>
						</div>
					</form>	

				</section>

				<section class="hidden-xs col-sm-6 col-md-4" id="aside">
					<h3>Email</h3>
					<a href="mailto: sunnyye28@hotmail.com" id="my-contact-email" >sunnyye28@hotmail.com</a>

					<h3>Location</h3>

					<p>Sydney, Australia</p>

					<h3>Time Zone</h3>
					<p>Australian Eastern Time<br/>
					(UTC+10)</p>
				</section>		
			</div>
		</div>


		<footer class="container">
			<ul id="social-media-menu">
				<li><a href="https://github.com/sunnyye28">Github</a></li>
				<li><a href="https://twitter.com/sunnyye28">Twitter</a></li>
			</ul>
			<p>&copy; Sunny Ye 2015.</p>
		</footer>
	</div>



	
</body>
</html>
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
			$result='<div class="form-error">There were error(s) in your form:'.$error.'</div><br/>';
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
	<link rel="stylesheet" href="css/custom.css" type="text/css">

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
						<li><a href="personal.html">Personal Work</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>	
				</div>		
			</div>		
		</nav>

		<section class="container" id="main-content-section">
			<form name="contactform" method="post">
				<h2>Contact Me</h2>

				<span><p>* Required Fields</p></span>

				<?php
					echo $result;
				?>

				<div class="form-input">
					<label for="name">Name:<span>*</span></label>
					<input id="name" type="text" name="name"/>
				</div>

				<div class="form-input">
					<label for="email">Email:<span>*</span></label>
					<input id="email" type="email" name="email"/>
				</div>

				<div class="subject-input">
					<label for="subject">Subject:</label>
					<input id="subject" type="text" name="subject"/>
				</div>

				<div class="message-input">
					<label for="message">Message:<span>*</span></label>
					<textarea id="message" name="message" placeholder="Type your message here..."></textarea>
				</div>

				<input id="send-button" type="submit" name="submit" value="SEND" />
			</form>	

		</section>

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
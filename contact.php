<?php
	$result= "";
	
	if (isset($_POST['submit'])){
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

	<?php
		$pageTitle = "Sunny Ye | Contact";
		$section= "contact";
		include('includes/header.php');
	?>

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
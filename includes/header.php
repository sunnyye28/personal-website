<html>

<head>
	<title><?php echo $pageTitle;?></title>
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
						<li class="<?php if($section == 'work'){echo 'current';} ?>"><a href="index">Work</a></li>
						<li class="<?php if($section == 'about'){echo 'current';} ?>"><a href="about">About</a></li>
						<li class="<?php if($section == 'contact'){echo 'current';} ?>"><a href="contact">Contact</a></li>
					</ul>	
				</div>		
			</div>		
		</nav>
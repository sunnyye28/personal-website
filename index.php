<!DOCTYPE html>

<?php 
	$pageTitle = "Sunny Ye | Personal Website";
	$section="work";
	include('includes/header.php');
?>

	<section class="container" id="main-content-section">
		<ul id="portfolio-gallery">
		
		<?php
			include('includes/portfolio-items.php');
		?>
		
		<?php
			foreach ($portfolio as $value){
				echo "<li class='col-xs-12 col-sm-6 col-md-4'>";
				echo '<a href="'.$value["link"].'">';	
				echo '<img src="'.$value["img"].'"'. 'class="'. 'img-responsive center-block"'. 'alt="'.$value["name"].'">';	
				//echo '<img src="'.$value["img"].'"'. 'alt="'.$value["name"].'">';
				echo "</a>";
				echo "<p class='detailsView'>View Details</p>";
				echo "</li>";
			}
		?>

		</ul>

	</section>

<?php
	include('includes/footer.php');
?>
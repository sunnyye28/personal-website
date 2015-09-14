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
		
		<!--	<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x200/4e81ac/fff" class="img-responsive center-block" /></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/5e8db6/fff" class="img-responsive center-block" /></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/6f9abe/fff" class="img-responsive center-block"/></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/81a6c6/fff" class="img-responsive center-block"/></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/93b2ce/fff" class="img-responsive center-block"/></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/66bd6d/fff" class="img-responsive center-block"/></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/8dcd91/fff" class="img-responsive center-block"/></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/b3deb6/fff" class="img-responsive center-block"/></li>
			<li class="col-xs-12 col-sm-6 col-md-4"><img src="http://dummyimage.com/300x260/d9eeda/fff" class="img-responsive center-block"/></li>-->
		</ul>

	</section>

<?php
	include('includes/footer.php');
?>
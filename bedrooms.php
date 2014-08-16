<?php include('inc/password_protect.php'); ?>
<?php include('inc/projects.php'); ?>
<?php 
$pageTitle = "Home";
include("inc/header.php");
include("inc/index-nav.php"); ?>



	<!-- Begin Hero -->
	<div class='jumbotron <?php 
/*$bgImages = array("hero", "hero2", "hero3", "hero4");
$rand_keys = array_rand($bgImages);
echo $bgImages[$rand_keys];*/ echo "homepage";
?> clearfix' data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">
		<!-- Content -->
		<div class="container center-vertically heading">
			<img src="img/logo/watermark.png">
			<div class="ticker">
				<h1>Beautifully Functional</h1>
				
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Projects Gallery &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
			</a>
		</div>

	</div>
	<!-- End Hero -->



  	<!-- Begin Portfolio -->
	<section id="section2">

		<div class="container portfolio">

			<!-- Page Title -->
			<div class="row page-title-2">
				<div class="col-lg-12">
					<h3>Gallery</h3>
					<hr>
				
				</div>
			</div>

		<!-- Gallery Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php 
			  	/*shuffle($product["images"]); *///Random Order
			  	foreach($projects["images"] $project) { ?>

				  	<li class="item <?php echo $image["class"]; ?> col-xs-4 no-padding">

					    <a href='<?php echo $project["img-main"]; ?>' data-lightbox='<?php echo $image["class"]; ?>' data-title='<?php echo $image["text"]; ?>'>
					    	<img class="example-image" src='<?php echo $project["img-thumb"]; ?>' alt='<?php echo $image["title"]; ?>' />
					    	<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><i class="ion-plus-circled"></i></span>
							  </span>
							</span>
					    </a>
						
				  	</li>

			  	<?php } ?>

			  </ul>

			</div>

	</section>
	<!-- End Portfolio -->










<?php include('inc/footer.php'); ?>
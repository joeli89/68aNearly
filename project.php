<?php include("inc/projects.php"); 

if(isset($_GET["id"])) {
	$project_id = $_GET["id"];
	if(isset($projects[$project_id])) {
		$product = $projects[$project_id];
	}
}
if(!isset($product)) {
	header("Location: index.php");
	exit();
}


$pageTitle = $product["title"];
include("inc/header.php");
include("inc/project-nav.php"); 
?>

	<!-- Begin Hero -->
	<div class="jumbotron <?php echo $product["heading"]; ?> clearfix" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;" data-anchor-target=".ticker h1">

		<!-- Content -->
		<div class="container center-vertically heading">
			<!-- <img src="img/logo/logo1.png"> -->
			<div>
				<h1><?php echo $product["title"]; ?></h1>
			</div>
			<hr>
			<a href="#" data-id="section2" class="btn btn-default bolt-button-light scroll-link" style="margin-top:10px;">
				Gallery &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
			</a>
		</div>

	</div>
	<!-- End Hero -->

	<!-- Begin Summary -->
	<section id="section1">
	
		<div class="summary">

			<div class="container">

				<!-- Content -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<p data-scroll-reveal>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Suspendisse potenti. Ut ac consequat nulla. Praesent tristique eleifend tincidunt.</p>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- End Summary -->



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
			  	foreach($product["images"] as $image) { ?>

				  	<li class="item <?php echo $image["class"]; ?> col-xs-4 no-padding">

					    <a href='<?php echo $image["main"]; ?>' data-lightbox='<?php echo $image["class"]; ?>' data-title='<?php echo $image["text"]; ?>'>
					    	<img class="example-image" src='<?php echo $image["thumb"]; ?>' alt='<?php echo $image["title"]; ?>' />
					    	<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><i class="ion-plus-circled"></i></span>
							  </span>
							</span>
					    </a>
						
				  	</li>

			  	<?php } ?>

			  </ul>
			  <div class="col-md-12 goHome">
				  <a href="index.php"><i class="ion-chevron-left"></i> Go Home</a>
			  </div>
			</div>

	</section>
	<!-- End Portfolio -->

	




<?php include("inc/footer.php"); ?>
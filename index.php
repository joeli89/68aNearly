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

	<!-- Begin Summary -->
	<section id="section1">
	
		<div class="summary">

			<div class="container">

				<!-- Content -->
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1" >
						<h3 data-scroll-reveal="enter left and move 50px over 1.2s">Beautifully Functional</h3>
						<hr data-scroll-reveal>
						<p data-scroll-reveal>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Suspendisse potenti. Ut ac consequat nulla. Praesent tristique eleifend tincidunt.</p>
						<a data-scroll-reveal="enter right and move 50px over 1.2s" href="#" data-id="section3" class="btn btn-default bolt-button-dark scroll-link">
							About us &nbsp;&nbsp;<span class="ion-ios7-arrow-down"></span>
						</a>
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
					<p>List of Our Projects</p>
				</div>
			</div>


			<!-- Gallery Items -->
			<div class="container port-holder">
			  <ul id="myPortfolio" class="no-padding">

			  	<?php 
			  	/*shuffle($images);*/ //Random Order
			  	foreach($projects as $project_id => $project) 
			  		{ ?>

				  	<li class="item col-xs-4 no-padding">

					    <a href='project.php?id=<?php echo $project_id; ?>' >
					    	<img class="example-image" src='<?php echo $project["img-thumb"]; ?>' alt='<?php echo $project["title"]; ?>' />
					    	<span class="portfolio-hover">
							  <span>
							  	<span class="portfolio-title"><?php echo $project["title"]; ?></span><br>
							  </span>
							</span>
					    </a>
						
				  	</li>

			  	<?php } ?>

			  </ul>
			</div>

		</div>

	</section>
	<!-- End Portfolio -->

<div class="bs-example">
    <div id="testimonials" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#testimonials" data-slide-to="0" class=""></li>
        <li data-target="#testimonials" data-slide-to="1" class=""></li>
        <li data-target="#testimonials" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="img/quote/bg3.jpg" alt="" >
          <div class="carousel-caption">
            <p>"Did a great job of my Kitchen. Thanks!"</p>
            <h3>Bob Bobby</h3>
          </div>
        </div>
        <div class="item">
       	  <img src="img/quote/bg2.jpg" alt="" >
          <div class="carousel-caption">
            <p>"Want a good kitchen? Make sure your designer does cross fit!"</p>
            <h3>Rio Tinto</h3>
          </div>
        </div>
        <div class="item active">
        <img src="img/quote/bg3.jpg" alt="" >
          <div class="carousel-caption">
            <p>"Did a great job of my Bedroom. Thanks!"</p>
            <h3>Bob Bobby</h3>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#testimonials" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#testimonials" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>





	<!-- Begin Call to Action -->
	<div class="cta">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<p>
						Interested in working with us?
					</p>
				</div>
				<div class="col-lg-2">
					<a href="#" data-id="section6" class="btn btn-default bolt-button-cta scroll-link">
						Contact
					</a>
				</div>
				<div class="col-lg-4">
					<p>
						Ready when you are.
					</p>
				</div>
			</div>

		</div>

	</div>
	<!-- End Call to Action -->

	<!-- Begin About Us -->
	<section id="section3">

		<div class="about">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-10 col-lg-offset-1 page-title-2">
						<h3>About</h3>
						<hr>
						<p>A passionate team of creative &amp; innovative minds.</p>
					</div>

					<!-- Who We Are-->
					<div data-scroll-reveal="enter top and move 50px over 1.2s" class="col-sm-4 col-sm-offset-1">
						<h5>Who We Are</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi.</p>
					</div> 

					<!-- Goals -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-6">
						<h5>Goals</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. </p>
					</div>

					<!-- The Team -->
					<div data-scroll-reveal="enter bottom and move 50px over 1.2s" class="col-sm-10 col-sm-offset-1">
						<h5>The Team</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi. Nam bibendum mauris at sollicitudin lacinia. Vestibulum blandit nibh neque, id consequat mi vestibulum eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a elit turpis. </p>
					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End About Us -->

	<!-- Begin Team -->
	<section id="section4">

		<div class="team">

			<div class="container">

				<div class="row">

					<!-- Page Title -->
					<div class="col-lg-12 page-title">
						<h3>The Team</h3>
						<hr>
						<p>Some text here.</p>
					</div>

					<div id="content-holder">

						<!-- Team Member 1 -->
						<div data-scroll-reveal="enter top and move 50px over 1s" class="col-md-3 col-md-offset-2 team-member-holder">
							<img src="img/team-member-1.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Jillian Knowlton</h3>
								<p class="team-job">Director / Designer</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="mailto:jillian@68adesigns.com"><span class="ion-ios7-email-outline social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
						            </div>
					 			</div>
							</div>
						</div>

						<!-- Team Member 2 -->
						<div data-scroll-reveal="enter bottom and move 50px over 1s" class="col-md-3 team-member-holder">
							<img src="img/team-member-2.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Lora</h3>
								<p class="team-job">Manager</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="mailto:lora@68adesigns.com"><span class="ion-ios7-email-outline social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
					            	</div>
					 			</div>
							</div>
						</div>

						<!-- Team Member 3 -->
						<div data-scroll-reveal="enter top and move 50px over 1s" class="col-md-3 team-member-holder">
							<img src="img/team-member-1.jpg" alt="...">
							<div class="team-info-holder">
								<h3 class="team-name">Phil</h3>
								<p class="team-job">Project Manager</p>
							</div>
							<div class="team-about">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integerelit zyzz alovea.
								<div style="padding-top:15px;">
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-facebook social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="mailto:jillian@68adesigns.com"><span class="ion-ios7-email-outline social-icon"></span></a>
						            </div>
						            <div class="social-icon-holder">
						                <a href="#"><span class="ion-social-dribbble social-icon"></span></a>
						            </div>
					 			</div>
							</div>
						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- End Team -->




	<!-- Begin Contact -->
	<section id="section6">

		<div class="contact">

			<div class="container">

				<!-- Page Title -->
				<div class="col-lg-10 col-lg-offset-1 page-title">
					<h3>Contact</h3>
					<hr>
					<p>Get in touch with us!</p>
				</div>


				<!-- Address -->
				<div class="col-md-5 col-md-offset-1">
					<p class="contact-info">
						<a href="https://www.google.com.hk/maps/place/68A+High+St/@51.393114,-0.44865,17z/data=!3m1!4b1!4m2!3m1!1s0x48767435d48ca6d7:0x751e0f0b6ad7a392" target="_blank"><em>68a, High Street Shepperton, Surrey, TW17 9AU</em></a>
					</p>
				</div>

				<!-- Phone Number -->
				<div class="col-md-2">
					<p class="contact-info">01932 245 986</p>
				</div>

				<!-- Email -->
				<div class="col-md-3">
					<p class="contact-info-email"><a href="mailto:enquiries@68adesigns.com"><em>enquiries@68adesigns.com</em></a></p>
				</div>

				<?php 
				if($_GET["status"] == "thanks") { ?>

					<div class="col-md-12 thanks-message">
						<h1><i class="ion-ios7-paperplane"></i></h1>
						<h2>Thanks we got your message! We'll be in touch soon!</h2>
						
					</div>
					
				<?php } else { ?>

		    <div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-3">
				
				<!-- Form -->
				<form id="defaultForm" name="contactform" method="post" action="php/mailer.php" class="form-horizontal" role="form">

					<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
                            <div class="col-lg-8">
                               	<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Full Name"/>
                            </div>
                            
                        </div>

                        <div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">

                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="email"/>
                            </div>
                        </div>

                      
                        	<div class="form-group" data-scroll-reveal="enter top and move 50px over 1.5s">
								<div class="col-md-8">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject" data-required="true">
								</div>
							</div>
							<div class="form-group" data-scroll-reveal="enter bottom and move 50px over 1.5s">
								<div class="col-lg-8">
									<textarea class="form-control form-control-message" rows="5" id="inputMessage" name="inputMessage" placeholder="Message"></textarea>
								</div>
							</div>
						<div data-scroll-reveal="enter top and move 50px over 1.7s" class="form-group">
							<div class="col-lg-2 ">
								<button type="submit" class="btn btn-default bolt-button-send">
									Send
								</button>
							</div>
						
						</div>

				</form>

					</div>
				</div>
			</div>

				<?php } ?>

			</div>

		</div>

	</section>
	<!-- End Contact -->

	

<?php include('inc/footer.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Marble Blue | Beach Bar Rebrand';
	    $page_decription = "Marble Blue is a Beach Bar and hotel which required a logo and redesign.";
	    $page_name = '/marble';
	    $preload = 'img/marble/m1-min.webp';
	    include ('inc/head.php');
	    include ('inc/schema.php');
  	?>
	</head>

	<body>
		<!-- Header -->
		<header>
			<?php include ('inc/header.php'); ?>

    	<!-- Div container for all the display panels -->
    	<div id="hide">
    		<div class="flexBox">
	    		<div class="leftGraphic">
				 		<div class="graphicsDetails">
				 			<h3 class="graphicsDetailsTitle">Marble Blue</h3>
				 			<p class="graphicsDetailsPara">Marble Blue is a Beach Bar and hotel which requires a logo and a menu design, plus any extras. Inside of the logo you will see water droplets which relates to the location of the bar. the chosen typeface is rocky and uneven which also relates to beaches.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/marble/m1-min.webp" 
							data-src="img/marble/m1.webp" 
							alt="Marble opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Marble Image 2" src="img/marble/m5.webp">
		 				<img class="extraImages" alt="Marble Image 3" src="img/marble/m6.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Marble Image 4" src="img/marble/m4.webp">
		 				<img class="extraImages" alt="Marble Image 5" src="img/marble/m2.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Marble Image 6" src="img/marble/m3.webp">
		 			</div>
		 		</div>


		 		<!-- Extra Content Section -->
		 		<div class="extrasTitle">
		 			<h2>Check out more of my work below!</h2>
		 		</div>

				<a href="https://eviebowerman.com/stitch" class="lowerDisplayLinks">
					<!-- Contains all of the things inside -->
					<div class="displayContentContainer">
						<!-- Bottom Layer Img -->
						<div class="coverImage">
							<div class="cover">
								<img class="image" alt="Stitch Tailoring" src="img/displayImgs/stitch.webp">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage stitch">
							<div class="coverText">
								<h3 class="coverTextTitle">Stitch Tailoring</h3>
								<h5 class="coverTextSubTitle">2024</h5>
							</div>
						</div>
					</div>
				</a>

				<a href="https://eviebowerman.com/w7" class="lowerDisplayLinks">
					<!-- Contains all of the things inside -->
					<div class="displayContentContainer">
						<!-- Bottom Layer Img -->
						<div class="coverImage">
							<div class="cover">
								<img class="image" alt="W7" src="img/displayImgs/w7.webp">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage w7">
							<div class="coverText">
								<h3 class="coverTextTitle">W7 Rebrand</h3>
								<h5 class="coverTextSubTitle">2023</h5>
							</div>
						</div>
					</div>
				</a>

				<a href="https://eviebowerman.com/label" class="lowerDisplayLinks hide">
					<!-- Contains all of the things inside -->
					<div class="displayContentContainer">
						<!-- Bottom Layer Img -->
						<div class="coverImage">
							<div class="cover">
								<img class="image" alt="LabelLess" src="img/displayImgs/label.webp">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage label">
							<div class="coverText">
								<h3 class="coverTextTitle">Label Less</h3>
								<h5 class="coverTextSubTitle">2022</h5>
							</div>
						</div>
					</div>
				</a>
			</div>
		</main>

		<!-- Footer area -->
		<?php include ('inc/footer.php'); ?>
		

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			<?php include ('inc/coreJs.php'); ?>
		</script>
		
		<!-- 100% privacy-first analytics -->
		<script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>

	</body>
</html>
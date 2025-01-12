<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'L.A. Women, The Doors | Rebranding Concept';
	    $page_decription = "Home to all things graphic design and photography. If you're looking to work with me, get in touch now!";
	    $page_name = '/doors';
	    $preload = '';
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
				 			<h3 class="graphicsDetailsTitle">L.A. Women, The Doors</h3>
				 			<p class="graphicsDetailsPara">The brief asks to produce an Album Cover with freedom to express our interpretation of the music through packaging. The front cover symbolises Jim Morrison (lead vocalist) and the iconic ‘L.A. Women’. While Jim sings about women throughout the album, he metaphorically perceives LA as a women. This cover serves as a visual representation of Jim’s profound connection to LA. The swoosh effect on the back cover is to complement the interconnected theme on the front. The choice of fire is deliberate, echoing Jim’s lyrics.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/doors/d5-min.webp" 
							data-src="img/doors/d5.webp" 
							alt="Doors opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Doors Image 2" src="img/doors/d2.webp">
		 				<img class="extraImages" alt="Doors Image 3" src="img/doors/d3.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Doors Image 4" src="img/doors/d4.webp">
		 				<img class="extraImages" alt="Doors Image 5" src="img/doors/d6.webp">
		 			</div>		 			
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Doors Image 6" src="img/doors/d1.webp">
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
								<img class="image" alt="Stitch" src="img/displayImgs/stitch.webp">
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
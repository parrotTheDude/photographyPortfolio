<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Motion | Photography';
	    $page_decription = "My photographs of scenes involving motion.";
	    $page_name = '/motion';
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
    		<div class="photosTitleBox">
	    		<h2>Motion</h2>
		 		</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/motion/m1.webp" alt="Motion Image 1">
		 				<img class="extraImages" src="img/motion/m2.webp" alt="Motion Image 2">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/motion/m3.webp" alt="Motion Image 3">
		 				<img class="extraImages" src="img/motion/m4.webp" alt="Motion Image 4">
		 			</div>
		 		</div>


		 		<!-- Extra Content Section -->
		 		<div class="extrasTitle">
		 			<h2>Check out more of my work below!</h2>
		 		</div>

				<a href="https://eviebowerman.com/pets" class="lowerDisplayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/pets/p4.webp" alt="Pets Cover">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImage">
								<div class="coverText">
									<h3 class="coverTextTitle">Pets</h3>
									<h5 class="coverTextSubTitle">2024</h5>
								</div>
							</div>
						</div>
					</a>

				<a href="https://eviebowerman.com/wildlife" class="lowerDisplayLinks">
					<!-- Contains all of the things inside -->
					<div class="displayContentContainer">
						<!-- Bottom Layer Img -->
						<div class="coverImage">
							<div class="cover">
								<img class="image" src="img/wildlife/wildlife1.webp" alt="Wildlife Cover">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage">
							<div class="coverText">
								<h3 class="coverTextTitle">Wildlife</h3>
								<h5 class="coverTextSubTitle">2024</h5>
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
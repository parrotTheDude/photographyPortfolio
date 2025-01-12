<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Pets | Photography';
	    $page_decription = "Photographs of everyones favourite animals. Pets!";
	    $page_name = '/pets';
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
	    		<h2>Pets</h2>
		 		</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/pets/p1.webp" alt="Pets Image 2">
		 				<img class="extraImages" src="img/pets/p2.webp" alt="Pets Image 3">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/pets/p3.webp" alt="Pets Image 4">
		 				<img class="extraImages" src="img/pets/p5.webp" alt="Pets Image 5">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/pets/p4.webp" alt="Pets Image 6">
		 			</div>
		 		</div>


		 		<!-- Extra Content Section -->
		 		<div class="extrasTitle">
		 			<h2>Check out more of my work below!</h2>
		 		</div>

				<a href="https://eviebowerman.com/motion" class="lowerDisplayLinks">
					<!-- Contains all of the things inside -->
					<div class="displayContentContainer">
						<!-- Bottom Layer Img -->
						<div class="coverImage">
							<div class="cover">
								<img class="image" src="img/motion/m4.webp" alt="Motion Cover">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage">
							<div class="coverText">
								<h3 class="coverTextTitle">Motion</h3>
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
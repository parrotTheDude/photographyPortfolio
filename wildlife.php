<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Wildlife | Photography';
	    $page_decription = "Wildlife photography from my receent trip to Borneo.";
	    $page_name = '/wildlife';
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
	    		<h2>Wildlife</h2>
		 		</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife8.webp" alt="Wildlife Image 1">
		 				<img class="extraImages" src="img/wildlife/wildlife3.webp" alt="Wildlife Image 2">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife7.webp" alt="Wildlife Image 3">
		 				<img class="extraImages" src="img/wildlife/wildlife4.webp" alt="Wildlife Image 4">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife5.webp" alt="Wildlife Image 5">
		 				<img class="extraImages" src="img/wildlife/wildlife6.webp" alt="Wildlife Image 6">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife2.webp" alt="Wildlife Image 7">
		 				<img class="extraImages" src="img/wildlife/wildlife1.webp" alt="Wildlife Image 8">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife9.webp" alt="Wildlife Image 9">
		 				<img class="extraImages" src="img/wildlife/wildlife10.webp" alt="Wildlife Image 10">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife11.webp" alt="Wildlife Image 11">
		 				<img class="extraImages" src="img/wildlife/wildlife13.webp" alt="Wildlife Image 12">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife12.webp" alt="Wildlife Image 13">
		 				<img class="extraImages" src="img/wildlife/wildlife14.webp" alt="Wildlife Image 14">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife15.webp" alt="Wildlife Image 15">
		 				<img class="extraImages" src="img/wildlife/wildlife16.webp" alt="Wildlife Image 16">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/wildlife/wildlife17.webp" alt="Wildlife Image 17">
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
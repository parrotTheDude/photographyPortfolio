<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Label Less | Clothing Brand';
	    $page_decription = "Label Less’ is a clothing brand upcycling second hand garments. It’s aim is to reduce economic inquality through the Label Less ‘anti-brand’";
	    $page_name = '/label';
	    $preload = 'img/label/l1-min.webp';
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
				 			<h3 class="graphicsDetailsTitle">Label Less</h3>
				 			<p class="graphicsDetailsPara">This brief offered the opportunity to solve a social issue using design solutions. Where income inquality is high, people search for luxury brand names. Lower-class Mums feel as though they need to purchase high end clothing to be accepted in society, leading themselves into more debt. ‘Label Less’ is a clothing brand upcycling second hand garments. It’s aim is to reduce economic inquality through the Label Less ‘anti-brand’: designed to look classy and create confidence by recreating value and uniqueness in preloved clothing.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/label/l1-min.webp" 
							data-src="img/label/l1.webp" 
							alt="LabelLess opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/label/l7.webp" alt="LabelLess Image 2">
		 				<img class="extraImages" src="img/label/l4.webp" alt="LabelLess Image 3">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/label/l6.webp" alt="LabelLess Image 4">
		 				<img class="extraImages" src="img/label/l1.webp" alt="LabelLess Image 5">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/label/l5.webp" alt="LabelLess Image 6">
		 				<img class="extraImages" src="img/label/l8.webp" alt="LabelLess Image 7">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" src="img/label/l2.webp" alt="LabelLess Image 8">
		 				<img class="extraImages" src="img/label/l3.webp" alt="LabelLess Image 9">
		 			</div>
		 			<div class="extraGraphicsContainer"> 
		 				<img class="extraImages" src="img/label/l9.webp" alt="LabelLess Image 10">
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
								<img class="image" src="img/displayImgs/stitch.webp" alt="Stitch">
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
								<img class="image" src="img/displayImgs/w7.webp" alt="W7">
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

				<a href="https://eviebowerman.com/doors" class="lowerDisplayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/displayImgs/doors.webp" alt="Doors">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImage doors">
								<div class="coverText">
									<h3 class="coverTextTitle">LA Women, The Doors</h3>
									<h5 class="coverTextSubTitle">2023</h5>
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
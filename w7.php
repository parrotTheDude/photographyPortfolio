<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'W7 | Rebrand';
	    $page_decription = "Fire Starters competition breif ‘Reignite an Old Flame’ asked designers to redesign the packaging and show how this identity can work in a brand world.";
	    $page_name = '/w7';
	    $preload = 'img/w7/w9-min.webp';
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
				 			<h3 class="graphicsDetailsTitle">W7 Rebrand</h3>
				 			<p class="graphicsDetailsPara">Fire Starters competition breif ‘Reignite an Old Flame’ asked designers to redesign the packaging and show how this identity can work in a brand world. W7’s misson is to ensure that everybody should have access to an extensive range of high quality cosmetics at an affordable price. The redesign was inspired by the brand’s origin, London. On packaging and advertising, the logo is used as a window to see into London’s beauty.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/w7/w9-min.webp" 
							data-src="img/w7/w9.webp" 
							alt="W7 opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="W7 Image 2" src="img/w7/w3.webp">
		 				<img class="extraImages" alt="W7 Image 3" src="img/w7/w8.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="W7 Image 4" src="img/w7/w4.webp">
		 				<img class="extraImages" alt="W7 Image 5" src="img/w7/w5.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="W7 Image 6" src="img/w7/w6.webp">
		 				<img class="extraImages" alt="W7 Image 7" src="img/w7/w7.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="W7 Image 8" src="img/w7/w1.webp">
		 				<img class="extraImages" alt="W7 Image 9" src="img/w7/w2.webp">
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

				<a href="https://eviebowerman.com/marble" class="lowerDisplayLinks">
					<!-- Contains all of the things inside -->
					<div class="displayContentContainer">
						<!-- Bottom Layer Img -->
						<div class="coverImage">
							<div class="cover">
								<img class="image" alt="Marble" src="img/displayImgs/marble.webp">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage marble">
							<div class="coverText">
								<h3 class="coverTextTitle">Marble Blue</h3>
								<h5 class="coverTextSubTitle">2024</h5>
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
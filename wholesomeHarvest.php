<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Wholesome Harvest | Redesign';
	    $page_decription = "A redesign of Wholesome Harvests logo and packaging, including their new Halloween special!";
	    $page_name = '/wholesomeHarvest';
	    $preload = 'img/wholesome/wh0-min.webp';
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
				 			<h3 class="graphicsDetailsTitle">Wholesome Harvest</h3>
				 			<p class="graphicsDetailsPara">Wholesome Harvest were looking for a logo and packaging design, including their Halloween special, pumpkin soup. It also mentioned that we could add extra elements, so I decided to include social media templates and a billboard. I felt these additions would help tell the brand’s story more fully. For the concept, I focused on the idea of soups evoking a sense of nostalgia and comfort. To capture that warm, homely vibe, I created a hand-drawn logo, and selected typefaces that complement the retro, homemade feel of the brand.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/wholesome/wh0-min.webp" 
							data-src="img/wholesome/wh0.webp" 
							alt="Wholesome Harvest opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Wholesome Img 2" src="img/wholesome/wh2.webp">
		 				<img class="extraImages" alt="Wholesome Img 3" src="img/wholesome/wh9.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Wholesome Img 4" src="img/wholesome/wh3.webp">
		 				<img class="extraImages" alt="Wholesome Img 5" src="img/wholesome/wh1.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Wholesome Img 6" src="img/wholesome/wh5.webp">
		 				<img class="extraImages" alt="Wholesome Img 7" src="img/wholesome/wh6.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Wholesome Img 8" src="img/wholesome/wh7.webp">
		 				<img class="extraImages" alt="Wholesome Img 9" src="img/wholesome/wh4.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Wholesome Img 10" src="img/wholesome/wh8.webp">
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
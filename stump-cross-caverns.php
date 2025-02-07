<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Stump Cross Caverns | Clothing Brand';
	    $page_decription = "Stump Cross Caverns is a tourist attraction which has a show cave, gift shop and cafe. I have done lots of little projects for them such as leaflets and posters, aswell as bigger projects such as the roadside billboard which was up in Leeds, West Yorkshire over the summer period.";
	    $page_name = '/stump-cross-caverns';
	    $preload = 'img/sxc/sx1.webp';
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
				 			<h3 class="graphicsDetailsTitle">Stump Cross Caverns</h3>
				 			<p class="graphicsDetailsPara">Stump Cross Caverns is a tourist attraction which has a show cave, gift shop and cafe. I have done lots of little projects for them such as leaflets and posters, aswell as bigger projects such as the roadside billboard which was up in Leeds, West Yorkshire over the summer period.</p>
				 			<p>The most recent project I have done is the new menu designs. The old menu designs did not fit their brands identity, Therefore when producing these I made sure to follow all the guidelines.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/sxc/sx3.webp" 
							alt="SXC opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stump Cross Image 2" src="img/sxc/sx2.webp">
		 				<img class="extraImages" alt="Stump Cross Image 3" src="img/sxc/sx7.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stump Cross Image 4" src="img/sxc/sx4.webp">
		 				<img class="extraImages" alt="Stump Cross Image 5" src="img/sxc/sx5.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stump Cross Image 6" src="img/sxc/sx6.webp">
		 				<img class="extraImages" alt="Stump Cross Image 7" src="img/sxc/sx8.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stump Cross Image 8" src="img/sxc/sx1.webp">
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
								<img class="image" alt="Wholesome" src="img/displayImgs/wholesome.webp">
							</div>
						</div>
						<!-- Hover over container. Image is displayed as a css background img -->
						<div class="coverTextImage wholesome">
							<div class="coverText">
								<h3 class="coverTextTitle">Wholesome Harvest</h3>
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
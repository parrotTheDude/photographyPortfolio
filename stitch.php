<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Stitch Tailoring | Clothing Brand';
	    $page_decription = "Stitch is a clothing brand which strives to make people feel confident through garments. Empowering individuals to choose their style rather than being dictated by it.";
	    $page_name = '/stitch';
	    $preload = 'img/stitch/s1-min.webp';
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
				 			<h3 class="graphicsDetailsTitle">Stitch Tailoring</h3>
				 			<p class="graphicsDetailsPara">Stitch is a clothing brand which strives to make people feel confident through garments. Empowering individuals to choose their style rather than being dictated by it. Unrealistic beauty standards leads to people wanting to lose weight to become a particular clothing size, which harms mental health and body image. Stitch Tailoring abolishes the sizing system, stitching each piece to fit your unique frame. To shop at stitch, you need to become a member. Each member gets to create their very own username to ensure each garment is personalised to you.</p>
				 			<h3 class="graphicsDetailsTag">Scroll to see more...</h3>
				 		</div>
				 	</div>
				 	<div class="rightGraphic">
				 		<div class="graphicsContainer">
				 			<img 
							class="asyncImage graphicsImage"
							src="img/stitch/s1-min.webp" 
							data-src="img/stitch/s1.webp" 
							alt="Stitch opening image">
				 		</div>
				 	</div>
			 	</div>

			 	<!-- Display container for the remaining photos -->
		 		<div class="graphicsDisplay">	
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 2" src="img/stitch/s2.webp">
		 				<img class="extraImages" alt="Stitch Image 3" src="img/stitch/s3.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 4" src="img/stitch/s4.webp">
		 				<img class="extraImages" alt="Stitch Image 5" src="img/stitch/s5.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 6" src="img/stitch/s6.webp">
		 				<img class="extraImages" alt="Stitch Image 7" src="img/stitch/s8.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 8" src="img/stitch/s7.webp">
		 				<img class="extraImages" alt="Stitch Image 9" src="img/stitch/s9.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 10" src="img/stitch/s10.webp">
		 				<img class="extraImages" alt="Stitch Image 11" src="img/stitch/s11.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 12" src="img/stitch/s12.webp">
		 				<img class="extraImages" alt="Stitch Image 13" src="img/stitch/s13.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 14" src="img/stitch/s14.webp">
		 				<img class="extraImages" alt="Stitch Image 15" src="img/stitch/s17.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 16" src="img/stitch/s15.webp">
		 				<img class="extraImages" alt="Stitch Image 17" src="img/stitch/s16.webp">
		 			</div>
		 			<div class="extraGraphicsContainer">
		 				<img class="extraImages" alt="Stitch Image 18" src="img/stitch/s18.webp">
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
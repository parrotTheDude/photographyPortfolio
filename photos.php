<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Photos | Graphic Design and Photography Specialist';
	    $page_decription = "A collection of my best photography organised into sub-collections.";
	    $page_name = '/photos';
	    $preload = 'img/pets/p4-min.webp';
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
				<div class="displayCovers">

					<!-- First Display Panel. Link to the page is the first <a>-->
					<a href="https://eviebowerman.com/pets" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img 
									class="asyncImage image"
									src="img/pets/p4-min.webp" 
									data-src="img/pets/p4.webp" 
									alt="Pets Cover Image">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImagePics">
								<div class="coverText">
									<h3 class="coverTextTitle">Pets</h3>
									<h5 class="coverTextSubTitle">2024</h5>
								</div>
							</div>
						</div>
					</a>

					<!-- Second Display Panel -->
					<a href="https://eviebowerman.com/motion" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/motion/m4.webp" alt="Motion Cover">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImagePics">
								<div class="coverText">
									<h3 class="coverTextTitle">Motion</h3>
									<h5 class="coverTextSubTitle">2024</h5>
								</div>
							</div>
						</div>
					</a>

					<!-- Third Display Panel -->
					<a href="https://eviebowerman.com/wildlife" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/wildlife/wildlife1.webp" alt="Wildlife Cover">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImagePics">
								<div class="coverText">
									<h3 class="coverTextTitle">Wildlife</h3>
									<h5 class="coverTextSubTitle">2024</h5>
								</div>
							</div>
						</div>
					</a>

				</div>
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
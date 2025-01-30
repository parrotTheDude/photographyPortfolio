<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Graphic Design and Photography Specialist | Evie Bowerman';
	    $page_decription = "Home to all things graphic design and photography. If you're looking to work with me, get in touch now!";
	    $page_name = '/';
	    $preload = 'img/displayImgs/stitchOL-min.webp';
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

					<!-- New Display-->
					<a href="https://eviebowerman.com/stump-cross-caverns" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/displayImgs/sxcOL.webp" alt="Stump Cross Caverns">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImage sxc">
								<div class="coverText">
									<h3 class="coverTextTitle">Stump Cross Caverns</h3>
									<h5 class="coverTextSubTitle">2025</h5>
								</div>
							</div>
						</div>
					</a>

					<!-- First Display Panel. Link to the page is the first <a>-->
					<a href="https://eviebowerman.com/stitch" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img 
									class="asyncImage image"
									src="img/displayImgs/stitchOL-min.webp" 
									data-src="img/displayImgs/stitchOL.webp" 
									alt="Stitch Cover Image">
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
					

					<!-- Second Display Panel -->
					<a href="https://eviebowerman.com/marble" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/displayImgs/marble.webp" alt="Marble Blue">
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

					<!-- Third Display Panel -->
					<a href="https://eviebowerman.com/w7" class="displayLinks">
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
					

					<!-- Forth Display Panel -->
					<a href="https://eviebowerman.com/label" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/displayImgs/label.webp" alt="LabelLess">
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
					

					<!-- Fifth Display Panel -->
					<a href="https://eviebowerman.com/wholesomeHarvest" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/displayImgs/wholesome.webp" alt="Wholesome Harvest">
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
					

					<!-- Sixth and final Display Panel -->
					<a href="https://eviebowerman.com/doors" class="displayLinks">
						<!-- Contains all of the things inside -->
						<div class="displayContentContainer">
							<!-- Bottom Layer Img -->
							<div class="coverImage">
								<div class="cover">
									<img class="image" src="img/displayImgs/doors.webp" alt="The Doors">
								</div>
							</div>
							<!-- Hover over container. Image is displayed as a css background img -->
							<div class="coverTextImage">
								<div class="coverText">
									<h3 class="coverTextTitle">LA Women, The Doors</h3>
									<h5 class="coverTextSubTitle">2023</h5>
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
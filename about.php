<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'About | Evie Bowerman';
	    $page_decription = "Home to all things graphic design and photography. If you're looking to work with me, get in touch now!";
	    $page_name = '/about';
	    $preload = 'img/evieP-min.webp';
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
    		<div class="about">
    			<div class="leftPanel">
    				<img 
    				id="aboutImg"
						class="asyncImage image"
						src="img/evieP-min.webp" 
						data-src="img/evieP.webp" 
						alt="Evie Bowerman">
    			</div>
    			<div class="rightPanel">
    				<h1 class="aboutTitle">Welcome to my portfolio website</h1>
						<p class="aboutPara">I'm a graphic designer based in North Yorkshire who has recently graduated from Northumbria University. I have gathered a range of skills throughout my studies, such as packaging design and branding. As well as design, I also have a passion for photography.</p>
						<section class="btnContainerAbout">
							<a href="https://eviebowerman.com/" class="aboutBtns uppercase">my work</a>
							<a href="https://eviebowerman.com/contact" class="aboutBtns uppercase">contact me</a>
						</section>
    			</div>
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
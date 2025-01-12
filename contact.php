<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
	    $page_title = 'Contact | Evie Bowerman';
	    $page_decription = "Home to all things graphic design and photography. If you're looking to work with me, get in touch now!";
	    $page_name = '/contact';
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

    		<!-- Contact form -->
    		 <div class="tableContainer">
    		 		<div class="text-center">
			        <h1 class="contactTitle">
			          Contact me today!
			        </h1>
			        <p>
			          Fill out the form below to send your message.
			        </p>
			      </div>
    		 		<div class="main-contact-form">
						  <form action="https://api.web3forms.com/submit" method="POST" id="form">
			          <input type="hidden" name="access_key" value="63521d7d-8a5d-47cd-904a-f98c2589dbc2" />
			          <input type="hidden" name="subject" value="Web enquiry from eviebowerman.com" />
			          <input type="checkbox" name="botcheck" id="" style="display: none;" />

							  <div class="form-row form-error" style="display:none;"></div>
							  <div class="form-row">
							    <label for="name">Name:</label>
							    <input id="name" class="form-input" type="text" name="name" placeholder="John Doe" required>
							  </div>
							  <div class="form-row">
							    <label for="email">Email:</label>
							    <input id="email" class="form-input" type="email" name="email" placeholder="you@company.com" required>
							  </div>
							  <div class="form-row">
							    <label for="message">Message:</label>
							    <textarea id="cmessage" class="form-input message" name="message" placeholder="Your message..." required></textarea>
							  </div>
							  <button class="submit" type="submit">Send Message</button>
							  <p class="text-base text-center text-gray-400" id="result"></p>
							</form>
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
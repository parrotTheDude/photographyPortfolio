<?php
	//Start the session
	session_start();

	//Access your result variables
	if (isset($_SESSION['result'])) {
		$result = $_SESSION['result'];
	} else {
		$result = '';
	}

	//Unset the useless session variable
	unset($_SESSION['result']);
?>
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
			        <?php 
								if ($result == "failed") { 
									echo "<p>Something went wrong! Your message was not sent.";
								} elseif ($result == "sent") {
									echo "<p>Your message was sent!</p><p>Thanks for getting in touch.";
								} else {
									echo "<p>Fill out the form below!</p>";
								}
							?>
			      </div>
    		 		<div class="main-contact-form">
						  <form action="sendmail" method="POST" id="form" class="formStyle">
			      		<div class="formInputContainer">
			          	<input type="text" name="name" id="name" placeholder="John Smith" required class="form-input" />
			          </div>
			          <div class="formInputContainer">
			          	<input type="email" name="email" id="email" placeholder="you@company.com" required class="form-input" />
			          </div>
			          <div class="formInputContainer">
			            <textarea rows="5" name="message" id="message" form="form" placeholder="Your Message" class="form-input message" required></textarea>
			          </div>
			          <div class="formBtnContainer">
			            <button type="submit" name="submit" id="formBtn" class="submitBtn">
			              Send Message
			            </button>
			          </div>
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
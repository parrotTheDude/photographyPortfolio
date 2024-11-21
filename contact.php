<?php
if(isset($_POST['submit'])){
	//Get form data
	$name = $_POST['name']; 
	$email = $_POST['email'];
	$message = $_POST['message'];
	
    //Email address validation and display error message
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
    if (!preg_match($email_exp, $email)) {
        echo '<br><span style="color:red;">The Email address you entered is not valid.</span>';
		exit;
    }
	
	$to = "bills.hamper476@passinbox.com";  //recipient email address
	$subject = "Test Contact Form";  //Subject of the email
	
	//Message content to send in an email
	$message = "Name: ".$name."<br>Email: ".$email."<br> Message".$message;
	
	//Email headers
	$headers = "From: hello@eviebowerman.com"."\r\n";
	$headers = "CC: someone@example.com";
	$headers .= "Reply-To:".$email."\r\n";
	
	//Send email 
	mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,700|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="style.css">

		<title>Evie Bowerman</title>
	</head>

	<body>
		<!-- Header -->
		<header>
			<!-- Main Navigation menu for Desktop -->
			<nav>
	      <li>
	      	<a href="/">Graphics</a>
	      </li>
	      <li>
	      	<a href="/photos.html">Photography</a>
	      </li>
	      <li>
	      	<a href="/about.html">About</a>
	      </li>
	      <li>
	      	<a href="/contact.php">Contact</a>
	      </li>
    	</nav>
    	<div class="titleName">
    		<h1>Evie Bowerman</h1>
    	</div>
    	
    	<!-- Social Navigation Links and that -->
    	<ul class="navSocial">
    		<li>
	      	<a target="_blank" href="https://www.linkedin.com/in/evie-bowerman-2a56a7232/">
		  			<img class='icon' src="icons/linkedin.png">
		  		</a>
	      </li>
	      <li>
	      	<a target="_blank" href="https://www.instagram.com/bowermandesigns/">
		  			<img class='icon' src="icons/instagram.png">
		  		</a>
	      </li>
	      <li>
	      	<a href="/contact.php">
		  			<img class='icon' src="icons/mail.png">
		  		</a>
	      </li>
    	</ul>

    	<!-- Mobile menu shape -->
    	<div class='mobileNav'>
    		<div class="container" onclick="menuSwitch(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
    	</div>
		</header>

		<!-- Main Div -->
		<main> 
			<!-- Content menu for the mobile devices -->
			<div class="mobileNavContainer" id="menuToggle">
				<!-- General Links -->
				<ul class="mobileNavUl">
	    		<li class="mobileNavLi">
		      	<a href="/">Graphics</a>
		      </li>
		      <li class="mobileNavLi">
		      	<a href="/photos.html">Photography</a>
		      </li>
		      <li class="mobileNavLi">
		      	<a href="/about.html">About</a>
		      </li>
		      <li class="mobileNavLi">
		      	<a href="/contact.php">Contact</a>
		      </li>
	      </ul>

	      <!-- Social Icons-->
	      <ul class="mobileNavUlIcon">
	    		<li>
		      	<a target="_blank" href="https://www.linkedin.com/in/evie-bowerman-2a56a7232/">
			  			<img class='icon bigger' src="icons/linkedin.png">
			  		</a>
		      </li>
		      <li>
		      	<a target="_blank" href="https://www.instagram.com/bowermandesigns/">
			  			<img class='icon bigger' src="icons/instagram.png">
			  		</a>
		      </li>
		      <li>
		      	<a href="/contact.php">
			  			<img class='icon bigger' src="icons/mail.png">
			  		</a>
		      </li>
	    	</ul>
    	</div>

    	<!-- Div container for all the display panels -->
    	<div id="hide">

    		<!-- Contact form -->
    		 <div class="tableContainer">
    		 		<h3 class="contactTitle">Get in touch now!</h3>

    		 		<div class="main-contact-form">
    		 			<form action="#" method="POST">
						    <input type="text" id="name" name="name" placeholder="Your name..." required>
						    <input type="text" id="email" name="email" type="email" placeholder="Your email..." required>

						    <textarea id="message" name="message" type="message" placeholder="Message..." style="height:20rem" required></textarea>

						    <input name="submit" type="submit" value="Submit">
						  </form>
    		 		</div>

					</div> 
			</div>
		</main>

		<!-- Footer area -->
		<footer id="foot">
			<!-- Left side text -->
			<a target="_blank" href="https://www.jbowerman.com/"><h3 class="footerNote">created by jacob</h3></a>

			<!-- Social nav links for the footer -->
			<ul class="footerNavSocial">
    		<li>
	      	<a target="_blank" href="https://www.linkedin.com/in/evie-bowerman-2a56a7232/" target="_blank">
		  			<img class='icon' src="icons/linkedin.png">
		  		</a>
	      </li>
	      <li>
	      	<a target="_blank" href="https://www.instagram.com/bowermandesigns/">
		  			<img class='icon' src="icons/instagram.png">
		  		</a>
	      </li>
	      <li>
	      	<a href="/contact.php">
		  			<img class='icon' src="icons/mail.png">
		  		</a>
	      </li>
    	</ul>
		</footer>

		<!-- JS Section to make the mobile menu funciton and hide the rest of the content when it is active -->
		<script>
			let changed = false;
			function menuSwitch(x) {
			  x.classList.toggle('change');
			  if (changed === false) {
			  	document.getElementById("menuToggle").style.display= "block";
			  	document.getElementById("hide").style.display= "none";
			  	document.getElementById("foot").style.display= "none";
			  	changed = true;
			  } else  {
			  	document.getElementById("menuToggle").style.display= "none";
			  	document.getElementById("hide").style.display= "block";
			  	document.getElementById("foot").style.display= "flex";
			  	changed = false;
			  }
			  
			}
		</script>
	</body>
</html>
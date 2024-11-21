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
	      	<a href="/contact.html">Contact</a>
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
	      	<a href="/contact.html">
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
		      	<a href="/contact.html">Contact</a>
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
		      	<a href="/contact.html">
			  			<img class='icon bigger' src="icons/mail.png">
			  		</a>
		      </li>
	    	</ul>
    	</div>

    	<!-- Div container for all the display panels -->
    	<div id="hide">

    		<!-- Contact form -->
    		 <div class="tableContainer">
    		 		<h3 class="contactTitle">If you fancy getting in touch, drop me a messaging using the form below!</h3>
					  <form action="mailto:apple.deepen015@passinbox.com"
						method="POST"
						enctype="multipart/form-data"
						name="EmailForm">
					    <input type="text" id="name" name="name" placeholder="Your name...">
					    <input type="text" id="email" name="email" placeholder="Your email...">

					    <textarea id="subject" name="subject" placeholder="Message..." style="height:20rem"></textarea>

					    <input type="submit" value="Submit">
					  </form>
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
	      	<a href="/contact.html">
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
    ){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $email = strtolower($email);
        $message = $_POST["message"];


        $to = "apple.deepen015@passinbox.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$name}\nEmail: {$email}\nMessage: {$message}";
        $headers = "From: {$email}";
        
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Important Links -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="https://eviebowerman.com">

    <!-- Links for style sheets -->
    <link rel="stylesheet" href="style.css">

    <!--Add favorites icons-->   
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" href="/icons/evieLogo.png"/>
    <link rel="icon" type="image/x-icon" href="/icons/evieLogo.png"/>

    <!-- Title and Description tags -->
    <title>Graphic Design and Photography Specialist</title>
    <meta name="description" content="Home to all things graphic design and photography. If you're looking to work with me, get in touch now!">
  </head>

  <body>
    <!-- Header -->
    <header>
      <!-- Main Navigation menu for Desktop -->
      <nav class="mainNav">
        <menu class="mainNavMenu">
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
        </menu>
      </nav>

      <!-- Section for the title -->
      <section class="titleName">
        <h1><a href="/">Evie Bowerman</a></h1>
      </section>
      
      <!-- Social Links -->
      <section class="navSocial">
        <menu class="mainSocialsMenu">
          <!-- LinkedIn -->
          <li>
            <a target="_blank" href="https://www.linkedin.com/in/evie-bowerman-2a56a7232/">
              <img class='icon' src="icons/linkedin.png">
            </a>
          </li>
          <!-- Instagram -->
          <li>
            <a target="_blank" href="https://www.instagram.com/bowermandesigns/">
              <img class='icon' src="icons/instagram.png">
            </a>
          </li>
          <!-- Email which sends to the contact page -->
          <li>
            <a href="/contact.html">
              <img class='icon' src="icons/mail.png">
            </a>
          </li>
        </menu>
      </section>

      <!-- Mobile burger menu -->
      <section class='mobileNav'>
        <div class="container" onclick="menuSwitch(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </section>
    </header>

    <!-- Main -->
    <main> 
      <!-- Content menu for the mobile devices -->
      <section class="mobileNavContainer" id="menuToggle">
        <!-- General Links -->
        <menu class="mobileNavUl">
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
        </menu>

        <!-- Social Icons-->
        <menu class="mobileNavUlIcon menuFlex">
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
        </menu>
      </section>

      <!-- Div container for all the display panels -->
      <div id="hide">

        <h3 id="fadeOut" class="contactTitle">
          <?php
            if (mail($to, $subject, $body, $headers)) {
                echo "Message sent successfully! Thanks for getting in touch!";
            } else {
                echo "Failed to send message. Please try again.";
            }
          ?>
        </h3>

        <div class="displayCovers">

          <!-- First Display Panel. Link to the page is the first <a>-->
          <a href="/stitch.html" class="displayLinks">
            <!-- Contains all of the things inside -->
            <div class="displayContentContainer">
              <!-- Bottom Layer Img -->
              <div class="coverImage">
                <div class="cover">
                  <img class="image" src="img/displayImgs/stitchOL.jpg">
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
          <a href="/marble.html" class="displayLinks">
            <!-- Contains all of the things inside -->
            <div class="displayContentContainer">
              <!-- Bottom Layer Img -->
              <div class="coverImage">
                <div class="cover">
                  <img class="image" src="img/displayImgs/marble.jpg">
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
          <a href="/w7.html" class="displayLinks">
            <!-- Contains all of the things inside -->
            <div class="displayContentContainer">
              <!-- Bottom Layer Img -->
              <div class="coverImage">
                <div class="cover">
                  <img class="image" src="img/displayImgs/w7.jpg">
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
          <a href="/label.html" class="displayLinks">
            <!-- Contains all of the things inside -->
            <div class="displayContentContainer">
              <!-- Bottom Layer Img -->
              <div class="coverImage">
                <div class="cover">
                  <img class="image" src="img/displayImgs/label.jpg">
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
          <a href="/wholesomeHarvest.html" class="displayLinks">
            <!-- Contains all of the things inside -->
            <div class="displayContentContainer">
              <!-- Bottom Layer Img -->
              <div class="coverImage">
                <div class="cover">
                  <img class="image" src="img/displayImgs/wholesome.png">
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
          <a href="/doors.html" class="displayLinks">
            <!-- Contains all of the things inside -->
            <div class="displayContentContainer">
              <!-- Bottom Layer Img -->
              <div class="coverImage">
                <div class="cover">
                  <img class="image" src="img/displayImgs/doors.jpg">
                </div>
              </div>
              <!-- Hover over container. Image is displayed as a css background img -->
              <div class="coverTextImage doors">
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
    <footer id="foot">
      <!-- Left side text -->
      <aside>
        <a target="_blank" href="https://www.jbowerman.com/">
          <h3 class="footerNote">created by jacob</h3>
        </a>
      </aside>

      <!-- Social nav links for the footer -->
      <menu class="footerNavSocial">
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
      </menu>
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

      // Function to hide the div
      function hideDiv() {
          var messageDiv = document.getElementById('fadeOut');
          
          // Start fading out
          messageDiv.style.opacity = '0';

          // After the transition, set display to none
          setTimeout(function() {
              messageDiv.style.display = 'none'; 
          }, 500); // Time matches the CSS transition duration
      }

      // Set timeout to trigger the hide function after 3 seconds
      setTimeout(hideDiv, 3000); // 3000 milliseconds = 3 seconds

    </script>
    
    <!-- 100% privacy-first analytics -->
    <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>

  </body>
</html>
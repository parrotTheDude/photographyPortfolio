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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Graphic Design and Photography Specialist</title>
    <meta name="description" content="Home to all things graphic design and photography. If you're looking to work with me, get in touch now!">
    <base href="https://eviebowerman.com">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--Add favorites icons-->
    <link rel="apple-touch-icon" href="/icons/evieLogo.png"/>
    <link rel="icon" type="image/x-icon" href="/icons/evieLogo.png"/>
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

        <h3 class="contactTitle">
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
    
    <!-- 100% privacy-first analytics -->
    <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>

  </body>
</html>
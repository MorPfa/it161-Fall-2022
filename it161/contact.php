<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ArtRegioTours: Contact Form</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="CSS/contact.css" /> 
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="CSS/nav.css" />
    
  </head>
  <body>
      
      <nav class="Navbar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="template.html">
            <img
              src="images/Artregiotours_ART-Logo_355x500-1200x480.jpg"
              class="LogoNav"
            />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="template.html"
            >Home</a
          >
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php"
            >Kontakt</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="group.html">Gruppenangebote</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.html">Aktuelles</a>
        </li>
        <li class="nav-item">
          <a href="tours.html" class="nav-link">Fahrten</a>
        </li>
        <li class="nav-item">
          <a href="program2022.html" class="nav-link">Programm 2022</a>
        </li>
        <li class="nav-item">
          <a href="program2023.html" class="nav-link">Programm 2023</a>
        </li>
        <li class="nav-item">
          <a href="reviews.html" class="nav-link">Reviews</a>
        </li>
      </ul>
    </nav>



    <div class="wrapper">
      
      <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "moritzpfatteicher@yahoo.com";  //place your/your client's email address here
        $toName = "Moritz"; //place your client's name here
        $website = "artregiotours";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
      <footer>
        <p>
          <small
            >&copy; 2022 by <a href="contact.php">Moritz Pfatteicher</a>, All
            Rights Reserved ~ <a id="html-checker" href="#">Check HTML</a> ~
            <a id="css-checker" href="#">Check CSS</a></small
          >
        </p>
      </footer>
    </div>

    <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->

    <script>
      //https://tinyurl.com/dynamic-html-checker
      document
        .getElementById("html-checker")
        .setAttribute(
          "href",
          "https://validator.w3.org/nu/?doc=" + location.href
        );

      document
        .getElementById("css-checker")
        .setAttribute(
          "href",
          "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
        );

      //manages mobile nav
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>

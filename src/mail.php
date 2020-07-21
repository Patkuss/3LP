<?php

$to      = 'autokomplexsos@gmail.com';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html lang="pl">
	<head>
    <meta charset="UTF-8"/>
    <title>AUTO KOMPLEX Warsztat Samochodowy</title>
    <meta name="description" content="Potężne powierzchnie magazynowe oraz w pełni zautomatyzowana logistyka na terenie Polski i Europy z wykorzystaniem współpracujących firm kurierskich.">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="icon" type="images/png" href="images/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <header class="header_area whiteMenu" id="navbar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="3lp logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="about.html">O nas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Usługi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Kontakt</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <section class="banner-area">
      <div class="slide-right">
        <svg class="intro" viewbox="0 0 200 100">
          <text text-anchor="start" x="10" y="30" class="text text-stroke" clip-path="url(#text1)">Warsztat</text>
          <text text-anchor="start" x="10" y="60" class="text text-stroke" clip-path="url(#text2)">Dla</text>
          <text text-anchor="start" x="10" y="90" class="text text-stroke" clip-path="url(#text3)">Ciebie</text>
          <text text-anchor="start" x="10" y="30" class="text text-stroke text-stroke-2" clip-path="url(#text1)">Warsztat</text>
          <text text-anchor="start" x="10" y="60" class="text text-stroke text-stroke-2" clip-path="url(#text2)">Dla</text>
          <text text-anchor="start" x="10" y="90" class="text text-stroke text-stroke-2" clip-path="url(#text3)">Ciebie</text>
          <defs>
            <clipPath id="text1">
              <text text-anchor="start" x="10" y="30" class="text">Warsztat</text>
            </clipPath>
            <clipPath id="text2">
              <text text-anchor="start" x="10" y="60" class="text">Dla</text>
            </clipPath>
            <clipPath id="text3">
              <text text-anchor="start" x="10" y="90" class="text">Ciebie</text>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div id="carouselExampleSlidesOnly" class="carousel slide justify-content-end" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.jpg" class="d-block h-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/2.jpg" class="d-block h-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/3.jpg" class="d-block h-100" alt="...">
          </div>
        </div>
      </div>
    </section>
    <section class="contactArea">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="contact__address">
              <h4>Contact info</h4>
              <ul>
                <li>
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <p><span><a href="mailto:autokomplexsos@gmail.com">autokomplexsos@gmail.com</a></span><span><a href="+48503519572">+48 503 519 572</a></span></p>
                </li>
                <li>
                  <div class="icon">
                    <i class="fa fa-map-marker-alt"></i>
                  </div>
                  <p>ul. Gałczyńskiego 14,<br>52-214 Wrocław</p>
                </li>
                <li>
                  <div class="icon">
                    <i class="fa fa-clock"></i>
                  </div>
                  <p><span>Pon - Sob : 8:00 - 17:00</span><span>Niedziela: Zamknięte</span></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-8 col-md-8">
            <div class="contact__form">
              <h4>Leave a message</h4>
              <form method="post" name="contactform" action="mail.php">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" name="name" id="name" placeholder="Imię" required>
                  </div>
                  <div class="col-lg-6">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <textarea name="message" id="message" placeholder="Wiadomość" required></textarea>
                <button type="submit" class="site-btn">Find an agent</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16869.789137902328!2d17.01919340836122!3d51.05845787678744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e957d4920722a0c!2sAUTO%20KOMPLEX%20Gliwi%C5%84ski%20Jaros%C5%82aw!5e0!3m2!1spl!2spl!4v1595325378799!5m2!1spl!2spl"
        height="400" style="border:0;" allowfullscreen="">
      </iframe>
    </div>
    <footer class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <div class="single-footer-widget">
              <img class="footer-logo" src="images/logo-white.png" alt="auto-komplex logo">
            </div>
          </div>
          <div class="col-2">
            <div class="single-footer-widget">
              <h6>NAWIGACJA</h6>
              <ul>
                <li><a href="about.html">O nas</a></li>
                <li><a href="services.html">Usługi</a></li>
                <li><a href="gallery.html">Galeria</a></li>
                <li><a href="contact.html">Kontakt</a></li>
              </ul>
            </div>
          </div>
          <div class="col-4">
            <div class="single-footer-widget">
              <h6>KONTAKT</h6>
              <ul>
                <li><span><i class="fas fa-phone"></i></span><a href="+48503519572">+48 503 519 572</a></li>
                <li><span><i class="far fa-envelope"></i></span><a href="mailto:autokomplexsos@gmail.com">autokomplexsos@gmail.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-3">
            <div class="single-footer-widget footer-address">
              <h6>Adres</h6>
              <p><span>AUTO KOMPLEX</span></p>
              <p>ul. Gałczyńskiego 14</p>
              <p>52-214 Wrocław</p>
              <p>woj. dolnośląskie</p>
              <p>Polska</p>
            </div>
          </div>
        </div>
        <div class="col-12 text-center copy-text"><p>Copyright © 2020 AUTO KOMPLEX. All rights reserved.</p></div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bipolio</title>
  <meta charset="utf-8">
  <link rel="icon" href="img/website_icon.png" type="image/x-icon">
  <!--Import Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Share+Tech+Mono&display=swap"
    rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <!--Import Animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <?php
  $title = "Osu Fan-Website";
  require "components/navbar.php";
  ?>

  <!--Content-->

  <div class="container row project-content">
    <h1 class="center-align col s12 animate__animated animate__bounceInDown wow">
      <?php $project['title'] ?>
    </h1>
    <div class="carousel-wrapper col s12">
      <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="img/osu_website_screens/p1_preview_1.jpg"
            alt="Osu website preview #1"></a>
        <a class="carousel-item" href="#two!"><img src="img/osu_website_screens/p1_preview_2.jpg"
            alt="Osu website preview #2"></a>
        <a class="carousel-item" href="#three!"><img src="img/osu_website_screens/p1_preview_3.jpg"
            alt="Osu website preview #3"></a>
        <a class="carousel-item" href="#four!"><img src="img/osu_website_screens/p1_preview_4.jpg"
            alt="Osu website preview #4"></a>
      </div>
    </div>
    <div class="card-wrapper col s12 m5 animate__animated animate__fadeInLeft wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">Who made this awesome website?</span>
          <p>This website was made by a team of three people composed by Anaëlle, Esteban and Antoine! It was made as a
            project for the Gaming Campus.</p>
        </div>
      </div>
    </div>
    <div class="card-wrapper col s12 m5 offset-m2 animate__animated animate__fadeInRight wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">Context</span>
          <p>This website is presenting osu! which is a game based on rythm and high speed reflexes. It took us
            approximately one week of hard work.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Parallax -->

  <div class="bottom-gap">
    <div class="parallax-container">
      <div class="parallax"><img src="img/osu_website_screens/osu_parallax.jpg" alt="Osu picture"></div>
    </div>
  </div>



  <div class="container row project-content">
    <div class="card-wrapper col s12 m6 animate__animated animate__rotateInDownLeft wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">What can you learn on our website?</span>
          <p>
            The website presents the basic rules of osu! as well as some facts about the game. You will discover the
            amazing gameplay of the game.
          </p>
        </div>
      </div>
    </div>
    <div class="card-wrapper col s12 m6 offset-m6 animate__animated animate__rotateInDownRight wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">What did we learn making this project?</span>
          <p>
            In the first place, we've learnt that we are able, with a bit of motivation, to learn a lot of skills in
            such a short period of time. In our case, all three of us learnt to code a website in HTML5 and CSS3!
          </p>
        </div>
      </div>
    </div>
    <div class="card-wrapper col s12 m6 animate__animated animate__rotateInDownLeft wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">What were the challenges while making this website?</span>
          <p>
            We didn't know the HTML5 and CSS3 so we had to learn as we went, while under the pressure of only having
            one week to finish the project!
          </p>
        </div>
      </div>
    </div>
  </div>

  <?php require "components/footer.php"; ?>

  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
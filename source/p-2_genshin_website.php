<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bipolio</title>
  <meta charset="utf-8">
  <link rel="icon" href="img/website_icon.png" type="image/x-icon">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
  $title = "Genshin Impact Fan-Website";
  require "components/navbar.php";
  ?>

  <h1 class="center-align animate__animated animate__bounceInDown wow">Black Drift's Team Project :</h1>
  <h2 class="center-align animate__animated animate__bounceInUp">A Genshin Impact (Fan-Made) Website</h2>

  <!-- Website's Carousel -->
  <div class="container bottom-gap">
    <div class="carousel">
      <a class="carousel-item"><img src="img/genshin_screen/p2_screen_char.jpg"
          alt="Character menu from website screenshot"></a>
      <a class="carousel-item"><img src="img/genshin_screen/p2_screen_weapon.jpg"
          alt="Weapon menu from website screenshot"></a>
      <a class="carousel-item"><img src="img/genshin_screen/p2_screen_teyvat.jpg" alt="Teyvat info from website"></a>
    </div>
  </div>

  <!-- Page Content -->
  <div class="row container">
    <div class="card secondary-color">
      <div class="card-content white-text">
        <span class="card-title">About the project :</span>
        <p>This project has been given to our class to be the first one of the year, and Nattan and me dicided at
          first to
          find a game in common, and the name of Genshin came quite fast to be honest. So then we got started with it
          !
        </p>
      </div>
    </div>

    <div class="card secondary-color">
      <div class="card-content white-text">
        <span class="card-title">About the website itself :</span>
        <p>We figured out what needed to be on the site : we needed to make it like the in-game archive with most
          possible
          informations condensed on only one page so we tried our best, made sacrifices, and tried to look like a
          really
          good HTML/CSS only fansite, and we did it actually ! It looks really nice and all, we're very proud of it !
        </p>
      </div>
    </div>

    <div class="card secondary-color">
      <div class="card-content white-text">
        <span class="card-title">Contraints :</span>
        <p>We had real contraints because of the time and the use of only HTML and CSS languages: for charcaters, we
          couldn't stack more than seven characters per line, which made it
          even
          quite painful because we could put on our website a total of 45 characters (instead of the 56 actually
          playable)
          and we had to redirect to the french "official" fansite of the game to get the complete list of weapons and
          more
          info about them. We also couldn't put the characters' build, because of the complexity of it all and the
          short
          period of time... but it's actually great despite all these hard times and choices !</p>
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
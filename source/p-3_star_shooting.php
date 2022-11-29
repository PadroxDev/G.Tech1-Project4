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
  $title = "Star Shooting Alliance";
  require "components/navbar.php";
  ?>

  <!-- Content -->

  <div class="container row project-content">
    <h1 class="center-align col s12 animate__animated animate__bounceInDown wow">
      Brackeys Game Jam 2022.2
    </h1>
    <div class="carousel-wrapper col s12">
      <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="img/ssa_screens/p3_preview_1.jpg"
            alt="Star Shooting Alliance in-game"></a>
        <a class="carousel-item" href="#two!"><img src="img/ssa_screens/p3_preview_2.jpg"
            alt="Star Shooting Alliance main menu"></a>
        <a class="carousel-item" href="#three!"><img src="img/ssa_screens/p3_preview_3.jpg"
            alt="Star Shooting Alliance inventory"></a>
      </div>
    </div>
    <div class="card-wrapper col s12 m5 animate__animated animate__fadeInLeft wow">
      <div class="card card-changer valign-wrapper white">
        <div class="card-content black-text">
          <span class="card-title">What is Star Shooting Alliance?</span>
          <p>
            Star Shooting Alliance (SSA) is a Space Shooter game made by Padrox for the Brackeys Game Jam 2022.2 which
            lasted an entire week!
          </p>
        </div>
      </div>
    </div>
    <div class="card-wrapper col s12 m5 offset-m2 animate__animated animate__fadeInRight wow">
      <div class="card card-changer valign-wrapper white">
        <div class="card-content black-text">
          <span class="card-title">How was it made?</span>
          <p>The game was made with Unity in C# entirely by Padrox except the assets which come from an artist called <a
              href="https://twitter.com/finalbossblues?" rel="nofollow" target="_blank">@finalbossblues</a>.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Parallax -->

  <div class="bottom-gap">
    <div class="parallax-container">
      <div class="parallax"><img src="img/ssa_screens/ssa_parallax.jpg" alt="Galaxy Parallax"></div>
    </div>
  </div>

  <div class="container row project-content">
    <div class="card-wrapper col s12 m6 animate__animated animate__backInRight wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">How SSA was born?</span>
          <p>
            The game jam theme was "You are not alone", so the idea of the game was to recruit allies to get stronger to
            fight invading enemies who are getting even stronger each fight. Get allies to overcome difficulties!
          </p>
        </div>
      </div>
    </div>
    <div class="card-wrapper col s12 m6 offset-m6 animate__animated animate__backInLeft wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">What challenges did I encounter?</span>
          <p>This was a really difficult week because I was always under pressure. I aimed to something way to hard for
            my first game jam. I ran out of time and had no choice to give up on sounds. It was a really interesting
            experience still and I can't wait to participate to my next Jam!</p>
        </div>
      </div>
    </div>
    <div class="card-wrapper col s12 m6 animate__animated animate__backInRight wow">
      <div class="card card-changer valign-wrapper secondary-color">
        <div class="card-content black-text">
          <span class="card-title">Where can you play the game?</span>
          <p>The game is available as free to play on my itch.io page: <a href="https://itch.io/search?q=PadroxDev"
              target="_blank" rel="nofollow">PadroxDev</a>! Feel free to test it out!</p>
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
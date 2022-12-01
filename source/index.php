<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bipolio</title>
  <meta charset="utf-8">
  <link rel="icon" href="img/website_icon.png" type="image/x-icon">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Raleway:wght@900&display=swap" rel="stylesheet">
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
  require "queries/get_all_projects_home_data.php";
  require "queries/get_home_page.php";
  

  $title = $home_page['title'];
  require "components/navbar.php";
  ?>

  <!-- Page Title -->

  <h1 class="center-align animate__animated animate__backInDown"> <?php echo $home_page['h1'] ?> </h1>

  <!-- Projects' Carousel -->

  <div class="container bottom-gap fall-protected">
    <div class="carousel fall-protected">
      <?php foreach($projects_home_data as $p_data) { ?>
        <a class="carousel-item fall-protected"><img src= <?php echo $p_data['h_img'] ?> alt="Project Preview"></a>
      <?php }; ?>
    </div>
  </div>

  <!-- Projects -->
  
  <?php
  $i = 0;
  foreach($projects_home_data as $p_data) { 
    $i++; ?>
    <div class="container bottom-gap fall-protected" id=<?php echo "details-".($i-1) ?>>
      <div class="row carousel-selection fall-protected">
        <h2 class="share-tech-mono bold underline col s12 animate__animated animate__backInLeft">
          <?php echo $p_data['h_title'] ?>
        </h2>
  
        <div class="row fall-protected">
          <div class="col s12 m6 animate__animated animate__backInLeft fall-protected">
            <div class="card white valign-wrapper home-project-card fall-protected">
              <div class="card-content balck-text fall-protected">
                <p>
                  <?php echo $p_data['h_p1'] ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 animate__animated animate__backInRight fall-protected">
            <div class="card white valign-wrapper home-project-card fall-protected">
              <div class="card-content black-text fall-protected">
                <p>
                  <?php echo $p_data['h_p2'] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="learn-more-button center-align fall-protected">
        
        <a class="animate__animated pulse waves-effect waves-light btn pink lighten-3" href=<?php 'project_page.php?id='.$i ?> ><i
            class="material-icons left">blur_on</i>More Info</a>
      </div>
    </div>
  <?php } ?>
  </div>

  <?php
  /*

  <div class="container bottom-gap fall-protected" id="details-1">
    <div class="row carousel-selection fall-protected">
      <h2 class="share-tech-mono bold underline col s12 animate__animated animate__backInLeft">
        Genshin Impact Website
      </h2>

      <div class="row fall-protected">
        <div class="col s12 m6 animate__animated animate__bounceInUp fall-protected">
          <div class="card white valign-wrapper home-project-card fall-protected">
            <div class="card-content balck-text fall-protected">
              <p>
                A Genshin Impact general site made by Black's team.
                Explore the website if you want to learn more about this game!
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 animate__animated animate__bounceInDown fall-protected">
          <div class="card white valign-wrapper home-project-card fall-protected">
            <div class="card-content black-text fall-protected">
              <p>
                The team for this project was a 2-people team :<br>- Vianney "Black Drift"<br>- Nattan<br>Both of them
                are in
                the same class, and were together for the project, Vianney was more in charge of the content while
                Nattan was
                more in charge of the form side, either
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="learn-more-button center-align fall-protected">
      <a class=" waves-effect waves-light indigo darken-3 btn animate__animated pulse wow"
        href="p-2_genshin_website.php"><i class="material-icons left">blur_on</i>More Info</a>
    </div>
  </div>

  <!-- Project 3 -->

  <div class="container bottom-gap fall-protected" id="details-2">
    <div class="row carousel-selection fall-protected">
      <h2 class="share-tech-mono bold underline col s12 animate__animated animate__backInLeft fall-protected">
        Star Shooting Alliance
      </h2>

      <div class="row fall-protected">
        <div class="col s12 m6 animate__animated animate__rollIn fall-protected">
          <div class="card white valign-wrapper home-project-card fall-protected">
            <div class="card-content balck-text fall-protected">
              <p>
                This game was made and published by Antoine for the Brackeys Game Jam 2022.2.
                It was made using the Unity Game Engine.
                Every assets come from an artist called @finalbossblues!
                It's a space shooter where you have to fight against incoming enemies who are getting stronger each
                fight.
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 animate__animated animate__rollIn fall-protected">
          <div class="card white valign-wrapper home-project-card fall-protected">
            <div class="card-content black-text fall-protected">
              <p>
                The game jam theme was "You're not alone", the idea is to earn gold by beating enemies and then you can
                summon
                allies to go fight together. Allies can provide passive and actives abilities to defeat stronger
                enemies! The
                game is available on my itch.io page: <a href="https://itch.io/search?q=PadroxDev" target="_blank"
                  rel="nofollow">PadroxDev</a> ;)
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="learn-more-button center-align fall-protected">
      <a class="animate__animated pulse waves-effect waves-light deep-purple btn" href="p-3_star_shooting.php"><i
          class="material-icons left">blur_on</i>More Info</a>
    </div>
  </div>
  */
  ?>

  <!-- Parallax -->

  <div class="bottom-gap fall-protected">
    <div class="parallax-container fall-protected">
      <div class="parallax fall-protected"><img class="fall-protected" src= <?php echo $home_page['parallax'] ?> 
          alt="Bipolio Portfolio Systems"></div>
    </div>
  </div>

  <!-- About -->

  <div class="row fall-protected" id="about">
    <div class="card col s12 m5 l5 card-easter-egg fall-protected">
      <div class="card-image waves-effect waves-block waves-light fall-protected">
        <img class="activator vpic rickroll-left" src= <?php echo $home_page['img_1'] ?> alt='Portfolio Vianney "Black Drift" FOVET'>
      </div>
      <div class="card-content fall-protected">
        <span class="card-title activator grey-text text-darken-4"> <?php echo $home_page['name_1'] ?> <i
            class="material-icons right">build</i></span>
        <p><a href= <?php echo $home_page['linktree_1'] ?> target="_blank" rel="nofollow">Linktree</a></p>
      </div>
      <div class="card-reveal fall-protected">
        <span class="card-title grey-text text-darken-4"> <?php echo $home_page['card_title1'] ?> <i
            class="material-icons right">close</i></span>
        <p>
          <?php echo $home_page['content_1'] ?> 
        </p>
        <p><a href= <?php echo $home_page['linktree_1'] ?> target="_blank">Linktree</a></p>
      </div>
    </div>
    <div class="card col s12 m5 l5 offset-l2 offset-m2 card-easter-egg fall-protected">
      <div class="card-image waves-effect waves-block waves-light fall-protected">
        <img class="activator vpic rickroll-right" src= <?php echo $home_page['img_2'] ?> alt="Antoine VOLLET">
      </div>
      <div class="card-content fall-protected">
        <span class="card-title activator grey-text text-darken-4"> <?php echo $home_page['name_2'] ?><i
            class="material-icons right">build</i></span>
        <p><a href= <?php echo $home_page['linktree_2'] ?> target="_blank" rel="nofollow">Linktree</a></p>
      </div>
      <div class="card-reveal fall-protected">
        <span class="card-title grey-text text-darken-4"> <?php echo $home_page['card_title2'] ?> :<i
            class="material-icons right">close</i></span>
        <p>
          <?php echo $home_page['content_2'] ?> 
        </p>
        <p><a href= <?php echo $home_page['linktree_2'] ?> target="_blank" rel="nofollow">Linktree</a></p>
      </div>
    </div>
  </div>

  <?php require "components/footer.php" ?>

  <!--JavaScript at end of body for optimized loading-->
  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
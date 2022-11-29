<!-- VARIABLES
projectTitle: The title of the project
carouselImages: need to call the query
c1_title: title of the card
c1_content: content of the card
c2_title: title of the card
c2_content: content of the card
c3_title: title of the card
c3_content: content of the card
c4_title: title of the card
c4_content: content of the card
c5_title: title of the card
c5_content: content of the card
parallax_path: the path of the parallax
-->

<?php
require "../queries/get_project.php";
require "../queries/get_carousel.php";
$carouselHashes = array(
    1 => "#one!",
    2 => "#two!",
    3 => "#three!",
    4 => "#four!",
    5 => "#five!",
    6 => "#six!",
    7 => "#seven!",
    8 => "#height!",
    9 => "#nine!",
    10 => "#ten!"
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bipolio | <?php echo $project['project_name'] ?> </title>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/website_icon.png" type="image/x-icon">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Share+Tech+Mono&display=swap"
    rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css">
    <!--Import style.css-->
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <!--Import Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <!-- NAVBAR -->
    <?php
    $title = $project['project_name'];
    require "navbar.php";
    ?>

    <!-- CONTENT -->
    <div class="container row project-content-1">
        <h1 class="center-align col s12 animate__animated animate__bounceInDown wow">
            <?php echo $project['h1'] ?>
        </h1>
        <div class="carousel-wrapper col s12">
            <div class="carousel">
                <?php
                $i = 1;
                foreach($carousel as $carousel_image) { ?>
                    <a class="carousel-item" href= <?php echo $carouselHashes[$i] ?> >
                        <img src= <?php echo $carousel_image['path'] ?> alt= <?php echo "Project_preview_#".$i ?> >
                    </a>
                    <?php $i++;
                } ?>
            </div>
        </div>
        <div class="card-wrapper not-full col s12 m5 animate__animated animate__fadeInLeft wow">
            <div class="card card-changer valign-wrapper secondary-color">
                <div class="card-content black-text">
                    <h2 class="card-title"><?php echo $project['c1_title'] ?></h2>
                    <p><?php echo $project['c1_content'] ?></p>
                </div>
            </div>
        </div>
        <div class="card-wrapper not-full col s12 m5 offset-m2 animate__animated animate__fadeInRight wow">
            <div class="card card-changer valign-wrapper secondary-color">
                <div class="card-content black-text">
                    <h2 class="card-title"><?php echo $project['c2_title'] ?></h2>
                    <p> <?php echo $project['c2_content'] ?> </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Parallax -->

    <div class="bottom-gap">
        <div class="parallax-container">
            <div class="parallax"><img src=<?php echo $project['parallax_path'] ?> alt="Osu picture"></div>
        </div>
    </div>

    <div class="container row project-content-2">
        <div class="card-wrapper not-full col s12 m6 animate__animated animate__rotateInDownLeft wow">
            <div class="card card-changer valign-wrapper secondary-color">
                <div class="card-content black-text">
                    <h2 class="card-title"> <?php echo $project['c3_title'] ?> </h2>
                    <p> <?php echo $project['c3_content'] ?> </p>
                </div>
            </div>
        </div>
        <div class="card-wrapper not-full col s12 m6 offset-m6 animate__animated animate__rotateInDownRight wow">
            <div class="card card-changer valign-wrapper secondary-color">
                <div class="card-content black-text">
                    <h2 class="card-title"> <?php echo $project['c4_title'] ?> </h2>
                    <p> <?php echo $project['c4_content'] ?> </p>
                </div>
            </div>
        </div>
        <div class="card-wrapper full col s12 m6 animate__animated animate__rotateInDownLeft wow">
            <div class="card card-changer valign-wrapper secondary-color">
                <div class="card-content black-text">
                    <h2 class="card-title"> <?php echo $project['c5_title'] ?> </h2>
                    <p> <?php echo $project['c5_content'] ?> </p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php require "footer.php"; ?>

    <!--JavaScript at end of body for optimized loading-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="../js/script.js"></script>

</body>
</html>
<?php
require "queries/get_all_projects.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    <!-- Dropdowns Structure -->

    <ul id="projects-dropdown-1" class="dropdown-content main-color">
        <?php
        foreach($projects as $proj) { ?>
            <li><a href= <?php echo "project_page.php?id=".$proj['project_id'] ?> > <?php echo $proj['project_name'] ?> </a></li>
            <?php if (end($projects) != $proj) { ?> <li class="divider"></li> <?php }
        } ?>
    </ul>

    <ul id="projects-dropdown-2" class="dropdown-content main-color">
        <?php
        foreach($projects as $proj) { ?>
            <li><a href= <?php echo "components/project_page.php?id=".$proj['project_id'] ?> > <?php echo $proj['project_name'] ?> </a></li>
            <?php if (end($projects) != $proj) { ?><li class="divider"></li> <?php }
        } ?>
    </ul>

    <!-- Navigation: Large Screens -->

    <div class="navbar-fixed fall-protected">
    <nav class="navbar-parent fall-protected main-color">
        <div class="nav-wrapper fall-protected">
        <a href="" id="welcome" class="brand-logo welcome share-tech-mono"><?php echo $title ?></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger navbar-child"><i
            class="material-icons">menu</i></a>

        <ul class="right teko bold hide-on-med-and-down fall-protected">
            <li><a class="waves-effect waves-light" href="index.php"><i class="material-icons">home</i></a></li>
            <li>
            <a class="dropdown-trigger waves-effect waves-light" href="#" data-target="projects-dropdown-1"> Projects
                <i class="material-icons right">arrow_drop_down</i>
            </a>
            </li>
            <li><a class="waves-effect waves-light" href="index.php#about">About Us</a></li>
            <li><a class="contact-button waves-effect waves-light modal-footer" href="#!">Contact</a></li>*
            <li><a class="waves-effect waves-light" href="<?php require 'connect.php'?>"></a></li>
        </ul>
        </div>
    </nav>
    </div>

    <!-- Navigation: Mobile View -->

    <ul class="menu sidenav fall-protected" id="mobile-demo">
    <li><a class="waves-effect waves-apple" href="#">Home</a></li>
    <li>
        <a class="dropdown-trigger waves-effect waves-apple" href="#" data-target="projects-dropdown-2">
        Projects
        <i class="material-icons right">arrow_drop_down</i>
        </a>
    </li>
    <li><a class="waves-effect waves-apple" href="#about">About Us</a></li>
    <li><a class="contact-button waves-effect waves-apple" href="#!">Contact Us</a></li>
    </ul>
</body>
</html>
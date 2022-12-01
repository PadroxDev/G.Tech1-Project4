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
            <li><a class="contact-button waves-effect waves-light modal-footer" href="#!">Contact</a></li>
            <li><a class="waves-effect waves-light modal-trigger" href="#signin">Sign in</a></li>
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
    
    <div id="signin" class="modal">
        <div class="modal-content">
            <h4>Sign in</h4>
            <form method="post" action="action/login.php">
                <p>A bunch of text</p>
                <input type='email' name='email' />
                <p>A bunch of text</p>
                <input type='password' name='password' />
                <p>A bunch of text</p>
                <a class="modal-trigger" href="#signup">New here ? Create an account</a>
            </form>
        </div>
        <div class="modal-footer">
            <input type='submit' value='Me connecter' />
        </div>
    </div>

    <div id="signup" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <form method="post" action="action/signup.php">
                <input type='email' name='email' />
                <input type='password' name='password' />
                <input type='text' name='username' />
                <input type='text' name='firstname'/>
                <input type='text' name='lastname' />
                <input type='submit' value="Sign up" />
            </form>
            <p>A bunch of text</p>
            </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Sign up</a>
        </div>
    </div>
        



</body>
</html>
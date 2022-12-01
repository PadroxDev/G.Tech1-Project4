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
            <li><a class="contact-button waves-effect waves-light modal-footer" href="#contact">Contact</a></li>
            <?php if (!isset($_SESSION['user'])) { ?>
            <li><a class="waves-effect waves-light modal-trigger" href="#signin">Sign in</a></li>
            <?php };
            //if (isset($_SESSION['user'])) { ?>
            <!-- <li>
                <form>
                    <input type="submit" action="action/logout.php" value='Log out' />
                </form>
            </li> -->
            <?php //};
            if (isset($_SESSION['user']['admin']) && $_SESSION['user']['admin']==1) { ?>
            <li><a class="waves-effect waves-light" href="admin_page.php">Access to Admin panel</a></li>
            <?php }; ?>
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
    <li><a class="contact-button waves-effect waves-apple" href="index.php#about">Contact Us</a></li>
    </ul>
    
    <div id="signin" class="modal">
        <div class="modal-content">
            <h4>Sign in</h4>
            <form method="post" action="action/login.php">
                <p>Your e-mail address</p>
                <input type='email' name='email' />
                <p>Password</p>
                <input type='password' name='password' />
                <input type='submit' value='Me connecter' />
            </form>
        </div>
        <div class="modal-footer">
            <a class="modal-trigger" href="#signup">New here ? Create an account</a>
        </div>
    </div>

    <div id="signup" class="modal">
        <div class="modal-content">
            <h4>Sign up !</h4>
            <form method="post" action="action/signup.php">
                <p>Your e-mail adress</p>
                <input type='email' name='email' />
                <p>Your password (keep it secret ;) )</p>
                <input type='password' name='password' />
                <p>Your username</p>
                <input type='text' name='username' />
                <p>Your first name</p>
                <input type='text' name='firstname'/>
                <p>Your last name</p>
                <input type='text' name='lastname' />
                <input type='submit' value="Sign up" />
            </form>
        </div>
    </div>
    
    <div id="contact" class="modal bottom-sheet fall-protected">
      <div class="modal-content fall-protected">
        <form method="post" action="action/send_email.php">
          <label class="valign-wrapper fall-protected"> <i class="small material-icons left fall-protected">perm_identity</i> First Name/Last Name</label>
          <input class="fall-protected" type="text" placeholder="First Name/Last Name..." name="name"><br>
          <label class="valign-wrapper fall-protected"> <i class="small material-icons left fall-protected">email</i> Your email </label>
          <input class="fall-protected" type="text" placeholder="e-mail adress..." name="email"><br>
          <label class="fall-protected valign-wrapper"> <i class="small material-icons left fall-protected">edit</i> What can we do for you ? </label>
          <textarea class="materialize-textarea fall-protected" placeholder="Your message..." name="content"></textarea>
          <button type="submit" value="Send"><i class="material-icons left fall-protected">check_box</i></button>
        </form>
      </div>
    </div>



</body>
</html>
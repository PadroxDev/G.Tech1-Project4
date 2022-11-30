<?php require_once "config.php"; ?>
<html>
 <head>
 </head>
 <body>
  <?php require "menu.php"; ?>
  <h1>Connexion</h1>
  <form method="post" action="action/login.php">
    <input type='email' name='email' />
    <input type='password' name='password' />
    <input type='submit' value='Me connecter' />
  </form>
 </body>
</html>
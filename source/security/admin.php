<?php 
if (!isset($_SESSION['admin'])==1) || ($_SESSION['user']['admin']==0){
    header ('Location : ../index.php');
    exit();
};
?>
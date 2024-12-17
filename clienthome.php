<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>For admin</title>
    <?php
    include 'client_css.php';
    ?>
</head>
<body>
    <?php
    include 'client_side.php';
    ?>
       
</body>
</html>
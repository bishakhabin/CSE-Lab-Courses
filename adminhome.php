<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='client')
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
    include 'admin_css.php';
    ?>
    
</head>
<body>
<?php
    include 'admin_side.php';
    ?>
            <div class="content">
                <h1>Admin Dashboard</h1>
                </div>
            
</body>
</html>
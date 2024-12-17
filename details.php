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
$host="localhost";
$user="root";
$password="";
$db="ice_db";

$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM details";
$result=mysqli_query($data,$sql);

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
        <center>
        <h1>For Customer Details</h1>
        <table border="1px">
            <tr>
                <th style="padding:20px;font-size:15px;">Name</th>
                <th style="padding:20px;font-size:15px;">Email</th>
                <th style="padding:20px;font-size:15px;">Phone</th>
                <th style="padding:20px;font-size:15px;">Message</th>

            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {
            ?>
            <tr>
                <td style="padding:20px;">
                    <?php echo"{$info['name']}";?>
                </td>
                <td style="padding:20px;">
                <?php echo"{$info['email']}";?>
                </td>
                <td style="padding:20px;">
                <?php echo"{$info['phone']}";?>
                </td>
                <td style="padding:20px;">
                <?php echo"{$info['message']}";?>
                </td>
                </tr>
                <?php
            }
            ?>
        </table>
</center>

        </div>
            
            
</body>
</html>
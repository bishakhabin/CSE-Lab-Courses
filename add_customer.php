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

if(isset($_POST['add_customer']))
{
    $username=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype="client";
    $check="SELECT * FROM user WHERE username='$username'";
    $check_user=mysqli_query($data,$check);
    $row_count=mysqli_num_rows($check_user);
    if($row_count==1)
    {
        echo"<script type='text/javascript'>
    alert('Username Already Exist.Try another one');
    </script>";
    }

    else{

    $sql="INSERT INTO user (username,email,phone,usertype,password)
    VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        echo"<script type='text/javascript'>
    alert('Uploaded');
    </script>";
    }

    else{
        echo "Uploaded failed!!!!";
    }
}
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>For admin</title>
    <style type="text/css">
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: lavender;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        </style>
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
                <h1>Add Customer</h1>
                <div class="div_deg">
                    <form action="#" method="POST">
                        <div>
                            <label>Username</label>
                            <input type="text" name="name">
                            </div>

                            <div>
                            <label>Email</label>
                            <input type="text" name="email">
                            </div>

                            <div>
                            <label>Phone</label>
                            <input type="number" name="phone">
                            </div>

                            <div>
                            <label>Password</label>
                            <input type="password" name="password">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" name="add_customer" value="Add Customer">
                                </div>

                    </form>
                    </div>
                    </center>
                </div>
            
</body>
</html>
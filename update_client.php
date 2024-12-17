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

$id=$_GET['client_id'];

$sql="SELECT * FROM user WHERE id='$id'";
$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id'";

    $result2=mysqli_query($data,$query);

    if($result2){
        header("location:view_cus.php");
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
<>
<?php
    include 'admin_side.php';
    ?>
            <div class="content">
                <center>
                <h1>Updating!!</h1>
                <div class="div_deg">
                    <form action="#" method="POST" >
                        <div>
                            <label>Username</label>
                            <input type="text" name="name" value="<?php echo"{$info['username']}" ?>">
                            </div>
                            <div>
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo"{$info['email']}" ?>">
                            </div>

                            <div>
                            <label>Phone</label>
                            <input type="number" name="phone" value="<?php echo"{$info['phone']}" ?>">
                            </div>

                            <div>
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo"{$info['password']}" ?>">
                            </div>
                            <div>
                                <input class="btn btn-success" type="submit" name="update" value="Update">
                        </form>
                        
                    </div>
    </center>
                </div>
            
</body>
</html>
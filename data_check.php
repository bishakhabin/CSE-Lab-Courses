<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="ice_db";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}
if(isset($_POST['apply']))
{
    $data_name=$_POST['name'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];
    $sql="INSERT INTO details(name,email,phone,message)
    VALUES ('$data_name','$data_email','$data_phone','$data_message')";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']="your details submitted!!";
        header("location:index.php");
    }

    else{
        echo "Didn't get your details.";
    }
}
?>
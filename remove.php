<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="ice_db";

$data=mysqli_connect($host,$user,$password,$db);
if($_GET['client_id'])
{
    $user_id=$_GET['client_id'];
$sql="DELETE FROM user WHERE id=$user_id";
$result=mysqli_query($data,$sql);

if($result)
{
    $_SESSION['message']='Removed successfully!!!!';
    header("location:view_cus.php");

}
}
?>
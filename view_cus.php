<?php
error_reporting(0);
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
$sql="SELECT * FROM user WHERE usertype='client'";
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
    <style type="text/css">
        .table_th
        {
            padding:20px;
            font-size:20px;
            background-color: pink;
        }
        .table_td{
            padding: 20px;
            background-color: lavender;
        }
        </style>
    
</head>
<body>
<?php
    include 'admin_side.php';
    ?>
            <div class="content">
                <>
                <h1>Customer Data</h1>
                <?php
                if($_SESSION['message'])
                {
                    echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
                ?>
                <br><br>
                <table border="1px">
                    <tr>
                        <th class="table_th">Username</th>
                        <th class="table_th">Email</th>
                        <th class="table_th">Phone</th>
                        <th class="table_th">Password</th>
                        <th class="table_th">Remove</th>
                        <th class="table_th">Update</th>
                        </tr>
                        <?php
                        while($info=$result->fetch_assoc())
                        {
                        ?>
                        <tr>
                            <td class="table_td">
                                <?php echo "{$info['username']}" ?>
                            </td>
                            <td class="table_td">
                            <?php echo "{$info['email']}" ?>
                            </td>
                            <td class="table_td">
                            <?php echo "{$info['phone']}" ?>
                            </td>
                            <td class="table_td">
                            <?php echo "{$info['password']}" ?>
                            </td>
                            <td class="table_td">
                            <?php echo "<a onClick=\"javascript:return confirm('Do you want to remove this?');\"
                            class='btn btn-danger' 
                            href='remove.php?client_id={$info['id']}'>Remove</a>"; ?>
                            </td>
                            <td class="table_td">
                            <?php echo "<a class='btn btn-primary'
                             href='update_client.php?client_id={$info['id']}'> Update</a>";?>
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
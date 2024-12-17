<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo"<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>



<!DOCTYPE html>
<html>
    <head>
    <meta  charset="utf-8">
    <title>Ice-cream Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>

    <nav>
        <label class="logo">Ice_cream For you</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Orders</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>  
        </ul>
    </nav>
    <div class="section1">
        <label class="img_text">Selling Ice-cream is our happiness</label>
<img class="main_img" src="bg.png">
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img"src="about.jpg">
                </div>
                <div class="col-md-8">
                    <h1>About our shop</h1>
                    <p>Discover a world of flavor at Ice-Cream for you, where every bite is a moment of joy. We pride ourselves on crafting premium, homemade ice cream using the freshest ingredients and bold, unique flavors.
                    Whether you're in the mood for a classic scoop or an adventurous creation, we've got something for everyone.
                    Sweet Scoops started with a simple dream: to make ice cream thats more than just dessert—it's an experience. Our family-run shop has been delighting taste buds since 2021, and we've loved every moment of it.
                    Make your next party unforgettable with Sweet Scoops! From weddings and birthdays to corporate events, our mobile ice cream cart brings the magic straight to you.
                    Follow us on social media for updates on new flavors and special events:
                        [Instagram] | [Facebook] | [Twitter]</p>

                    </div>

                    <center>
                        <h1>Our Ice-cream</h1>
                    </center>
                    <div class="container">
                        <div class="row">
                            
                        <div class="col-md-4">
                            <img class="ice" src="choco.jpg">
                            <p>Chocolate Scoop</p>

                        </div>
                        
                        <div class="col-md-4">
                        <img class="ice" src="mint.jpg">
                        <p>Mint Scoop</p>

                            </div>
                           
                            <div class="col-md-4">
                            <img class="ice" src="straw.jpg">
                            <p>Strawberry Scoop</p>
                        </div>
                            </div>
                            </div>
                            <center>
                        <h1>Most Demanding</h1>
                    </center>
                    <div class="container">
                        <div class="row">
                            
                        <div class="col-md-4">
                            <img class="ice" src="most1.jpg">
                            <h1>Chocolate Tub</h1>

                        </div>
                        
                        <div class="col-md-4">
                        <img class="ice" src="most2.jpg">
                        <h1>Strawberry Tub</h1>

                            </div>
                           
                            <div class="col-md-4">
                            <img class="ice" src="most3.jpg">
                            <h1>Dark Chocolate Tub</h1>

                                 </div>
                            </div>
                            </div>    
                <center>
                    <h1 class="det">Your Details</h1>
                    </center>
                    <div align="center" class="details">
                        <form action="data_check.php" method="POST" >
                            <div class="yourdetails">
                                <label class="label_text">Name</label>
                                <input class="input_deg" type="text" name="name">
                                </div>
                                <div class="yourdetails">
                                <label class="label_text">Email</label>
                                <input class="input_deg"  type="text" name="email">
                                </div>
                                <div class="yourdetails">
                                <label class="label_text">Phone</label>
                                <input class="input_deg" type="text" name="phone">
                                </div>
                                <div class="yourdetails">
                                <label class="label_text">Message</label>
                                <textarea class="input_txt" name="message"></textarea>
                                </div>
                                <div class="yourdetails">
                                    <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
                                    </div>

                            </form>   
                            </div>  
                            <footer>
                                <h3 class="footer-text">All @copyright reserved by Ice_creambd</h3>
                                </footer>                       

        </body>
    </html>
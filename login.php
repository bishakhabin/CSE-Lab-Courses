<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body background="bn.png" class="body_deg">

        <center>
            <div class="form_deg">
                <center class="title_deg">
                    Login Here!!!
                    <h4>
                        <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                        ?>
                        </h4>
                    </center>
                <form action="login_check.php" method="POST" class="login_form">
                    <div>
                        <label class="label_deg">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <label  class="label_deg">Password</label>
                        <input type="Password" name="password">
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" name="submit" value="Login">
                            </div>
                    </form>
                </div>
            </center>

        </body>
</html>
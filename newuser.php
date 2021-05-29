<?php
include("header.php");
$connection = new mysqli("localhost","root","","ovs");

if (isset($_REQUEST['submit'])){
   $SQL = "INSERT INTO newuser(username,email,password) VALUES('$_REQUEST[username]','$_REQUEST[email]','$_REQUEST[password]')"; 
   $SQLEx = $connection->query($SQL);
   echo '<script>alert("insert is done")</script>';

}  
else
{
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lognew.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-dark text-white">
<div class="p-3 mb-2 bg-dark text-white">
<!--<h1 id="ovs" align="center">Online Ovting System</h1>-->
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 p-3 mb-2 bg-dark text-white">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">New User</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <div><input type="submit" name="submit" class="btn btn-info btn-md" value="submit"></div>
                            <div id="register-link" class="text-right">
                                <a href="index.php" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
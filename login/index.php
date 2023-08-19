<?php
include("indexbackend.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conductor login page | svarjit</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <nav>
        <a href="#"><img src="https://www.pngkey.com/png/full/22-229425_logo-netflix-conductor-logo.png" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="indexbackend.php" method="post">
            <div class="form-control">
                <input id="username" name="username" type="text" required>
                <label>username</label>
            </div>
            <div class="form-control">
                <input id="password" name="password" type="password" required>
                <label>Password</label>
            </div>
            <button type="submit">Sign In</button>
            <div class="form-help"> 
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <a href="#">Need help?</a>
            </div>
        </form>
        <p>New to conductor? <a href="#">Sign up now</a></p>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot. 
            <a href="#">Learn more.</a>
        </small>
    </div>
</body>
</html>
<?php
// session_start();
include "connect.php";

?>

<link rel="stylesheet" href="login2.css">

<div class="background">
<div class="login-form" id="login-form">

        <form action="front.php" method="POST" class="login-container" id="loginForm">

    <div class="image-container">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
    </div>
        

        <label class="lable" for="username">Username</label>
        <input type="text" name="uname" id="uname">

        <label class="lable" for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login" name="login" class="btn-login" id="btn-login">
        <input type="button" value="Signup" onclick="openSignupForm()" class="btn-signup" >
        <input type="submit" class="btn-cancel" value="Close" name="close">
        
        </form>
    </div>

    </div>

        <div class="signup-popup-form" id="signup-popup-form">
    
    <form action="front.php" method="POST" class="signup-container">
    
        <label for="fullName">Full Name</label>
        <input type="text" name="name" id="name">

        <label for="fullName">User Name</label>
        <input type="text" name="uname" id="uname">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="mobileNumber">Mobile Number</label>
        <input type="number" name="mobileNumber" id="mobileNumber">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Signup" name="signup" class="btn-signup" id="btn-signup" onclick="signup()">
        <input type="submit" class="btn-cancel" value="Close" name="close1">

    </form>

    </div>

    <script src="login2.js"></script>

    <?php
    
    if(isset($_POST["close"])){
        header('Location: front.php');
    }

    ?>
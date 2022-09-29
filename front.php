<?php
include "connect.php";

if(!isset($_POST["uname"]) && !isset($_POST["email"]) && !isset($_POST['mobileNumber']) && !isset($_POST['password'])) {

        $error = "Username or Password is invalid";

?>
    
    <link rel="stylesheet" href="front.css">


    <header class="header" id="header">

    <div class="head-details">
        <h2>Candlewood Suites</h2>
        <p>A luxury everyone can afford</p>
        <button onclick="openForm()" class="btn"><a class="btn-link">Login</a></button>
        <button onclick="openSignupForm()" class="btn"><a class="btn-link">Signup</a></button>
    </div>
    </header>

    <div class="login-popup-form" id="login-popup-form">

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
        <input type="button" class="btn-cancel" onclick="closeLoginForm()" value="Close">
        
        </form>
    </div>

    <div class="signup-popup-form" id="signup-popup-form">
    
    <form action="front.php" method="POST" class="signup-container" onsubmit="return validateForm()">
    
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
        <input type="button" class="btn-cancel" onclick="closeSignupForm()" value="Close">

    </form>

    </div>


<script src="front.js"></script>

<?php
}
else{

// login
if(isset($_POST["login"])){

        session_start();

        $uname = $_POST['uname'];
        $pass = $_POST['password'];
        
        $sql = "SELECT * FROM customerinfo WHERE uname='$uname' AND password='$pass'";
        $result = $con->query($sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
                if ($row['uname'] === $uname && $row['password'] === $pass){
                    $_SESSION['uname'] = $row['uname'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['mobilenumber'] = $row['mobile'];
                    header('Location: home.php');
                }
            }else{
            // echo "You are not a valid user!";
            header('Location: login2.php');
        }
        }
        

// create user

    if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobileNumber'];
    $pass = $_POST['password'];

    $user_data = 'uname='. $uname;

        $sql = "INSERT INTO customerinfo(name,uname,email,mobile, password) VALUES ('$name','$uname','$email','$mobile', '$pass')";

        if($con->query($sql) === TRUE){
            // echo "New Record added";
            header('Location: front.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }
    
    }
    $con->close();
}
?>
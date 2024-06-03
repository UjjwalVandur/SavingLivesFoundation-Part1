<?php
    session_start();
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Google Font Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">

    <!-- Boxicons Link For Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Rowdies','Acme', sans-serif;
            box-sizing: border-box;
        }    
        .background {
            height: 100vh;
            width: 100%;
            background: linear-gradient(225deg, #fffbd5, #f2b4f3);
        }
        .header{
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(225deg, #fffbd5, #b20a2c);
            background-color: transparent;
            color: black;
            width: 100%;
            height: 60px;
            display: flex;
            align-items:center;
            justify-content: space-evenly;
            z-index: 100;
            border-bottom: 3px solid black;
            animation: navbar 1s ease-in-out 1 forwards;
        }

        @keyframes navbar {
            0% {
                top: -30px;
            }

            100% {
                top: 0px;
            }
        }

        .header .title{
            position: relative;
            top: 0;
            left: 0;
            display:flex;
            justify-content: start;
            align-items: center;
            color: black;
        }
        .title h2{
            font-family: 'Titan One', cursive;
            font-size: 20px;
            font-weight: 500;
            margin-left: 10px;
        }
        .title img{
            position: relative;
            top: 0;
            left: 0;
            height: 45px;
            width: 45px;
            background-color: transparent;
            padding: 5px;
            border-radius: 50%;
            border: 3px solid black;
        }       
        .navbar .elements{
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            color: black;
            display: inline-block;
            background-color: transparent;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 15px;
            padding-right: 15px;
            border-radius: 20px;
        }
        .navbar .elements:hover{
            background-color: green;
        }
        .navbar #active{
            background-color: green;
            transition: all 1s ease;
        }

        .navbar #active:hover {
            transform: scale(1.2);
        }

        .header .search-register{
            position: relative;
            top: 0;
            right: 0;
        }
        .register-search{
            display: flex;
            align-items: center;
        }
        .search input{
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            font-size: 14px;
            padding: 3px 5px 5px 10px;
            border: 2px solid black;
            border-right: none;
            color: black;
            outline: none;
            font-family: 'Rowdies', cursive;
            font-weight: 900;
        }
        .search button {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            padding: 3px 10px 5px 5px;
            border: 2px solid black;
            border-left: none;
            cursor: pointer;
            font-size: 14px;
            margin-right: 15px;
        }
        .search i{
            color: black;
        }
        .register-link {  
            padding: 5px 12px 5px 10px;
            border-radius: 20px;
            background-color: #f98d05;
        }
        .register-link i{
            color: black;
            margin-right: 5px;
            font-size: 15px;
        }
        .register-link a{
            font-size: 15px;
            font-weight: 300;
            text-decoration: none;
            color: black;
            font-weight: 700;
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 75%;
            width: 900px;
            background-color: aquamarine;
            background-position: center;
            background: linear-gradient(225deg, #fffbd5, #b20a2c);
            border: 5px solid black;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 10px;
            margin-top: 20px;
            animation: container 1.5s ease-in-out 1 forwards;
        }

        @keyframes container {
            0%{
                top: -100px;
            }
            100%{
                top: 50%;
            }
        }
        
        .container .content {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 55%;
            padding-left: 50px;
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            color: black;
        }        
        .container .logsignup-form{
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: calc(100% - 55%);
            overflow: hidden;
        }
        .content .logo img{
            position: relative;
            top: 0;
            left: 0;
            margin-bottom: -20px;
            transform: translateX(130px);
            height: 100px;
            width: 100px;
            background-size: cover;
            opacity: 1;
            padding: 10px;
            border-radius: 50%;
            border: 2px solid black;
        }
        #title{
            position: static;
            font-size: 40px;
            color: #c5e90b;
        }
        .text h2{ 
            font-size: 30px;
            line-height: 1;
        }
        .text span{
            font-size: 25px;
        }
        .text h4{
            font-size: 20px;
            line-height: 2;
            color: #5ad510;
            font-weight: 200;
        }
        .text p{
            font-weight: 400px;
        }
        .social-logo a i{
            font-size: 25px;
            color: #e4e4e4;
            margin-right: 15px;
            transition: .5s ease;
        }
        .social-logo a:hover i{
            transform: scale(1.2);
        }
        .logsignup-form .form-box{
            border-radius: 10px;
            position: absolute;
            margin-top: 5.6%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 90%;
            height: 90%;
            background-color: #dcbadd;
            border: 5px double black;
            color: black;
        }
        .logsignup-form .form-box.signup{
            transform: translateX(0);
            transition: transform .6s ease;
            transition-delay: .7s;
        }
        .logsignup-form.active .form-box.signup{
            transform: translateX(410px);
            transition-delay: 0s;
        }
        .logsignup-form .form-box.login{
            transform: translateX(410px);
            transition: transform .6s ease;
            transition-delay: 0s;
        }
        .logsignup-form.active .form-box.login{
            transform: translateX(0);
            transition-delay: .7s;
        }
        .form-box h2{
            font-size: 32px;
            text-align: center;
        }
        .form-box .input-box{
            position: relative;
            height: 50px;
            width: 300px;
            border-bottom: 2px solid #e4e4e4;
            margin: 19px 0;
        }
        .input-box input{
            height: 100%;
            width: 100%;
            background-color: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            font-weight: 500;
            color: black;
            padding-right: 45px;
        }
        .input-box label{
            position: absolute;
            top: 60%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: 500;
            pointer-events: none;
            transition: .5s ease;
        }
        .input-box input:focus~label,
        .input-box input:valid~label{
            top: -3px;
        }
        .input-box .icon{
            position: absolute;
            top: 13px;
            right: 0;
            font-size: 25px;
        }
        .form-box .terms-condition{
            font-size: 15px;
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            margin: -10px 0 10px;
        }
        .terms-condition label input{
            accent-color: black;
            color: black;
            margin-right: 6px;
        }
        .terms-condition a{
            color: black;
            text-decoration: none;
        }
        .terms-condition a:hover{
            text-decoration: underline;
        }
        .button{
            width: 100%;
            height: 45px;
            background: rgb(134 223 15 / 77%);
            color: black;
            border: none;
            outline: none;
            font-size: 20px;
            border-radius: 10px;
            font-weight: 500;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .form-box .login-register{
            font-size: 15px;
            text-align: center;
            font-weight: 500;
            margin-top: 10px;
        }
        .login-register p a{
            font-weight: 600;
            text-decoration: none;
            color: black;
        }
        .login-register p a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
   <!-- PHP for Login -->
   <?php
   $db = mysqli_connect("localhost", "root", "", "savinglivesfoundation");
   if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `registered-users` WHERE `email` = '$email' && `password` = '$password'";
        $data = mysqli_query($db, $query);
        $total = mysqli_num_rows($data);

        if($total == 1){
            $query = "SELECT `username` FROM `registered-users` WHERE `email` = '$email' && `password` = '$password'";
            $data = mysqli_query($db, $query);
            $user = mysqli_fetch_assoc($data);
            $username = implode(" ",$user);
            session_start();
            $_SESSION["username"] = $username;
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/home.php"/>
            <?php
        }
        else if($email == "admin@gmail.com" && $password == "admin@123"){
            session_start();
            $_SESSION["admin"] = $password;
            ?>
            <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/a.php"/>
            <?php
        }
        else{
            echo "<script> alert('Before Login please register your account.');</script>";
        }
   }
   ?>
   <!-- PHP for register -->
   <?php
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO `registered-users` (`username`,`email`,`password`,`datetime`) VALUES ('$username','$email','$password',current_timestamp())";
        $data = mysqli_query($db, $query);

            if($data){
                session_start();
                $_SESSION["username"] = $username;
                ?>
                <meta http-equiv = "refresh" content = "0; url = http://localhost/SavingLivesFoundation/home.php"/>
                <?php
            }
    }
   ?>

  
    <div class="background"></div>
    <!-- Start of Signup & Login Form -->
    <div class="container">
        <div class="content">
            <div class="logo"><img src="website_images/logo.png"></div>
            <h2 id="title">Saving Lives Foundation</h2>
            <div class="text">
                <h2>Welcome !</h2>
                <h2><span>To Our Website .</span></h2>
                <p>We are delighted to see you as a part of our community. Feel free to discover, interact, and collaborate with us to create something wonderful.</p>
                <h4>Once a blood donor, always a lifesaver.</h4>
                <div class="social-logo">
                    <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </div>
        </div>
        <div class="logsignup-form">
            <div class="form-box signup">
                <form action="" method="POST">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" required name="email">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="terms-condition">
                        <label><input type="checkbox" required>I agree to the terms & conditions.</label>
                    </div>
                    <button type="submit" class="button" name="register">Register</button>
                    <div class="login-register">
                        <p>Already have an account ?<a href="#" class="login-link"> Log In</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box login">
                <form action="" method="POST">
                    <h2>Log In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" required name="email">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" required name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="terms-condition">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="button" name="login">Log In</button>
                    <div class="login-register">
                        <p>Don't have an account ?<a href="#" class="signup-link"> Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <!-- End of Signup & Login Form -->
                    
    <!-- Start of JavaScript Code -->
    <script>
        const logregisterBox = document.querySelector('.logsignup-form');
        const signupLink = document.querySelector('.signup-link');
        const loginLink = document.querySelector('.login-link');

        loginLink.addEventListener('click',() =>{
            logregisterBox.classList.add('active');
        });

        signupLink.addEventListener('click',() =>{
            logregisterBox.classList.remove('active');
        });
    </script>
    <!-- End of JavaScript Code -->
   
</body>
</html>



<?php
session_start();
    include('config/connection.php');

    if (isset($_POST["login"])) {
        $user_name = mysqli_real_escape_string($conn, trim($_POST['username']));
        $user_password = trim($_POST['password']);
    
        if (empty($user_name) && empty($user_password)) {
            $login_error = '<p style="text-align: center; color: #dc2626; margin-right: 150px; font-size: 16px;"> Please enter username and password.</p>';
        } elseif (empty($user_name)) {
            $login_error = '<p style="text-align: center; color: #dc2626; margin-right: 240px; font-size: 16px;"> Please enter your username.</p>';
        } elseif (empty($user_password)) {
            $login_error = '<p style="text-align: center; color: #dc2626; margin-right: 240px; font-size: 16px;"> Please enter your password.</p>';
        } else {

        $default_admin_username = "admin";
        $default_admin_password = "password";

        if ($user_name === $default_admin_username && $user_password === $default_admin_password) {
            $_SESSION['username'] = $user_name;
            header("Location: admin/main.php");
            exit();

        } else {

            // login authentication
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user_name'");
            $count = mysqli_num_rows($sql);
    
                $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user_name'");
                $checker = mysqli_num_rows($sql1);
    
                if ($checker > 0) {
                    $getter = mysqli_fetch_assoc($sql1);
                    $hashpassword1 = $getter["password"];
    
                    if ($getter["status"] == 0) {
                        $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 100px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please verify your email account before logging in.</p>';
                    } elseif (password_verify($user_password, $hashpassword1)) {
                        $_SESSION['username'] = $user_name;
                        echo '<script> alert("Login Successfully");
                        window.location.href = "home.php";
                        </script>';
                        exit();
                    } else {
                        $login_error = '<p style="text-align: center; margin-right: 110px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Invalid username or password, please try again.</p>';
                    }
                } else {
                    $login_error = '<p style="text-align: center; margin-right: 253px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Username does not exist.</p>';
                }
            }
        }
     }  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payris FunOlympic 2024</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.forms["login"].addEventListener("submit", function (event) {
                var captchaInput = document.getElementById("captcha");
                var captchaValue = captchaInput.value.trim();

                if (captchaValue === "") {
                    alert("Please enter the captcha.");
                    event.preventDefault();
                    return;
                }

                var captchaVerificationURL = "captcha_verify.php?vercode=" + encodeURIComponent(captchaValue);

                var xhr = new XMLHttpRequest();
                xhr.open("GET", captchaVerificationURL, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = xhr.responseText;

                        if (response === "success") {
                            // to proceed login if captcha is correct
                            alert("Login Successful");
                        } else {
                            // to stop form submit if captcha is incorrect
                            alert("captcha login failed. please try again");
                            event.preventDefault();
                        }
                    }
                };

                xhr.send();
                captcha

            });
        });
    </script>
<style>
    body{
        background-color: #d3d3d3
        ;
    }
    #box{
        max-width: 500px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 100px;
        margin-bottom: 100px;
    }
    input{
        background-color: white;
        border: 1px solid #d3d3d3;
        padding: 10px;
        border-radius: 6px;
    }
    input:focus{
        outline: none;
        background-color: white;
    }
    a{
        text-decoration: none;
        font-size: 20px;
    }
</style>

</head>

<body>
    <!-- navbar -->

    <!-- navbar start -->
    <nav class="bg-white flex items-center px-6 py-3 lg:px-10 lg:py-4"  >
    <div class="flex w-full items-center">
      <a href="index.php"><img src="img/funOlympicLogo.png" class="w-14 h-10 lg:w-28 lg:h-16 object-cover" alt=""></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="mynav" class="flex justify-between items-center gap-16" >
          <a class=" text-black" href="index.php">Home</a>
          <a class=" text-black" href="about.php">About</a>
        
      </div>
    </div>

  </nav>

    <!-- login form starts -->

     <!-- Signup panel start -->
     
                <div id='box' class="bg-white rounded-2xl overflow-hidden flex flex-col items-center w-[500px] translate-x-1/2">

                    <div class="text-5xl mt-3">
                        <h2>Login</h2>
                    </div>

                    <div class="panel panel-body">
                        <form method="POST" action="#" class="flex flex-col gap-3" name="login">

                            

                            <div class="flex flex-col gap-2">
                                <label for="username"><Strong>Username</Strong></label>
                                <input type="text" name="username" class="p-2 rounded-md" id="username"
                                    placeholder="Enter your username" required>
                            </div>

                            <div class="flex flex-col gap-2"
                            >
                                <label for="password"><Strong>Password</Strong></label>
                                <input type="password" id="password" name="password" class="p-2 rounded-md focus:outline-none"
                                    placeholder="Enter your password" required>
                                

                            </div>
                           

                            <br>

                            <?php if (isset($login_error)) echo $login_error; ?>

                            <div class="forgotpass" style="color:red; margin-left: 10px" >
                                <a href="recoverpassword.php" style="color:red;">
                                    Forgot password?
                                </a>
                            </div>
                            
                            <br>
                            <div class="g-recaptcha " style=" font-size:15px;; margin-left: 10px; " data-sitekey = "6Lczq50pAAAAAI1JZ-gkjVAiZaEvgjQ-clC4CXkZ"></div>


                        <div class="flex gap-2 ">
                        <button  class="flex-1 bg-blue-500 px-5 py-2 rounded-full text-white" 
                                value="login"
                                name="login">Login</button>
                                <button type="reset" class="flex-1 bg-red-600 px-5 py-2 rounded-full text-white">Cancel</button>
                            </div>

                        <div class="already-have-account" style=" font-size:15px;margin-top:20px; margin-left: 10px; ">
                            <p>Don't have an account? <a href="register.php" style="color:green">Signup</a></p>
                        </div>

    </form>
        </div>
    </div>

    <footer class="bg-red-600 mt-5 flex gap-5 py-5 justify-center items-center">
        <div class="text-white"> Payris Fun Olympics 2024.</div>
        <div class="text-white">Copyright &copy; All rights reserved.</div>
    </footer>

</body>

</html>
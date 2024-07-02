
<?php
session_start();
    include('../config/connection.php');

    if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($conn, trim($_POST['username']));
        $password = trim($_POST['password']);
    
        if (empty($username) && empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 150px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter both username and password.</p>';
        } elseif (empty($username)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your username.</p>';
        } elseif (empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your password.</p>';
        } else {

              // Default admin credentials
        $default_admin_username = "admin12";
        $default_admin_password = "password12";

        if ($username === $default_admin_username && $password === $default_admin_password) {
            // Default admin credentials matched, redirect to admin panel
            $_SESSION['username'] = $username;
            header("Location: main.php");
            exit();
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
                            // Captcha is correct, proceed with form submission
                            alert("Login Successful");
                        } else {
                            // Captcha is incorrect, prevent form submission
                            alert("Incorrect Captcha. Please try again.");
                            event.preventDefault();
                        }
                    }
                };

                xhr.send();

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
        padding-bottom: 30px;
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
<nav>
    <div>
      <a href="home.php"><img src="img/funOlympicLogo.png"  alt=""></a>
      <button data-toggle="collapse" data-target="#mynav">
      </button>
      <div id="mynav" >
        <ul class="flex gap-8 items-center">
          <li ><a class=" text-black" href="../main.php">Home</a></li>
          <li ><a class=" text-black" href="about.php">About</a></li>
        </ul>
      </div>
    </div>

  </nav>

     
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

            
                            
                            <br>
                            <div class="g-recaptcha " style=" font-size:15px;; margin-left: 10px; " data-sitekey = "6Lczq50pAAAAAI1JZ-gkjVAiZaEvgjQ-clC4CXkZ"></div>


                        <div class="flex gap-2 ">
                        <button  class="flex-1 bg-blue-500 px-5 py-2 rounded-full text-white" 
                                value="login"
                                name="login">Login</button>
                                <button type="reset" class="flex-1 bg-red-600 px-5 py-2 rounded-full text-white">Cancel</button>
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
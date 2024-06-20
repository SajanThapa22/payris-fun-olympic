
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   

    <!-- Add this script at the end of your HTML body -->
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
    <!-- navbar -->

    <!-- navbar start -->
    <nav class="bg-white flex items-center px-6 py-3 lg:px-10 lg:py-4"  >
    <div class="flex w-full items-center">
      <a href="index.php"><img src="../img/logowithnobg.png" class="w-14 h-10 lg:w-28 lg:h-16 object-cover" alt=""></a>
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
<?php session_start(); ?>
<?php
include('config/connection.php');

if (isset($_POST["register"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $country = $_POST["country"];
    $sports = $_POST["sports"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $check_query = mysqli_query($conn, "SELECT * FROM users where email ='$email'");
    $rowCount = mysqli_num_rows($check_query);

    if (!empty($email) && !empty($password)) {
        if ($rowCount > 0) {
            ?>
            <script>
                alert("Email has been already registered!");
            </script>
            <?php
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $result = mysqli_query($conn, "INSERT INTO users (fullname, username, email, phone_number, country, sports, password,  status) VALUES
                ('$fullname','$username', '$email','$phone_number', '$country', '$sports', '$password_hash', 0)");

            if ($result) {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['mail'] = $email;
                require "Mail/phpmailer/PHPMailerAutoload.php";
                $mail = new PHPMailer;

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';

                
                $mail->Username = 'sajanthapa1888@gmail.com';
                $mail->Password = 'eqlw qkgq byfz abcu';

                $mail->setFrom('sajanthapa1888@gmail.com', 'OTP Verification');
                $mail->addAddress($_POST["email"]);

                $mail->isHTML(true);
                $mail->Subject = "Your verify code";
                $mail->Body = "<p>Dear user, </p> <h3>Your verify Verification code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>";

                if (!$mail->send()) {
                    ?>
                    <script>
                        alert("<?php echo "Register Failed, Invalid Email " ?>");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("<?php echo "Register Successfully, Verification code sent to " . $email ?>");
                        window.location.replace('verification.php');
                    </script>
                    <?php
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Payris 2024 2024</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        body{
        background-color: #d3d3d3;
    }
    h2{
        text-align: center;
    }
    #box{
        max-width: 700px;
        margin-top: 50px;
        background-color: white;
        display: grid;
        gap: 20px;
        padding: 25px 25px;
        border-radius: 14px;
        margin-left: auto;
        margin-right: auto;
    }
    input{
        background-color: white;
        border: 1px solid #d3d3d3;
        padding: 10px;
        border-radius: 6px;
    }
    input:focus{
        outline: none;
    }
    select{
        border-radius: 6px;
        outline: none;
        border: 1px solid #d3d3d3;
        padding: 10px;
    }
    select:focus{
        outline: none;
    }
    label{
        font-weight: light;
    }
    a{
        text-decoration: none;
        font-size: 20px;
    }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="bg-white flex items-center px-6 py-3 lg:px-10 lg:py-4"  >
    <div class="flex w-full items-center">
      <a href="index.php"><img src="img/logowithnobg.png" class="w-14 h-10 lg:w-28 lg:h-16 object-cover" alt=""></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="mynav" class="flex justify-between items-center gap-16" >
          <a class=" text-black" href="index.php">Home</a>
          <a class=" text-black" href="about.php">About</a>
        
      </div>
    </div>

  </nav>


    <!-- This is sign up/ register form for users-->
   
                <div id="box">

                    <div>
                        <h2>Register here</h2>
                    </div>

                    <div>
                        <form class="flex flex-col gap-2" method="post" action="#" name="register">

                            <div class="flex flex-col gap-2">
                                <label for="fullname"><Strong>Full Name</Strong></label>
                                <input type="text" name="fullname" id="fullname"
                                    placeholder="Enter Your Full Name" required>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="username"><Strong>Username</Strong></label>
                                <input type="text" name="username"  id="username"
                                    placeholder="Enter Your Username" required>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="email_address"><Strong>Email</Strong></label>
                                <input type="email" id="email_address" name="email"
                                    placeholder="E-mail" required>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="phone_number"><Strong>Phone Number</Strong></label>
                                <input type="text" id="phone_number" name="phone_number"
                                    placeholder="Enter Phone Number" required>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="country"><strong>Country:</strong></label>
                                <div>
                                    <select name="country" required
                                        style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                        <option value="" selected disabled>Select your Country</option>
                                        <option value="Argentian">Argentina</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="UAE">UAE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="sports"><strong>Sports</strong></label>
                                <div class="input-container">
                                    <select id="sports" name="sports" required
                                        style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                        <option value="" selected disabled>Select your favourite Sports</option>
                                        <option value="archery">Archery</option>
                                        <option value="boxing">Boxing</option>
                                        <option value="swimming">swimming</option>
                                        <option value="tabletennis">Table Tennis</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>




                            <div class="flex flex-col gap-2">
                                <label for="password"><Strong>Password</Strong></label>
                                <input type="password" id="password" name="password"
                                    placeholder="Enter Password" required onkeyup="validatePassword()"
                                    oninput="checkpasswordmatch()">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="password"><Strong>Confirm Password</Strong></label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                 placeholder="Confirm  Password" required
                                    onkeyup="validatePassword(); checkpasswordmatch()" oninput="checkpasswordmatch()">


                            </div>

                            <div id="error-message" style="margin-top:5px;"></div>
                            <div class="password-match" id="password-match"></div>

                            

                            <div class="flex gap-2" style="margin-top:10px">
                                <button type="submit" 
                                id="signupBtn"
                            class="flex-1 bg-blue-500 px-5 py-3 text-3xl rounded-full text-white" value="SignUp"
                                    name="register">Signup</button>
                                <button type="reset" class="flex-1 bg-red-600 px-5 py-3 text-3xl rounded-full text-white">Cancel</button>
                            </div>

                            <div class="already-have-account"
                                style=" font-size:15px;margin-top:20px; margin-left: 10px; ">
                                <p>Already have an account? <a href="login.php" style="color:red">Login</a></p>
                            </div>



                        </form>
        </div>
    </div>

    <!-- Signup panel end -->

    <footer class="bg-red-600 mt-5 flex gap-5 py-5 justify-center items-center">
        <div class="text-white"> Payris Fun Olympics 2024.</div>
        <div class="text-white">Copyright &copy; All rights reserved.</div>
    </footer>

    <script>
    
    function checkpasswordmatch() {
        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirm_password");
        var passwordMatchMessage = document.getElementById("password-match");
        var signupBtn = document.getElementById("signupBtn");

        // Get the entered passwords
        var password = passwordInput.value;
        var confirmPassword = confirmPasswordInput.value;

        // Check if the passwords match
        if (password === confirmPassword) {
            passwordMatchMessage.textContent = "Passwords match!";
            passwordMatchMessage.style.color = "green";
            signupBtn.disabled = false; // Enable signup button
        } else {
            passwordMatchMessage.textContent = "Passwords do not match!";
            passwordMatchMessage.style.color = "red";
            signupBtn.disabled = true; // Disable signup button
        }
    }
</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    


</body>

</html>
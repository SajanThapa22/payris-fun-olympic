<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Payris 2024</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

   <style>
    input{
        border: none;
        outline: none;
    }
    input:focus{
        border: none;
        outline: none;
    }
   </style>

</head>

<body style='padding: 100px'>

    <br>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"
                            style="padding: 15px; background-color: #fff; color: #000; font-size: 18px;">
                            <strong>Verification code has been sent to your Email</strong>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST">
                                <div class="col-md-15">
                                    <input type="text" id="otp" class="form-control"
                                        placeholder="Enter verification code" name="otp_code" required autofocus>
                                </div>
                        </div>
                        <div>
                            <input style='background-color: dodgerblue;' type="submit" value="Verify" name="verify">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
</body>

</html>

<?php 
   include 'config/connection.php';
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            ?>
<script>
alert("Invalid Verification code");
</script>
<?php
        }else{
            mysqli_query($conn, "UPDATE users SET status = 1 WHERE email = '$email'");
            ?>
<script>
alert("your account has been verified, you may login now");
window.location.replace("login.php");
</script>
<?php
        }

    }

?>
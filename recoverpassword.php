<?php session_start() ;
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Olympic 2024</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
    .notification {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-left: 5px solid #008374;
        padding: 15px;
        display: flex;
        align-items: center;
    }

    .notification-icon {
        margin-right: 12px;
        font-size: 18px;
        margin-bottom: 20px;
        color: #808080;
    }

    .notification-text {
        font-size: 17px;
        color: #808080;
    }
    </style>
</head>

<body>



    <header id="header" class="header d-flex align-items-center" >
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="margin-top: 70px;">
            <a href="index.php" class="logo d-flex align-items-center">
            </a>
        </div>
    </header>

    <br>

    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="border-radius: 15px">
                        <div style="padding: 15px; font-size: 18px;color:white;background-color:#dc2626;">
                            <strong>Reset Password</strong>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" name="recoverpassword">
                                <div class="form-group row">
                                    <div class="notification">
                                        <i class="fas fa-info-circle notification-icon"></i>
                                        <span class="notification-text">
                                            A verification email will be sent to your Email Address.
                                            Please check it to get a link to reset your password.
                                        </span>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-15">
                                    <label>Email</label>
                                    <input type="text" id="email_address" class="form-control" style= "margin-top: 5px;" placeholder="Enter email address"
                                        name="email" required autofocus>
                                </div>
                        </div>
                        <div>
                            <input type="submit" value="Reset" name="recover"
                                style="background-color: dodgerblue;border:none; color: white; margin-bottom: 15px; margin-left: 18px; padding: 6px 20px; border-radius: 5px;">
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
    if(isset($_POST["recover"])){
        include 'config/connection.php';
        $email = $_POST["email"];

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
<script>
alert("<?php  echo "Sorry, no emails exists "?>");
</script>
<?php
        }else if($fetch["status"] == 0){
            ?>
<script>
alert("Sorry, your account must verify first, before you recover your password !");
window.location.replace("login.php");
</script>
<?php
        }else{
            // generate token by binaryhexa 
            $token = bin2hex(random_bytes(50));

            //session_start ();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // Gmail account
            $mail->Username='pathakhari496@gmail.com';
            $mail->Password='lwbf tizz tcek zmov';

            // send by  email
            $mail->setFrom('pathakhari496@gmail.com', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);
            $mail->addReplyTo('pathakhari496@gmail.com.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://localhost/productassignment/resetpassword.php
            <br><br>
            <p>With regrads,</p>";

            if(!$mail->send()){
                ?>
<script>
alert("<?php echo " Invalid Email "?>");
</script>
<?php
            }else{
                ?>
<script>
window.location.replace("notification.php");
</script>
<?php
            }
        }
    }
?>





















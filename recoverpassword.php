<?php session_start() ;
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Olympic 2024</title>
</head>

<body>



    <header id="header" class="header d-flex align-items-center" >
        <div style="margin-top: 70px;">
            <a href="index.php" class="logo d-flex align-items-center">
            </a>
        </div>
    </header>

    <br>

    <main>
        <div>
            <div>
                <div >
                    <div style="border-radius: 15px">
                        <div style="padding: 15px; font-size: 18px;color:white;background-color:#dc2626;">
                            <strong>Reset Password</strong>
                        </div>
                        <div>
                            <form method="POST">
                                <div>
                                    <div >
                                        <span >
                                            A verification mail has been sent to your email address. Please kindly check it.
                                        </span>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-15">
                                    <label>Email</label>
                                    <input type="text" id="email_address" style= "margin-top: 5px;" placeholder="Enter email address"
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
        $user_email = $_POST["email"];

        $pfo_sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$user_email'");
        $query = mysqli_num_rows($pfo_sql);
  	    $get = mysqli_fetch_assoc($pfo_sql);

        if(mysqli_num_rows($pfo_sql) <= 0){
            ?>
<script>
alert("<?php  echo "The email you provided doesn't exist"?>");
</script>
<?php
        }else if($get["status"] == 0){
            ?>
<script>
alert("Sorry, your account must verify first, before you recover your password !");
window.location.replace("login.php");
</script>
<?php
        }else{
            $pw_token = bin2hex(random_bytes(50));

            $_SESSION['token'] = $pw_token;
            $_SESSION['email'] = $user_email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            $mail->Username='sajanthapa1888@gmail.com';
            $mail->Password = 'eqlw qkgq byfz abcu';

            $mail->setFrom('sajanthapa1888@gmail.com', 'Password Reset');
            $mail->addAddress($_POST["email"]);
            $mail->addReplyTo('sajanthapa1888@gmail.com.com');

            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
            <p>We just got notified to reset your password. please check your email to reset your password</p>"

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





















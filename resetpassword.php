<?php session_start() ;
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Payris Fun Olympics</title>

<body style="background-color: #efefef; padding: 200px">

    
    <main style="background-color: #fff;" class="login-form">
        <div class="cotainer">
            <div style="padding-top:30px" class="row justify-content-center">
                <div class="col-md-6">
                    <div style="border-radius: 15px;over-flow:hidden">
                        <div style="padding: 15px;  color: white; font-size: 18px;background-color: #dc2626;text-align: center">
                            <strong>Change Password</strong>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" name="login">
                                <div class="form-group row">
                                    <p style="font-size: 16px; color: #808080;">Please enter you new password</p>
                                    <div class="col-md-12">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">New
                                            Password:</label>
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Enter new password" name="password" required autofocus>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                        <label for="confirm_password"
                                            class="col-md-4 col-form-label text-md-right">Confirm Password:</label>
                                        <input type="password" id="confirm_password" class="form-control"
                                            placeholder="Confirm new password" name="confirm_password" required
                                            autofocus>
                                        <i id="password_match_icon" class="bi bi-check-circle-fill"
                                            style="display: none; color: green; margin-top: 10px;">Password match
                                            correctly.</i>
                                        <i id="password_error" class="bi bi-exclamation-circle-fill"
                                            style="display: none; color: red; margin-top: 10px;">Password donot
                                            match.</i>
                                    </div>

                                    
                                   

                                </div>
                                <input type="submit" value="Change" name="reset"
                                    style="background-color: dodgerblue; margin-left: 220px; color: white; padding: 6px 20px; margin-top: 20px; border-radius: 5px;">
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
    if(isset($_POST["reset"])){
        include 'config/connection.php';
        $psw = $_POST["password"];

        $token = $_SESSION['token']; 
        $email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if($email){
            $new_pass = $hash;
            mysqli_query($conn, "UPDATE users SET password='$new_pass' WHERE email='$email'");
            ?>
<script>
alert("<?php echo "Your password has been succesfully reset"?>");
window.location.replace("login.php");

</script>
<?php
        }else{
            ?>
<script>
alert("<?php echo "Please try again"?>");
</script>
<?php
        }
    }

?>
    
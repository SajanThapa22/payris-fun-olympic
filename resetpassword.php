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

    
    <main style="background-color: #fff;">
        <div class="cotainer">
            <div style="padding-top:30px" >
                <div>
                    <div style="border-radius: 15px;over-flow:hidden">
                        <div style="padding: 15px;  color: white; font-size: 18px;background-color: #dc2626;text-align: center">
                           Change Password
                        </div>
                        <div>
                            <form  method="POST" name="login">
                                <div>
                                    <p style="font-size: 16px; color: #808080;">Please enter you new password</p>
                                    <div>
                                        <label for="password">New
                                            Password:</label>
                                        <input type="password" id="password" 
                                            placeholder="Enter your new password" name="password" required>
                                    </div>
                                    <div>
                                        <label for="confirm_password"
                                            >Confirm Password:</label>
                                        <input type="password" id="confirm_password"
                                            placeholder="Confirm new password" name="confirm_password" required
                                            autofocus>
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
        $pass = $_POST["password"];

        $r_token = $_SESSION['token']; 
        $user_email = $_SESSION['email'];

        $pw_hash = password_hash( $pass , PASSWORD_DEFAULT );

        $db_sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$user_email'");
        $query = mysqli_num_rows($db_sql);
  	    $get = mysqli_fetch_assoc($db_sql);

        if($user_email){
            $new_pw = $pw_hash;
            mysqli_query($conn, "UPDATE users SET password='$new_pw' WHERE email='$user_email'");
            ?>
<script>
alert("<?php echo "Your password is reset successfully. you may login now"?>");
window.location.replace("login.php");

</script>
<?php
        }else{
            ?>
<script>
alert("<?php echo "error occured. Please try again"?>");
</script>
<?php
        }
    }

?>
    
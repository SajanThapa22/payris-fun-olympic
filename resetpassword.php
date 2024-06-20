<?php session_start() ;
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Olympic Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

   <link rel="stylesheet" href="css/forgot.css"> 

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <script src="js/resetpassword.js"></script>
</head>

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
    
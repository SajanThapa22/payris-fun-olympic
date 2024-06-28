<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>

  <!-- this is nav bar -->
    <nav>
        <a class="navbar-brand" href="#">Home</a>
        <button type="button"
          ></button>
        <div>
            <ul>
                <li>
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            
        </div>
    </nav>


    <div style="padding:40px">
      <div>
        <div>
        </div>
        <div>
          <h2>Forgot password? Please provide your correct email address</h2>
          <form action="" method="post">
            <div>
              <label for="email">Your Email:</label>
              <input type="email" name="email" id="email"placeholder="sajan@mail.com" required autofocus>
            </div>

            <button type="submit" name="submit">Send Code</button>
            <button type="reset">Cancel</button>
            <a href="signup.php" style="margin:10px 0px">Create New Account</a>
            

          </form>
          
          <?php
          if(isset($_POST['submit']))  
          { 
            include '../config/connection.php';       
            $to=$_POST['email'];
            $subject='New Messsage';
            $x=rand(1,9);
            $y=rand(2,8);
            $OTP=$x.$y;
            $headers="From:info@funolyampic2024.com"."Do not reply";
            $query="insert into otp (otp)values('$OTP')";
            mysqli_query($conn,$query);
            if(mail($to, $subject, $OTP, $headers))
                echo "<script>window.alert('Sent mail Successfully!');</script>";
                header("location:verify-otp.php");
        }
      
          ?>
        </div>
        </div>
      </div>
    </div>
  </body>

</html>


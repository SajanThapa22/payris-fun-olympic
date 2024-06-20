<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Log in</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <a class="navbar-brand" href="#">Coderly</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            
        </div>
    </nav>
    <!-- navbar end -->
    <!-- login form start-->
    <div class="container" style="padding:40px">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <h2 class="display-4">If you forgot your password. Enter your valid mail id to reset your password.</h2>
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Your Email:</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="sample@mail.com" aria-describedby="helpId" required autofocus>
            </div>

            <button type="submit" class="btn btn-success btn-lg" name="submit">Send Code</button>
            <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
            <a href="signup.php" class="btn btn-primary btn-lg btn-block" style="margin:10px 0px">Create New Account</a>
            

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
        <div class="col-md-1">
        </div>
      </div>
    </div>
    <!-- login form end -->
  </body>

</html>


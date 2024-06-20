
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympic Website</title>
  <link rel="stylesheet" href="css\index.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<style>
  /* Contact Form Styles */
.php-email-form input[type="text"],
.php-email-form input[type="email"],
.php-email-form textarea {
    border: 1px solid #ced4da; /* Border color */
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    margin-bottom: 10px;
}

.php-email-form textarea {
    height: 150px;
}

.php-email-form button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border: 1px solid #007bff; /* Border color */
}

.php-email-form button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
<!-- navbar start -->
<nav class="navbar navbar-expand-md navbar navbar-light bg-primary">
  <div class="container">
    <a href="#" class="navbar-brand"><img src="img\logowithnobg.png" alt=""></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active text-white" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="about-us.php">About</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="broadcast.php">Broadcast</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact</a></li>
        <?php 
          // Start the session
          session_start();

          // Check if username session variable is set
          if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            // Display welcome message with username as clickable link
            echo '<li class="nav-item"><a class="nav-link text-white" href="#"><i class="fas fa-user"></i> Welcome ' . $username . '</a></li>';
          }
          else {
            // If not logged in, display login link
            echo '<li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>';
          }
        ?>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link text-white" href="logout.php"><span class="fas fa-sign-in-alt"> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" style="margin-top: 20px" data-aos="fade-up">
        <div class="section-header">
            <h2>CONTACT US</h2>
            <p>We appreciate your interest in the Payris FunOlympic 2024! Your feedback, inquiries, and suggestions are important to us. Don't hesitate to contact us using the provided information. We look forward to hearing from you!</p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">
                <div class="info-container">
                    <div class="info-item">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>Payris</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>payris_funolympic2024@gmail.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item">
                        <i class="bi bi-phone"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>9827209235</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item">
                        <i class="bi bi-clock"></i>
                        <div>
                            <h4>Open Hours:</h4>
                            <p>Mon-Friday: 11AM - 23PM</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                </div>
            </div>

            <div class="col-lg-8">
                <form action="contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message"> Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
                </form>
            </div>
            <!-- End Contact Form -->
        </div>
    </div>
</section>



 

 


   

    <!-- Footer Start -->
    <footer class="bg-dark text-light text-center py-3 mt-5">
        <p class="display-5 mb-2 mt-3"> Payris Fun Olympics 2024.</p>
        <p class="text-white-50">Copyright &copy; All rights reserved.</p>

    </footer>
    <!-- Footer End -->




















  
  
</body>

</html>
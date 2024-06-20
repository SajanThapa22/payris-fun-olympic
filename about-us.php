<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympic Website</title>
  <link rel="stylesheet" href="css\index.css">
  <!doctype html>
  <html lang="en">

  <head>
    <title>About Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>

<body>
   <!-- navbar start -->
   <nav class="navbar navbar-expand-md navbar navbar-light bg-primary"  >
    <div class="container">
      <a href="#" class="navbar-brand"><img src="img\logowithnobg.png" alt=""></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active text-white" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link text-white " href="broadcast.php">Broadcast</a></li>
          <li class="nav-item"><a class="nav-link text-white " href="contact.php">Contact</a></li>
          <?php 
          // Start the session
          session_start();

          // Check if username session variable is set
          if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            // Display welcome message with username as clickable link
            echo '<li class="nav-item"><a class="nav-link text-white" ><i class="fas fa-user"></i> Welcome ' . $username . '</a></li>';
          }
          else {
            // If not logged in, display login link
            echo '<li class="nav-item"><a class="nav-link text-white" href="login.php"></a></li>';
          }
        ?>



        </ul>


        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item"> <a class="nav-link text-white" href="logout.php"><span class="fas fa-sign-in-alt">
                Logout</a> </li>
        </ul>
      </div>
    </div>

  </nav>

  <!-- navbar end -->


  <div class="site-blocks-cover overlay" style="background-image: url(images/.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
      
        <div class=" text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
          <h1 class="bg-text-line mt-5">About Olympic History</h1>
          <p class="mt-4">The Olympics, originating in ancient Greece around 776 BC, served as a celebration of athletic prowess and unity among city-states. Revived in 1896 in Athens, modern Olympics embrace global participation and sportsmanship, transcending borders and cultures. Over decades, the Games have witnessed historic moments, including Jesse Owens' triumph in Nazi Germany, the Miracle on Ice, and the iconic performances of Usain Bolt. Today, the Olympics stand as a symbol of peace, friendship, and sporting excellence worldwide. Since its ancient inception in Olympia, Greece, the Olympics have evolved into a global phenomenon, with Summer and Winter editions held every four years. From the grandeur of Rome to the cultural splendor of Beijing and the innovation of Tokyo, host cities have left enduring legacies. Over time, the Games have adapted to reflect societal changes, including the inclusion of female athletes and the introduction of new sports. The Olympics continue to inspire generations, fostering unity and mutual understanding across the globe.
          </p>


        </div>

      
    </div>
  </div>

  <div class="site-section" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="img/ice_hockey.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 pl-md-5">
        <h2 class="text-black">About Sports</h2>
          <p>The Payris Olympics 2024 will feature a diverse array of sports, including traditional disciplines like athletics, swimming, and gymnastics. Additionally, newer events like skateboarding, sport climbing, and surfing will debut, reflecting the Games' embrace of innovation and youth appeal. Team sports such as basketball, football, and volleyball will also take center stage, highlighting the global popularity and inclusivity of Olympic competition.</p>
          <p>Payris 2024 will showcase a wide range of sports, from traditional disciplines like athletics to modern additions such as skateboarding. </p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section  mt-5" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-2">
          <img src="img/cricket.webp" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 pr-md-5">
        <h2 class="text-black">About Us</h2>
          <p >The Payris Olympic Games 2024 promise innovation, sustainability, and inclusivity. Set against iconic backdrops like the Eiffel Tower and Champs-Élysées, the event aims to unite the world through sport and celebrate cultural diversity. With a focus on green initiatives and legacy projects, Payris 2024 strives to leave a lasting positive impact on the city and inspire future generations of athletes globally. The Payris Olympics 2024 represent a beacon of hope and resilience, following the challenges of the pandemic. Embracing the Olympic values of excellence, friendship, and respect, the event aims to transcend boundaries and promote solidarity. Athletes from diverse backgrounds will converge to compete at world-class venues, showcasing their talents and inspiring millions worldwide. Payris 2024 embodies the spirit of unity and the power of sport to foster positive change.</p>
        </div>
      </div>
    </div>
  </div>

 



  <!-- Footer Start -->
  <footer class="bg-dark text-light text-center py-3 mt-5">
    <p class="display-5 mb-2 mt-3"> Payris FunOlympic 2024.</p>
    <p class="text-white-50">Copyright &copy; All rights reserved.</p>

  </footer>
  <!-- Footer End -->



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
</head>

<body>

</body>

</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Olympic Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/output.css">
    


</head>

<body style="display: grid; ">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1300,
        }
        ); 
    </script>

    <style>
        a{
    text-decoration: none;
    font-size: 20px;
  }
        .checked {
            color: orange;
        }

        body {
            background-color: #DCDCDC;
            font-family: 'Open Sans', sans-serif;
        }


        #contact {
            padding: 60px 0;
        }

        #contact h2 {
            color: paleturquoise;
            color: #be6231;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
        }

        img{
  transition: transform .3s ease-in;
  width: 100%;
  height: 100%;
  object-fit: cover;
}


        .container form textarea {
            width: 60%;
        }

        footer{
  display: flex;
  background-color: #dc2626;
  margin-top: 20px;
  padding: 30px 24px;
  gap: 20px;
  justify-content: center;
}

    
        #gamebox{
  display: grid;
  justify-content: center;
  width: 100%;
  padding-left: 100px;
  padding-right: 100px;
}
#gametitle{
  width: 100%;
}
#gamegrid{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  justify-content: center;
  width: 100%;
  gap: 30px;
  overflow: hidden;
  padding: 25px 250px;
}
.gamecard img:hover{
transform: scale(1.1)
}
.gamecard{
  overflow: hidden;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
}
.gamecard div{
  overflow: hidden;
}
.gamecard img{
  transition: transform .3s ease-in;
  width: 100%;
  min-width: 200px;
  height: 250px;
  object-fit: cover;
}
nav{
    display: flex;
    padding: 16px 40px;
    background-color: #fff;
}
nav img{
    width: 112px;
    height: 64px;
    object-fit: cover;
}
.cardbelow{
  padding:10px 30px;
  border-top: 2px solid transparent;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  background-color: white;
}
.card-title{
  font-weight: 700;
  font-size: 18px;
}
a{
    text-decoration: none;
    color: #fff;
}
#btn{
    padding: 10px 14px;
    background-color: #dc2626;
    border-radius: 30px;
    color: #fff;
    cursor: pointer;
}
#btn:hover{
    background-color: darkred;
}
    </style>

    
<nav>
    <div style="display:flex;width: 100%;justify-content:space-between;align-items:center;gap:20px">
      <a href="home.php"><img src="img/logowithnobg.png" alt=""></a>
      <div id="mynav" style="display:flex; gap: 56px;align-items:center;justify-content:center">
        <ul style="list-style-type:none;display:flex;gap:32px; align-items:center">
          <li ><a class=" text-black" href="home.php">Home</a></li>
          <li ><a class=" text-black" href="about.php">About</a></li>
        </ul>
      </div>
    </div>

  </nav>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 style="color: black; font-size: 32px;">Watch  <span style="color: #dc2626; font-size: 32px;">
                live broadcast
                </span></h2>
            </div>
        </div>
    </section>


    <div id="gamegrid">
    <div class="gamecard">
        <div>
            <img src="img/tabletennis.jpg" alt="Tennis Image">
         </div>
    <div class="cardbelow">
     <h5 class="card-title">Table Tennis</h5>
                         
   <a href="broadcast/tabletennis.php"><div id='btn'> Watch now</div> </a> 
      </div>
   </div>

   <div class="gamecard">
        <div>
            <img src="img/swimming.jpeg" alt="Tennis Image">
         </div>
    <div class="cardbelow">
     <h5 class="card-title">Swimming</h5>
                         
   <a href="broadcast/swimming.php"><div id='btn' > Watch now</div> </a> 
      </div>
   </div>

   <div class="gamecard">
        <div>
            <img src="img/archery.webp" alt="Tennis Image">
         </div>
    <div class="cardbelow">
     <h5 class="card-title">Archery</h5>
                         
   <a href="broadcast/archery.php"><div id='btn'> Watch now</div> </a> 
      </div>
   </div>

   <div class="gamecard">
        <div>
            <img src="img/boxing.jpg" alt="Tennis Image">
         </div>
    <div class="cardbelow">
     <h5 class="card-title">Boxing</h5>
                         
   <a href="broadcast/boxing.php"><div id='btn'> Watch now</div> </a> 
      </div>
   </div>

   
</div>


    <!-- ======= Footer ======= -->
    <footer>
        <p style="color:white"> Payris Fun Olympics 2024.</p>
        <p style="color:white">Copyright &copy; All rights reserved.</p>
    </footer>

        </div>
        
     
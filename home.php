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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun Olympic</title>

<style>
  *{
    font-family: sans-serif;
    margin:0;
    padding:0;
  }
  a{
    text-decoration: none;
    font-size: 20px;
  }
  #container{
    padding: 50px 100px;
  }
  .title{
    font-size: 30px;
    font-weight: 700;
    color: #dc2626;
  }
  .explore{
    font-size: 30px;
    font-weight: 700;
    color: #000;
  }
#gamebox{
  display: grid;
  justify-content: center;
  padding-left: 100px;
  padding-right: 100px;
}
#gametitle{
  width: 100%;
}
#gamegrid{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  justify-content: center;
  gap: 30px;
}
#gamegrid img{
  width: 100%;
}
#gamegrid img:hover{
transform: scale(1.1)
}
.gamecard{
  overflow: hidden;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  display: grid;
  grid-template-rows: 3fr 2fr;
}
.gamecard div{
  overflow: hidden;
}
img{
  transition: transform .3s ease-in;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.cardtext{
  padding:10px;
  border: 2px solid #efefef;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  display: grid;
  grid-template-rows: auto 1fr;
  gap: 10px;
}
.card-title{
  font-weight: 700;
  font-size: 18px;
}
nav{
  display: flex;
  padding: 12px 60px;
}
footer{
  display: flex;
  background-color: #dc2626;
  margin-top: 20px;
  padding: 30px 24px;
  gap: 20px;
  justify-content: center;
}
ul{
  list-style-type: none;
}
</style>
</head>

<body>
<!-- this is navigation bar -->
<nav>
    <div style="display: flex;width:100%;justify-content: space-between; align-items: center; gap: 40px">
      <a href="home.php"><img src="img/funOlympicLogo.png"style="width:110px;height:70px;object-fit:cover;" alt=""></a>
      
      <div id="mynav" style="display:flex;flex:1;justify-content: space-between;align-items: center;gap:64px">
        <ul style="list-style-type:none;display:flex;gap:32px; align-items:center">
          <li ><a style="color: black;" href="home.php">Home</a></li>
          <li ><a style="color: black;" href="about.php">About</a></li>
          <li ><a style="color: black;" href="broadcast.php">Watch Live</a></li>
        </ul>


        <ul style="display:flex;align-items:center;">
        
          <li style="background-color: #dc2626;padding: 8px 20px; border-radius: 30px"> <a style="color: white;" onclick="return confirm('Are You sure want to Logout??');href="user-logout.php">
              Log out</a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
<!--this is navigation bar -->

 <!-- this is banner -->
 <div class="w-full h-screen overflow-hidden relative">
    <img src="img/boxing.jpg" style="width:100%;height:100%" alt="">
    <div style="position:absolute;top:50%;right:50%;transform:translate(50%,90%);display:grid;gap:24px" >
      <p style="text-wrap:nowrap;color:white;font-weight:bold;font-size:50px;display:grid;justify-content:center;" >Watch olympics 2024</p>
      <p style="font-size: 40px;text-wrap:nowrap;color:white;font-weight:700;">are you ready for the most famous sporting event</p>
    </div>
  </div>
  <!-- this is banner -->


  <!-- This is about section-->

  <div id="container">
    <div style="display:flex;flex-direction:column;margin-top:20px;width:100%">
      <div style="display:grid;grid-template-columns: 1fr;width:100$">
        <h2 class="title">About our mission </h2>
        <p style="margin-bottom:16px;font-size: 20px">Our mission is to provide a comprehensive and engaging experience for sports enthusiasts
          and curious minds alike. Whether you're seeking the latest updates on Olympic events, exploring the
          history of the Games, or discovering the inspiring journeys of athletes from around the globe,
          you'll find it here. We invite you to join us in celebrating the timeless values of excellence,
          friendship, and respect that the Olympics embody.</p>
        <a href="about.php" class="title">Explore More</a>
      </div>

      
     
    </div>
  </div>


   <!-- this is games section -->
        <div id="gamebox">
            <div id="gametitle" style="margin-bottom: 16px" >
                <h1 class="explore">Explore Our <span class="title">Games</span></h1>
            </div>
            <div id="gamegrid">
                <!-- Archery-->
             
                    <div style="overflow: hidden" class="gamecard">
                      <div>
                        <img src="img/archery.webp" alt="Football Image">
                      </div>
                        <div class="cardtext">
                            <h5 class="card-title">Archery</h5>
                            <p class="card-text">Archery made its debut at the 1900 Paris Olympics. It was included in the 1904, 1908, and 1920 Games before being dropped from the Olympic program.</p>
                           
                        </div>
                    </div>
             


                <!-- Table Tennis -->
              
                    <div  class="gamecard">
                      <div>

                        <img src="img/tabletennis.jpg" alt="Basketball Image">
                      </div>
                        <div class="cardtext">
                            <h5 class="card-title">Table Tennis</h5>
                            <p class="card-text">Table tennis made its Olympic debut at the 1988 Seoul Games. Its inclusion was part of a broader effort by the International Olympic Committee to introduce new sports that had widespread global appeal.</p>
                            
                        </div>
                    </div>
             

                <!-- Boxing -->
               
                    <div class="gamecard">
                      <div>
                        <img src="img/boxing.jpg" alt="Swimming Image">
                      </div>
                        <div class="cardtext">
                            <h5 class="card-title">Boxing</h5>
                            <p class="card-text">Boxing was included in the modern Olympic Games in 1904 in St. Louis, although it was excluded from the 1912 Stockholm Games due to Swedish law. It has been a staple of the Summer Olympics since 1920.</p>
                            
                        </div>
                    </div>
               

                <!-- Cricket -->
               
                    <div class="gamecard">
                      <div>
                        <img src="img/cricket.webp" alt="Tennis Image">

                      </div>
                        <div class="cardtext">
                            <h5 class="card-title">Cricket</h5>
                            <p class="card-text">
                                Cricket is coming back after almost 124 years. Cricket was included in the Olympics only once, at the 1900 Paris Games. The match was played between teams from Great Britain and France, with Great Britain emerging victorious</p>
          
                        </div>
                    </div>
              

                <!-- Swimming -->
            
                    <div class="gamecard">
                      <div>
                        <img src="img/swimming.jpeg" alt="Swimming Image">

                      </div>
                        <div class="cardtext">
                            <h5 class="card-title">Swimming</h5>
                            <p class="card-text">Swimming is a highlight of the Summer Olympics, featuring various events from freestyle to butterfly strokes. Athletes compete for medals, showcasing incredible speed, endurance, and technique in the pool.</p>
                            
                        </div>
                    </div>
                

                <!-- Running -->
               
                    <div class="gamecard">
                      <div>
                        <img src="img/runner.jpg" alt="Running Image">

                      </div>
                        <div class="cardtext">
                            <h5 class="card-title">Running</h5>
                            <p class="card-text">Running is a core Olympic sport, encompassing various events like sprints, relays and marathons. Athletes showcase speed and technique, captivating audiences worldwide with their remarkable performances.</p>
                        </div>
                    </div>
                
            </div>
        </div>

    <!-- This is footer -->
    <footer>
        <p style="color:white"> Payris Fun Olympics 2024.</p>
        <p style="color:white">Copyright &copy; All rights reserved.</p>
    </footer>

</body>

</html>

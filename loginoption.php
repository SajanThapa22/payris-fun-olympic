<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/output.css">
    <style>
     body{
        background-color: gray;
        display: flex;
        flex-direction: column;
        height: 100dvh;
        font-family: Sans-serif;
     }
     #main{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-top: 70px;
        text-align: center
     }
   
     #container{
        width: fit-content;
        background-color: #fff;
        padding: 80px 100px;
        border-radius: 15px;
        display: grid;
        justify-content: center;
        align-items: center;
        text-align: center;
        gap: 15px;
        margin-top: 35px;
    }
    #admin{
        background-color: #dc2626;
        border-radius: 12px;
        padding: 20px 14px;
        width: 300px;
        font-size: 20px;
    }
    #user{
        background-color: dodgerblue;
        border-radius: 12px;
        padding: 20px 14px;
        font-size: 20px;
     }
     a{
        text-decoration: none;
        color: white;
     }
     h1{
        color: white;
     }
     
    </style>
</head>
<body> 
<nav class="bg-white flex px-6 py-3 lg:px-10 lg:py-4"  >
    <div class="flex w-full justify-between items-center gap-6">
      <a href="index.php"><img src="img/funOlympicLogo.png" class="w-14 h-10 lg:w-28 lg:h-16 object-cover" alt=""></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="mynav" class="flex flex-1 justify-between items-center gap-16" >
        <ul class="flex gap-8 items-center">
          <li ><a class=" text-black" href="index.php">Home</a></li>
          <li ><a class=" text-black" href="about.php">About</a></li>
      </div>
    </div>
  </nav>

  <div id="main">
    <div id="container">
       <p style="font-size: 26px" >
Login as
       </p> 
        <a href="admin/adminlogin.php">
            <div id="admin">Admin</div>
        </a>
        <a href="login.php">
            <div id="user">User</div>
        </a>
    </div>
    </div>
</body>
</html>
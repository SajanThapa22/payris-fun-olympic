<!-- header section starts -->
    <header class="header">
    <section id="header">
        <img src="../images/dashboard/logowithnobg.png" style="height: 60px; width: 80px;" alt="">
        <h1>payris 2024</h1>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
</script>
<!-- header section ends -->

<!-- side bar section starts  -->
<div class="side-bar bg-light">

    <div class="close-side-bar">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
    <img src="../img/admin.jpg">
        <a href="main.php" style="color: black;" class="btn bg-transparent"><?php echo $_SESSION['username']; ?></a>
    </div>

    <nav class="navbar">
        <a href="main.php" class="nav-link"><i class="fas fa-home" style="color: black;"></i><span class="text-black">Dashboard</span></a>
        <a href="view-users.php" class="nav-link"><i class="fas fa-user" style="color: black;"></i><span class="text-black">Users</span></a>
        <a href="upload-video.php" class="nav-link"><i class="fas fa-graduation-cap" style="color: black;"></i><span class="text-black">Upload Videos</span></a>
        <a href="view-comment.php" class="nav-link"><i class="fas fa-comment" style="color: black;"></i><span class="text-black">Comments</span></a>
        <a href="../index.php"  onclick="return confirm('Are You sure want to Logout??');"style="text-decoration: none;"><i
                class="fas fa-right-from-bracket" style="color:black"></i><span class="text-black">Logout</span></a>
    </nav>

</div>

<!-- side bar section ends -->


<style>
    .side-bar {
        display: flex;
        flex-direction: column;
    }

    .nav-link {
        display: block;
        width: 100%;
        align-items: center;
        
        
    }

    .dark-theme{
        background-color: grey;
        color: darkred;
    }
    #header{
        display: flex;
        gap: 40px;
        align-items: center;
    }
    *{
        font-family: sans-serif;
    }
</style>
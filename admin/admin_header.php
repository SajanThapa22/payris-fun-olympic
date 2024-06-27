<!-- this is admin navbar header-->
<header class="header">
    <section id="header">
        <img src="../img/funOlympicLogo.png" style="height: 60px; width: 80px;" alt="">
        <h1>payris Fun Olympics 2024</h1>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
</script>

<!-- this is the admin side panel  -->
<div class="side-bar bg-light">


    <div class="profile">
    <img src="../img/admin.jpg">
        <a href="main.php" style="color: black;" class="btn bg-transparent"><?php echo $_SESSION['username']; ?></a>
    </div>

    <nav style="padding-left: 30px;" class="navbar">
        <a href="main.php" class="nav-link"><span class="text-black">Status</span></a>
        <a href="registered-users.php" class="nav-link"><span class="text-black">Users</span></a>
        <a href="post-video.php" class="nav-link"><span class="text-black">Upload Videos</span></a>
        <a href="user-comments.php" class="nav-link"><span class="text-black">Comments</span></a>
        <a href="../index.php"  onclick="return confirm('Do you want to log out?');"style="text-decoration: none;"><span class="text-black">Logout</span></a>
    </nav>

</div>



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
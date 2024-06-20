<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else
{
?>
<!doctype html>
<html lang="en">

<head>

   

    <title>FunOlympic</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
    body {
        background-color: #DCDCDC;
    }

    .container-login100 {
        background-color: #fff;
        padding: 10px;
        border-radius: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .input-container {
        position: relative;
    }

    .input-container i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -25px;
    }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mx-auto " href="main.php">Payris Fun Olyampic 2024.</a>
        </div>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </div>
    </nav>
    <!-- navbar end -->
    <!-- dashboard start -->
    <div class="limiter">
        <div class="container-login100" style="background-color: #DCDCDC;">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: #fff; padding: 50px 30px; border-radius: 7px;">
                <h3 style="margin-top: -10px; text-align: center; color: #008374; font-family: Arial, sans-serif;">
                    <strong>UPDATE NEWS</strong>
                </h3>
                <form action="update-post.php" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ID">ID:</label>
                        <input type="text" name="id1" id="id1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <!-- title -->
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title1" id="title1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['title']; ?>">
                    </div>
                    <!-- content -->
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" name="content1" id="content1" rows="5">
                    <?php echo $_GET['content']; ?>
                  </textarea>
                    </div>
                    <!-- image -->
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="text" name="image1" id="image1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['image']; ?>">
                    </div>
                    <!-- submit button -->
                    <div class="text-center">
                    <button type="submit" class="btn bg-primary btn-lg text-white" name="submit">Update News</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- dashboard end -->
</body>

</html>
<?php
}
?>
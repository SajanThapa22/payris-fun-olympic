<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: sports.php");
    exit(); // Added exit() to stop executing the rest of the code
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> payris FunOlympic 2024</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


<link rel="stylesheet" href="admincss/style.css">

</head>

<body>
    <?php include 'admin_header.php'; ?>

    <section class="dashboard">
        <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">Upload Favorite Sports</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="select" style="font-size: 18px;">Select Image:</label>
                <br><br>
                <input type="file" class="form-control-file" style="font-size: 18px; padding: 7px 1px;" name="image"
                    id="image" placeholder="Upload Image" aria-describedby="fileHelpId">
            </div>
            <button type="submit" class="btn btn-primary" name="submit"
                style="font-size: 20px; padding: 10px; width: 100px;">Upload</button>
            <button type="reset" class="btn btn-danger"
                style="font-size: 20px; padding: 10px; width: 100px;">Cancel</button>

        </form>
        <?php
                    if (isset($_POST['submit'])) {
                        $image_name = $_FILES['image']['name'];
                        $image_type = $_FILES['image']['type'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($image_tmp, "../images/news/$image_name");
                        echo "File uploaded successfully!" . "<br>";
                        echo "<img src='../images/news/$image_name' width='300px'>";
                    }
                    ?>
        </div>
        </div>
    </section>
</body>

</html>
<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:broadcast.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <link href="../assets/img/home/logo.png" rel="icon">
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



    <!-- custom css file link  -->
    <link rel="stylesheet" href="admincss/style.css">

</head>

<body>
    <?php include 'admin_header.php'; ?>

    <section class="">
        <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; text-align:center; font-weight: bold;">Upload Video</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <br><br>
                <label style="font-size: 20px;">Title:</label>
                  <br>
                  <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Write video title"
            aria-describedby="helpId" required
            style="border: 1px solid #ccc; height: 40px; width: 800px; padding: 10px; font-size:20px"></input>
                <input type="file" class="form-control-file" style="font-size: 18px; padding: 7px 1px;" name="video"
                    id="video" placeholder="Upload Video" aria-describedby="fileHelpId">
            </div>
            <button type="submit" name="submit"
            style="padding: 10px 30px; color: white; border-radius: 25px; background-color: #3b82f6; text-decoration: none; font-size: 16px">Upload</button>
            <button type="reset"
            style="padding: 10px 30px; color: white; border-radius: 25px; background-color: #dc2626; text-decoration: none; font-size: 16px">Cancel</button>

        </form>
        <?php
            if(isset($_POST['submit']))
            {
               $title=$_POST['title'];
               $_SESSION['video_title']=$title;
                $video_name=$_FILES['video']['name'];
                $video_type=$_FILES['video']['type'];
                $video_tmp=$_FILES['video']['tmp_name'];
                move_uploaded_file("$video_tmp","../images/video/$video_name");
                echo "File uploaded successfully!"."<br>";
                echo "$video_name";
                $_SESSION['uploaded_videos'][$video_name]=$title;
            }
            ?>
        </div>
        </div>
        </div>
        <!-- dashboard end -->
</body>

</html>
<?php
}
?>
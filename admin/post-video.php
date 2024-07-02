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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> payris FunOlympic 2024</title>

</head>

<body>
    <?php include 'admin_structure.php'; ?>

    <section>
        <h1 style="font-size: 30px; color: #333; margin-top: 20px; text-align:center; font-weight: bold;">Upload Video</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label style="font-size: 20px;">Title:</label>
                  <br>
                  <input type="text" name="title" id="title" placeholder="Write video title"
            aria-describedby="helpId" required
            style="border: 1px solid #ccc; height: 40px; width: 800px; padding: 10px; font-size:20px"></input>
                <input type="file" style="font-size: 18px; padding: 7px 1px;" name="video"
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
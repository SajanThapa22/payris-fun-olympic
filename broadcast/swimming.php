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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
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




        .container form textarea {
            width: 60%;
        }


        .footer {
            background-color: #212529;
            color: #fff;
            padding: 60px 0;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            color:#a82121;
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
img:hover{
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
img{
  transition: transform .3s ease-in;
  width: 100%;
  min-width: 200px;
  height: 250px;
  object-fit: cover;
}
.cardbelow{
  padding:10px 30px;
  border: 2px solid #efefef;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
.card-title{
  font-weight: 700;
  font-size: 18px;
}
a{
    text-decoration: none;
    color: #fff;
}
a:hover{
    color: #fff
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

    


    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 style="color: black; font-size: 32px;">Watch  <span style="color: #dc2626; font-size: 32px;">
                live broadcast
                </span></h2>
            </div>
        </div>
    </section>


    <div style="width:100%;display:grid;justify-content:center">
                <?php
                $dir = glob('../videos/swimming.mp4', GLOB_BRACE);
                foreach ($dir as $value) {
                    ?>
                    <h3
                        style="width:100%;text-align:center;color: black; font-size: 22px; margin-right: 50px; margin-top: 25px; margin-bottom: 15px; font-family: Arial, sans-serif;">
                       Olympics-Men's 200M Final</h3>
                    
                    <div  style="width:100%;display: flex; justify-content:center" id='videobox'>
                     
                            <video src="<?php echo $value; ?>" alt="HNP" width="70%" ; controls>
                                <source src="<?php echo $value; ?>" type="video/mp4">
                                <source src="<?php echo $value; ?>" type="video/ogg">
                            </video>

                      
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
 

    

    <!-- comment start  -->
    <div class="container" style="margin: 30px 0px; margin-left: 250px;">
        <h2 class="display-6">Comments</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="content"></label>
                <textarea class="form-control" name="comment" id="content" rows="5" placeholder="Provide some comments"
                    style="width: 60%;" required></textarea>
            </div>
            <div class="form-group" style="margin: 30px 0px;">
                <label for="Rating">Rating:</label>
                <!-- <input type="text" class="form-control" name="rate" id="" aria-describedby="helpId" placeholder="1 to 5"
                    style="width: 60%;"> -->

                <select style="width: 200px" type="text" name="rate" placeholder='select your rating'>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit" name="submit"
            style="border-radius: 30px; padding: 10px 25px;font-size: 24px; color: #fff; background-color: dodgerblue;border:none">Submit</button>
            <button type="reset"
            style="border-radius: 30px; padding: 10px 25px;font-size: 24px; color: #fff; background-color: #dc2626;border:none">Cancel</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            include '../config/connection.php';
            $user = $_SESSION['username'];
            $date = date('Y/m/d');
            $com = $_POST['comment'];
            $rate = $_POST['rate'];
            $query = "INSERT INTO swimmingcomment(user, date, comment, rate) VALUES ('$user', '$date', '$com', '$rate')";
            $run = mysqli_query($conn, $query);

            if ($run) {
                echo "<script>
    window.onload = function() {
        setTimeout(function() {
            alert('Comment added successfully');
        }, 1000);
    }
</script>";


            } else {
                echo "<script>window.alert('Error Found!')</script>";
            }
        }
        ?>

        <div class="container" style="margin: 30px 0px;">
            <h2 class="display-6">Comments:</h2>
        </div>

        <!-- comment to start display -->
        <?php
        include '../config/connection.php';
        $query = "SELECT * FROM swimmingcomment ORDER BY rand() LIMIT 5";
        $run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($run)) {
            $comment_id = $row['id'];
            $username = $row['user'];
            $date = $row['date'];
            $comment = $row['comment'];
            $rate = $row['rate'];
            ?>

            <div class="container">
                <div class="row" style="margin: 40px 0px; margin-top: -20px;">
                    <div class="col-sm-8">
                        <div class="username"
                            style="text-transform:uppercase; font-size: 16px; font-weight: bold; color: #740083;">
                            <?php echo $username; ?>

                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $rate) {
                                    echo '<span class="fa fa-star checked"></span>';
                                } else {
                                    echo '<span class="fa fa-star"></span>';
                                }
                            }
                            ?>
                        </div>
                        <div class="date" style="font-size: 12px; color: #808080;">
                            <?php echo $date; ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="comment" style="font-size: 15px;">
                            <?php echo $comment; ?>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="actions">
                        <a style="color: dodgerblue" href="../editcomment.php?id=<?php echo $comment_id; ?>&table=swimmingcomment&redirect=<?php echo urlencode('broadcast/swimming.php'); ?>" class="edit">Edit</a>
                            <a style="color: #dc2626" href="../deletecomment.php?id=<?php echo $comment_id; ?>&table=swimmingcomment&redirect=<?php echo urlencode('broadcast/swimming.php'); ?>" class="delete">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


    <!-- ======= Footer ======= -->
    <footer style="background-color: #dc2626;margin-top;30px; padding: 20px 30px;display:grid;grid-template-columns:2fr 1fr 1fr;gap-30px;justify-content:center;color:white">
        <div>
                <p>Stay connected with us for the latest updates and news about the olympics games. Join theconversation using Fun Olympics 2024 Website.</p>
         <div>
    <a href="#" class="twitter" style="margin-right: 4px;"><i class="bi bi-twitter"></i></a>
    <a href="#" class="facebook" style="margin-right: 4px;"><i class="bi bi-facebook"></i></a>
    <a href="#" class="instagram" style="margin-right: 6px;"><i class="bi bi-instagram"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
</div>
</div>

<div>
                    <h4>Contact Us</h4>
                    <p>
                        Stade de France <br> City of paris,<br> payris <br><br>
                    Phone: +1-123-456-7899<br>
                    Email: info@funolympic2024.com<br>
                    </p>

                </div>

                <div class="copyright">
                &copy;Copyrights Payris 2024  all Rights Reserved
            </div>

    </footer>

        </div>
        
     
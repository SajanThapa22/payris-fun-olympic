
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

    <title>Payris Fun Olympics</title>
</head>

<body style="display: grid; ">

    <style>
        .checked {
            color: orange;
        }

        body {
            background-color: #DCDCDC;
            font-family: sans-serif;
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

    <section>
        <div >
            <div>
                <h2 style="color: black; font-size: 32px;">Watch  <span style="color: #dc2626; font-size: 32px;">
                live broadcast
                </span></h2>
            </div>
        </div>
    </section>


    <div style="width:100%;display:grid;justify-content:center">
                <?php
                $dir = glob('../videos/archery.mp4', GLOB_BRACE);
                foreach ($dir as $value) {
                    ?>
                    <h3
                        style="width:100%;text-align:center;color: black; font-size: 22px; margin-right: 50px; margin-top: 25px;font-family: Arial, sans-serif;">
                       Olympics-Men's Archery Final France vs Korea</h3>
                    
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
 

    

    <!-- this is comment section  -->
    <div style="margin: 30px 0px; margin-left: 250px;">
        <h2>Comments</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="content"></label>
                <textarea name="comment" id="content" rows="5" placeholder="Provide some comments"
                    style="width: 60%;" required></textarea>
            </div>
            <div style="margin: 30px 0px;">
                <label for="Rating">Rating:</label>
                    <select style="width: 200px" type="text" name="rate">
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
            $query = "INSERT INTO archerycomment(user, date, comment, rate) VALUES ('$user', '$date', '$com', '$rate')";
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

        <div style="margin: 30px 0px;">
            <h2 class="display-6">Comments:</h2>
        </div>

        <!-- comment section -->
        <?php
        include '../config/connection.php';
        $query = "SELECT * FROM archerycomment ORDER BY rand() LIMIT 5";
        $run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($run)) {
            $comment_id = $row['id'];
            $username = $row['user'];
            $date = $row['date'];
            $comment = $row['comment'];
            $rate = $row['rate'];
            ?>

            <div>
                <div style="margin: 40px 0px; margin-top: -20px;">
                    <div>
                        <div
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
                        <div style="font-size: 12px; color: #808080;">
                            <?php echo $date; ?>
                        </div>
                    </div>
                    <div>
                        <div style="font-size: 15px;">
                            <?php echo $comment; ?>
                        </div>

                    </div>
                    <div>
                        <div class="actions">
                        <a style="color: dodgerblue" href="../editcomment.php?id=<?php echo $comment_id; ?>&table=archerycomment&redirect=<?php echo urlencode('broadcast/archery.php'); ?>" class="edit">Edit</a>
                            <a style="color: #dc2626" href="../deletecomment.php?id=<?php echo $comment_id; ?>&table=archerycomment&redirect=<?php echo urlencode('broadcast/archery.php'); ?>" class="delete">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


    <!-- ======= Footer ======= -->
    <footer>
        <p style="color:white"> Payris Fun Olympics 2024.</p>
        <p style="color:white">Copyright &copy; All rights reserved.</p>
    </footer>
        </div>
        
    </body>

    </html>
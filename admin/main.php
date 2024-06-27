<?php 
session_start();
include '../config/connection.php';
if(!isset($_SESSION['username']))
{
    header("location:index.php");
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
    <title>Payris Fun Olympic</title>

</head>

    <?php include 'admin_header.php'; ?>

    <section>

        <h1 class="heading" style="text-align: center;">Welcome to dashboard</h1>

        <div class="box-container">

            <div class="box bg-light">
                <?php
                 include '../config/connection.php';
                 $query = "SELECT * FROM users";
                 $result = mysqli_query($conn, $query);
                 if ($result) {
                     $rowcount = mysqli_num_rows($result);
                     echo "<h1><span style='font-size: 20px; color: #808080;'>Total Users registered in the platform:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                 }
             ?>
                
            </div>

            <div class="box bg-light">
            <?php 
                include '../config/connection.php';
                $query="select * from ttcomment";
                $result=mysqli_query($conn,$query);
                if($result)
                {
                    $rowcount=mysqli_num_rows($result);
                    echo "<h1><span style='font-size: 20px; color: #808080;'>Total Comments Made by Users:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                }
                ?>
                
            </div>

           

        </div>

    </section>


    
</html>
<?php
}
?>
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
    <title>Funolympic 2024</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="admincss/style.css">

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
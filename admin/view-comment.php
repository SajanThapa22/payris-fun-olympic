<?php 
session_start();
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
    <!-- Favicons -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> payris FunOlympic 2024</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admincss/style.css">
</head>

<!-- dashboard start -->
<?php include 'admin_header.php'; ?>

<section>
    <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">User Comments</h1>
    <div class="col-md-12 ">
        <p style="font-size: 16px">Boxing comments</p>
            <table style="font-size: 15px; border-radius: 15px; border-collapse: collapse; width: 100%; border: 1px solid #efefef;">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Comment ID</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Rate</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <?php
                include '../config/connection.php';
                $query="select * from boxingcomment";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                    $a=$row['id'];
                    $b=$row['user'];
                    $c=$row['date'];
                    $d=$row['comment'];
                    $e=$row['rate'];
                ?>
                <tbody class="bg-white">
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a class="btn bg-danger" href="comment-delete.php?Del=<?php echo $a; ?>&table=boxingcomment">Delete</a></td>

                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
            </div>


            <div style="margin-top: 50px" class="col-md-12">
        <p style="font-size: 16px">Table Tennis comments</p>
            <table style="font-size: 15px; border-radius: 15px; border-collapse: collapse; width: 100%; border: 1px solid #efefef;">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Comment ID</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Rate</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <?php
                include '../config/connection.php';
                $query="select * from ttcomment";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                    $a=$row['id'];
                    $b=$row['user'];
                    $c=$row['date'];
                    $d=$row['comment'];
                    $e=$row['rate'];
                ?>
                <tbody class="bg-white">
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a class="btn bg-danger" href="comment-delete.php?Del=<?php echo $a; ?>&table=ttcomment">Delete</a></td>

                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
            </div>


            <div style="margin-top: 50px" class="col-md-12">
        <p style="font-size: 16px">Archery comments</p>
            <table style="font-size: 15px; border-radius: 15px; border-collapse: collapse; width: 100%; border: 1px solid #efefef;">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Comment ID</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Rate</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <?php
                include '../config/connection.php';
                $query="select * from archerycomment";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                    $a=$row['id'];
                    $b=$row['user'];
                    $c=$row['date'];
                    $d=$row['comment'];
                    $e=$row['rate'];
                ?>
                <tbody class="bg-white">
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a class="btn bg-danger" href="comment-delete.php?Del=<?php echo $a; ?>&table=archerycomment">Delete</a></td>

                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
            </div>


            <div style="margin-top: 50px" class="col-md-12">
        <p style="font-size: 16px">Swimming comments</p>
            <table style="font-size: 15px; border-radius: 15px; border-collapse: collapse; width: 100%; border: 1px solid #efefef;">
                <thead class="bg-light text-dark">
                    <tr>
                        <th>Comment ID</th>
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Rate</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <?php
                include '../config/connection.php';
                $query="select * from swimmingcomment";
                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($run))
                {
                    $a=$row['id'];
                    $b=$row['user'];
                    $c=$row['date'];
                    $d=$row['comment'];
                    $e=$row['rate'];
                ?>
                <tbody class="bg-white">
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a class="btn bg-danger" href="comment-delete.php?Del=<?php echo $a; ?>&table=swimmingcomment">Delete</a></td>

                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
            </div>


            <!-- dashboard end -->
            </body>

</html>
<?php
}
?>
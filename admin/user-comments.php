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
<?php include 'admin_structure.php'; ?>

<section>
    <h1 style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">User Comments</h1>
    <div >
        <p style="font-size: 16px">Boxing comments</p>
            <table style="font-size: 15px; border-radius: 15px; border-collapse: collapse; width: 100%; border: 1px solid #efefef;">
                <thead>
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
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a style="padding: 15px 25px;border-radius: 30px;background-color: '#dc2626;color: white;" href="comment-delete.php?Del=<?php echo $a; ?>&table=boxingcomment">Delete</a></td>

                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
            </div>


            <div style="margin-top: 50px">
        <p style="font-size: 16px">Table Tennis comments</p>
            <table style="font-size: 15px; border-radius: 15px; border-collapse: collapse; width: 100%; border: 1px solid #efefef;">
                <thead>
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
                <tbody>
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a style="padding: 15px 25px;border-radius: 30px;background-color: '#dc2626;color: white;" href="comment-delete.php?Del=<?php echo $a; ?>&table=ttcomment">Delete</a></td>

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
                        <td><a style="padding: 15px 25px;border-radius: 30px;background-color: '#dc2626;color: white;" href="comment-delete.php?Del=<?php echo $a; ?>&table=archerycomment">Delete</a></td>

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
                        <td><a style="padding: 15px 25px;border-radius: 30px;background-color: '#dc2626;color: white;" href="comment-delete.php?Del=<?php echo $a; ?>&table=swimmingcomment">Delete</a></td>

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
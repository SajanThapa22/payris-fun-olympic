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
    <link rel="stylesheet" href="admincss/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


 

</head>

<!-- dashboard start -->
<?php include 'admin_header.php'; ?>


<section>
    <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;"> Users
        Info</h1>
    <div1 class="col-md-12">
        <div1>
            <table style="font-size: 15px; border-collapse: collapse; width: 100%; border: 1px solid #d3d3d3; border-radius: 15px;">
                <thead style="border-bottom: 1px solid #d3d3d3; text-wrap: nowrap;" class="bg-light text-dark" >
                    <tr>
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Country</th>
                        <th>Sports</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody style="white-space:no-wrap;" class="bg-white" >
                    <?php
                    include '../config/connection.php';
                    $query = "select * from users";
                    $run = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $a = $row['id'];
                        $b = $row['fullname'];
                        $c = $row['username'];
                        $d = $row['email'];
                        $e = $row['phone_number'];
                        $h = $row['country'];
                        $i = $row['sports'];
                    ?>
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><?php echo $h; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><a  style="padding: 10px 30px; color: white; border-radius: 20px; background-color: #3b82f6; text-decoration: none"
                                href="user-edit.php?id=<?php echo $a; ?>&fullname=<?php echo $b; ?>&username=<?php echo $c; ?>&email=<?php echo $d; ?>&phone_number=<?php echo $e; ?>&country=<?php echo $h; ?>&gender=<?php echo $i; ?>">Edit</a>
                        </td>
                        <td><a style="padding: 10px 20px; color: white; border-radius: 20px; background-color: #dc2626; text-decoration: none" href="user-delete.php?Del=<?php echo $a; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
            </table>
        </div1>
    </div1>
</section>

</html>

<?php
}
?>
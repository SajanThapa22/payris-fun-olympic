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
    <link href="../assets/img/home/logo.png" rel="icon">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunOlympic 2023</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/css/admin_style.css">

</head>

<!-- dashboard start -->
<?php include 'admin_header.php'; ?>

<section class="dashboard">
    <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">Registered Users
        Details</h1>
    <div1 class="col-md-12">
        <div1>
            <table style="font-size: 15px; border-collapse: collapse; width: 100%; border: 1px solid #000;">
                <thead style="background-color: #008374;; color: white;">
                    <tr>
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>DOB</th>
                        <th>Occupation</th>
                        <th>Country</th>
                        <th>Gender</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody1>
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
                        $f = $row['dob'];
                        $g = $row['occupation'];
                        $h = $row['country'];
                        $i = $row['gender'];
                    ?>
                    <tr>
                        <td scope="row"><?php echo $a; ?></td>
                        <td><?php echo $b; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><?php echo $f; ?></td>
                        <td><?php echo $g; ?></td>
                        <td><?php echo $h; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><a class="btn btn-primary btn-lg"
                                href="profile.php?id=<?php echo $a; ?>&fullname=<?php echo $b; ?>&username=<?php echo $c; ?>&email=<?php echo $d; ?>&phone_number=<?php echo $e; ?>&dob=<?php echo $f; ?>&occupation=<?php echo $g; ?>&country=<?php echo $h; ?>&gender=<?php echo $i; ?>">Edit</a>
                        </td>
                        <td><a class="btn btn-danger btn-lg" href="user-delete.php?Del=<?php echo $a; ?>">Delete</a>
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
<?php
include '../config/connection.php';
if(isset($_GET['submit']))
{
    $a=$_GET['id1'];
    $b=$_GET['fullname1'];
    $c=$_GET['username1'];
    $d=$_GET['email1'];
    $e=$_GET['phone_number1'];
    $h=$_GET['country1'];
    $i=$_GET['gender1'];
    $query="update users set fullname='$b', username='$c', email='$d', phone_number='$e', country='$h', gender='$i' where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view-users.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";
    }

}
?>;
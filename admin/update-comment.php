<?php
include '../config/connection.php';
if(isset($_GET['submit']))
{
    $a=$_GET['id1'];
    $b=$_GET['username1'];
    $c=$_GET['date1'];
    $d=$_GET['comment1'];
    $e=$_GET['rate1'];
    $query="update comment set user='$b', date='$c', comment='$d', rate='$e' where id='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view-comment.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";
    }

}
?>
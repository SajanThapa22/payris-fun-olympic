<?php
include '../config/connection.php';
if(isset($_GET['Del']) && isset($_GET['table']))
{
    $delid=$_GET['Del'];
    $table = mysqli_real_escape_string($conn, $_GET['table']);
    $query="delete from $table where id='$delid'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view-comment.php");
    }
    else
    {
        echo "<script>window.alert('Unable to Delete')</script>";
    }
}
?>;
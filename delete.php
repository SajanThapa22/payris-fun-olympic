<?php
include 'config/connection.php';
if(isset($_GET['Del']))
{
    $delid=$_GET['Del'];
    $query="delete from comment where id='$commentId'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:broadcast.php");
    }
    else
    {
        echo "<script>window.alert('Unable to Delete')</script>";
    }
}
?>

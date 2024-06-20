<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("location: login.php"); 
    exit;
}

if (isset($_GET['id']) && isset($_GET['table']) && isset($_GET['redirect'])) {
    include 'config/connection.php'; 

    $comment_id = mysqli_real_escape_string($conn, $_GET['id']);
    $table = mysqli_real_escape_string($conn, $_GET['table']);
    $redirect_url = mysqli_real_escape_string($conn, $_GET['redirect']);

   
    $query = "DELETE FROM $table WHERE id = '$comment_id'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: $redirect_url"); 
        exit;
    } else {
        
        echo "Error deleting comment.";
    }
} else {
    header("Location: $redirect_url");
    exit;
}
?>;
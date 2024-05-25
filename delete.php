<?php 
include './config/connection.php';

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = 'DELETE FROM employees WHERE id = '.$id.'';
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo 'Deleted successful';
        header('location:index.php');
    } else {
        die(mysqli_errno($conn));
    }
}
?>
<?php 
include './config/connection.php';
// I used get method to delete by adding deleteid in button
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
// use sql query to delete from table
    $sql = 'DELETE FROM employees WHERE id = '.$id.'';
    // use mysqli_query to send SQL in php by using connection
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo 'Deleted successful';
        header('location:index.php');
    } else {
        die(mysqli_errno($conn));
    }
}
?>
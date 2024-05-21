<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
    <h1>Employee Management System</h1>
    <a href="add_employee.php">Add New Employee</a>
    <br>
    <?php 
    include './config/connection.php';
    $query = 'SELECT * FROM employees';
    /* we use mysqli_query() function
    this function help send SQL query to the database by selecting
    database connection and query to select table*/
    $result = mysqli_query($conn, $query);
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Salary</th>
    </tr>";
?>
</body>
</html>
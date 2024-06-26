<?php
// sending data to MySQL
include './config/connection.php';
// get data 
$id=$_GET['updateid'];
// select from id
$sql = "SELECT * FROM employees WHERE id=$id";
$result = mysqli_query($conn, $sql);
// access data in database to display in update then add in HTML element
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $spl = "UPDATE employees SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
    $result = mysqli_query($conn, $spl);
    if ($result) {
        // echo 'Updated successfully';
        header('location:index.php');
    } else {
        die(mysqli_errno($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container m-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter your name" name="name" value=<?php  echo $name ?>>
            </div>
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" class="form-control" autocomplete="off" placeholder="Enter your email" name="email" value=<?php echo $email ?>>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter your Mobile Number" name="mobile" value=<?php echo $mobile ?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" autocomplete="off" placeholder="Enter your password" name="password" value=<?php echo $password ?>>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>
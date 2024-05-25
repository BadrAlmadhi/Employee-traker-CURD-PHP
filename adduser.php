<?php
include './config/connection.php';
if (isset($_POST['submit'])) {
    $name = $_POST[''];
    $email = $_POST[''];
    $mobile = $_POST[''];
    $password = $_POST[''];
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
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter your name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" class="form-control" autocomplete="off" placeholder="Enter your email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter your Mobile Number" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" autocomplete="off" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
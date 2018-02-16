<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

    if ($connection) {
        echo 'we are connected ';
    } else {
        die('database connection failed');
    }

    if ($username && $password) {
        echo $username . '<br>';
        echo $password;
    } else {
        echo 'No username or password';
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>        
    </div>
</body>
</html>
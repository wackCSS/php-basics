<?php 
    // print_r($_POST);
    if ( isset( $_POST['submit']) ){
        echo $_POST['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="name" id="name">
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</body>
</html>
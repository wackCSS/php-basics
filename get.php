<?php 
    print_r($_GET);
    $id = 200;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="get.php?id=<?php echo $id ?>" class="link">click this</a>
</body>
</html>
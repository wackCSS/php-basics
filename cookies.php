<?php
    $_COOKIE;

    $name = 'mycookie';
    $value = 324;
    $expiration = time() + (60 * 60 * 24 * 7 * 52);

    setcookie($name, $value, $expiration);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if( isset($_COOKIE['mycookie']) ) {
            $someOne = $_COOKIE['mycookie'];
        } else {
            $someOne = '';
        }

        echo $someOne;
    ?>
</body>
</html>
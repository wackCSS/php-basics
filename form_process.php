<?php 
    if ( isset($_POST['submit']) ) {
        $names = array('Luke', 'Student', 'peter');
        $username = $_POST['username'];        
        $password = $_POST['password'];
        $min = 5;
        $max = 20;

        if ( !in_array($username, $names) ) {
            echo 'username not found';
            echo '<br />';
        }

        if ( strlen($password) < $min ) {            
            echo 'password has to be longer than 5 characters but less than 20';
            echo '<br />';
        }        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
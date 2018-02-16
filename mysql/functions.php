<?php include "db.php"; ?>

<?php
    function showAllData() {
        global $connection;

        $query =  "SELECT * FROM users";    
        // result at this point is the whole db
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('query failed' . mysqli_error());
        }

        // mysqli function returns associative array from db query
        while( $row = mysqli_fetch_assoc($result) ) {                           
            $id = $row['id'];
            echo '<option value="' . $id . '">' . $id .'</option>';                                                   
        
        }    
    }
    
    function createRows() {
        global $connection;

        $username = mysqli_escape_string($connection, $_POST['username']);
        $password = mysqli_escape_string($connection, $_POST['password']);        

        
        //var_dump($username, $password);die;
        

        if (strlen($username) > 0 && strlen($password) > 0) {

            $hashFormat = '$2y$10$';
            $salt = 'qwertyuiopasdfghjklzxq';
            $hashF_and_salt = $hashFormat . $salt;

            $password = crypt($password, $hashF_and_salt);           


            $query =  "INSERT INTO users(username, password)";
            $query .= "VALUES ('$username', '$password')";

            $result = mysqli_query($connection, $query);

            if(!$result) {
                die('query failed' . mysqli_error());
            } else {
                echo 'Record saved <br>';
            }
        } else {
            echo 'No username or password';
        }
    }

    function updateTable() {
        global $connection;

        $username = mysqli_escape_string($connection, $_POST['username']);
        $password = mysqli_escape_string($connection, $_POST['password']);   
        $id = $_POST['id'];

        $hashFormat = '$2y$10$';
        $salt = 'qwertyuiopasdfghjklzxq';
        $hashF_and_salt = $hashFormat . $salt;
        
        $password = crypt($password, $hashF_and_salt);

        $query =  "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('query failed' . mysqli_error());
        } else {
            echo 'Record updated <br>';
        }       
    }

    function deleteRows() {
        global $connection;              
        
        $id = $_POST['id'];

        $query =  "DELETE FROM users ";        
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('query failed' . mysqli_error());
        } else {
            echo 'Record deleted <br>';
        }         
    }

    function readRows() {
        global $connection;
        
        $query =  "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('query failed' . mysqli_error());
        }
        
        while( $row = mysqli_fetch_assoc($result) ) {
            print_r($row);
        }
    }
?>

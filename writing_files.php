

<?php

$file = 'example.txt';

if($handle = fopen($file, 'w')){

    fwrite($handle, 'this is a test - write to file ffff');
    fclose($handle);

} else {
 echo 'The file could not be written';
}



?>
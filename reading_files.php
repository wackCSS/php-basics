<?php

$file = 'example.txt';

if($handle = fopen($file, 'r')){

    echo $contents = fread($handle, filesize($file));

    fclose($handle);

} else {
 echo 'The file could not be written';
}



?>
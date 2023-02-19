<?php

$file = fopen("/workspace/CourierHack/src/database/userinfo.txt", 'r');
if (!$file) die("File not found");

 fgets($file);
        
for ($i = 0; $i < 12; $i++) {

     
       
   

    $string =  fgets($file);
    $string_array = explode(",", $string);

   
    echo $string_array[0];
    // var_dump($string_array);
   
    echo $string_array[0] != "";
    
    echo "\n";
}
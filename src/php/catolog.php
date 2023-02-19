<!DOCTYPE html>
<html lang="en">

<?php
if (!isset($_COOKIE['PageNo'])) {
    static $pageNo = 1;
    setcookie("PageNo", $pageNo);
} else {
    $pageNo = $_COOKIE['PageNo'] + 0;
    setcookie("PageNo", $pageNo);
}

$ROOT = dirname(__FILE__);

?>

<?php
require_once("/workspace/CourierHack/src/html/template.html");

echo ('<div class="container">
        <div class="flex-container">');
?>
<?php


$file = fopen("/workspace/CourierHack/src/database/userinfo.txt", 'r');
if (!$file) die("File not found");

$name = array("Anuj Mahadev Dagade", "Bruce wayne");
$lineNo = 0;

for ($i = 0; $i < 12; $i++) {

    while (!feof($file) && $lineNo < ($pageNo * 12 - 11)) {
        fgets($file);
        $lineNo++;
    }


    $string =  fgets($file);
    $string_array = explode(",", $string);

    genrateCard($string_array);

    
}

?>




<?php

function genrateCard($string_array)
{
    echo ("
        
        <div class='card'>
        <form method='post' action='sendMail.php'>
            <img class='profile' src='My.JPG' alt='Profile'>
            <span>Name:$string_array[0] </span>
            <span>Location:$string_array[2] </span>
            <span>Technologies:$string_array[4]</span>
            <span>Looking for:$string_array[3] </span>
            <input type='text' name='id' value=$string_array[1] hidden>
            <input class='btn' type='submit' value='Submit Request'/>
            </div>

        </form>");
}
?>


<div class="nav-index">
    
    <form action="" method="get">

        <input type="submit" value="Next">
    </form>
</div>





</html>
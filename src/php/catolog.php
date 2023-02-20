<!DOCTYPE html>
<html lang="en">

<?php

$file_lines = fopen("/workspace/CourierHack/src/database/userinfo.txt", 'r');
if (!$file_lines) die("File not found");
$wholeLines=0;

while(!feof($file_lines)){
    fgets($file_lines);
    $wholeLines++;
}


$total_pages = ($wholeLines-2)/12;
//echo "TotalPages: $total_pages , Lines: $wholeLines";

if (!isset($_COOKIE['PageNo'])) {
    static $pageNo = 1;
    setcookie("PageNo", $pageNo);
}
else {
    $pageNo = $_COOKIE['PageNo'] + 1;
    setcookie("PageNo", $pageNo);
}

if(($pageNo-1) > $total_pages)
{
    $pageNo = 1;
    setcookie("PageNo", $pageNo);
}



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

   
    
    if($string_array[0] != "")
    {
        genrateCard($string_array);
    }
   
    
    
}
fclose($file);
?>




<?php

function genrateCard($string_array)
{
    echo ("
        
        <div class='card'>
        <form method='post' action='sendInfo.php'>
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

        <input type="submit" class="next" value="Next">
    </form>
</div>





</html>
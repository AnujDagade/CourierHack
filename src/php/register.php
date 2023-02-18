<?php
namespace Handlers;



$fh = fopen("/home/drcool/Programming/Projects/HackPartner/src/database/userinfo.txt", 'r+');

if (!$fh) die("File not found");

$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['loc'];
$lookingFor = $_POST['look'];
$tech = $_POST['tech'];


//echo "$name<br> $location<br> $lookingFor<br> $tech";

if(fputs($fh,$name.",".$email.",".$location.",".$lookingFor.",".$tech."\n"))
{
   header("Location: /php/catolog.php");
}





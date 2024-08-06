<?php


$str="Elias is the Elias DUKUZUMUREMYI";
$pattern="/Elias/";
$patterns="/[EU]/";
echo preg_match($pattern,$str)."<br>";
echo preg_match_all($pattern,$str)."<br>";

echo preg_replace($pattern,"Enock",$str)."<br>";
echo preg_match_all($patterns,$str);








?>
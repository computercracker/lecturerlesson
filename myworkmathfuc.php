

<?php
// abs function in php passing argument



$negative=abs(-20);
$positive=abs(30);
$positivefloat=abs(30.89);
$negativefloat=abs(-20.34);


echo "<h1 style=\"color:blue\">This is the abs() function in PHP</h1><br>";

echo "Negative: ".$negative."<br>"." Positive: ".$positive."<br>"." Positive Float: ".$positivefloat."<br>"." Negative Float: ".$negativefloat;

echo "<h1 style=\"color:blue\">This is the acos() function in PHP</h1><br>";


$number = 0.5;
$radian= acos($number);

echo "The arc cosine of $number is $radian radians<br>";

?>

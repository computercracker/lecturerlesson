

<?php

$arrays=["Elias","Paccy"];

// array push function

array_push($arrays,"Fredinant");


echo "<br>"."Adding one value in array "."<br>";
foreach($arrays as $value){
    echo $value."<br>";
}




echo "<br>"."Adding multiple value in array ";

array_push($arrays,"Theogene","Theophile");



foreach($arrays as $value){
    echo "<br>".$value."<br>";
}












?>
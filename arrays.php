<?php

$num=[10,20,30,40,50];


for($i=0;$i<5;$i++){


    echo $num[$i]."<br>";
}

$num1=['id'=>20,'name'=>"Elias",'age'=>30];


foreach($num1 as $key=>$value){
    echo "<br> ".$key." : ".$value."<br>";
}

$num3=[[1,2,3,4],[5,6,7,8],[9,10,11,12]];







for($i=0;$i<3;$i++){
    for($j=0;$j<=3;$j++){
        echo $num3[$i][$j]." ";
    }

    echo "<br>";
}










?>


<?php

function splitName($fullname){

    $parts = explode(" ", $fullname);

    return[
        "firstname"=> $parts[0],
        "lastname"=> $parts[1]??""
    ];
}


$fullsname=splitName("Dukuzumuremyi Elias");

echo $fullsname["firstname"]."\n";
echo $fullsname["lastname"];


$arr=[1,2,3];
$arr1=[4,5,6];

$arr2=array_merge($arr , $arr1);

foreach($arr2 as $value){
    echo $value."\n";
}









?>
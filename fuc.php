<?php

function isPrime($num){

    if($num<=1) return false;

    for($i=2;$i<=sqrt($num);$i++){

        if($num%$i==0) return false;
    }
    return true;
}

$num1=1;

if(isPrime($num1)){
    echo $num1." This is a prime number";
}else{
    echo $num1." This is not prime number";
}

?>
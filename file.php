<?php

$createfile="test.txt";

$file=fopen($createfile,'w');

if($file){

    
    $content="Hello Rwanda";

    fwrite($file,$content);

    $test="Welcome";


    fwrite($file,$test);



    fclose($file);


    echo "File is created";
}else{
    echo "The file not created";
}



?>
<?php

$username="admin";
$password="Elias";

session_start();

if(isset($_SESSION['username'])){
    echo "welcome back ".$_SESSION['username'];
    echo "<br><a href='welcome.php'>Welcome</a>";
    echo "<br><a href='logout.php'>Logout</a>";
}else{
    if($_SERVER['REQUEST_METHOD'] = 'POST'){

        if(isset($_POST['username1']) && isset($_POST['password1'])){

            if($_POST['username1']==$username && $_POST['password1']==$password){

                $_SESSION['username']=$username;

                header('Location: welcome.php');

                exit();
            }else{
                echo "Invalid username or password";
            }
        }
    }
}


?>



<?php

$name=$email=$url=$pass="";
$namerror=$emailerror=$urlerror=$passerror="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $valid=true;


    if(empty($_POST['name'])){
        $namerror="Name is required";
        $valid=false;
    }else{
        $name=test_input($_POST['name']);

        if(!validateName($name)){

            $namerror="only letters and space allowed";
            $valid=false;
        }
    }


    if(empty($_POST['pass'])){
        $passerror="Password is required";
        $valid=false;
    }else{
        $pass=test_input($_POST['pass']);

        if(!validatePass($pass)){

            $passrror="require strong password";
            $valid=false;
        }
    }



    if(empty($_POST['email'])){
        $emailerror="Email required";
        $valid=false;
    }else{
        $email=test_input($_POST['email']);

        if(!validateEmail($email)){
            $emailerror="Invalid email format";
            $valid=false;
        }
    }

    if(empty($_POST['url'])){
        $urlerror="URL is required";
        $valid=false;
    }else{
        $url=test_input($_POST['url']);

        if(!validateUrl($url)){
            $urlerror="Invalid url";
            $valid=false;
        }
    }

  if($valid){
    
  } 
}


function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);

    return $data;
}

function validateEmail($email){
    return filter_var($email,FILTER_VALIDATE_EMAIL);
}

function validateName($name){
    return preg_match("/^[a-zA-Z ]*$/",$name);
}


function validatePass($pass){
    return preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,}$/",$pass);
}


function validateUrl($url){
    return filter_var($url,FILTER_VALIDATE_URL);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validate</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <span>Name: </span>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">*<?php echo $namerror ?></span>
    <span class="error">*<?php if(!$namerror){echo $name;} ?></span>
    <br> <br>
    <span>Email: </span>
    <input type="text" name="email" value="<?php echo  $email; ?>">
    <span class="error">*<?php echo $emailerror; ?></span>
    <span class="error">*<?php if(!$emailerror){echo $email;} ?></span>
    <br><br>

    <span>Website</span>
    <input type="text" name="url" value="<?php echo $url; ?>">
    <span class="error">*<?php echo $urlerror; ?></span>
    <span class="error">*<?php if(!$urlerror){echo $url;} ?></span>
    <br><br>

    <span>Password</span>
    <input type="password" name="pass" value="<?php echo $pass; ?>">
    <span class="error">*<?php echo $passerror; ?></span>
    <span class="error">*<?php if(!$passerror){echo $pass;} ?></span>
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>
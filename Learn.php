
<?php

include 'conn.php';




if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    $insert=mysqli_query($conn,"INSERT INTO Learn values('','$fname','$age','$gender')");

    if($insert){
       echo "<script>alert('Inserted successful')</script>')";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            align-items:center;
            background:aqua;
            text-align:center;
            width: 12em;
            margin:auto;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Simple Form</h1>
        <Span>Fname:</Span>
        <input type="text" name="fname" required>
        <br><br>

        <Span>Age:</Span>
        <input type="number" name="age" required>
        <br><br>
        <span>Gender:</span>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        
        <br><br>
        <input style="color:blue;background:aqua;border:3px solid yellow;" type="submit" name="submit" value="Send To">
        

    </form>
</body>
</html>
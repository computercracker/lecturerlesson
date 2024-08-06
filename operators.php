<!DOCTYPE html>
<html>
<head>
    <title>PHP Arithmetic Operations</title>
</head>
<body>

<form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    Operation:
    <select name="operation" required>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select>
    <br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    if ($operation == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operation == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operation == 'divide') {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = 'Error: Division by zero';
        }
    }

    echo "<h2>Result: $result</h2>";
}
?>

</body>
</html>

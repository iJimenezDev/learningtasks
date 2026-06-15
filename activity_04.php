<!DOCTYPE html>
<html>
<head>
    <title>Activity 4</title>
</head>
<body>

<?php
if (isset($_POST["btnSubmit"])) {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    $answer = $num1 + $num2;

     if ($operation == "+") {
        $answer = $num1 + $num2;
    } elseif ($operation == "-") {
        $answer = $num1 - $num2;
    } elseif ($operation == "*") {
        $answer = $num1 * $num2;
    } elseif ($operation == "/") {
        if ($num2 != 0) {
            $answer = $num1 / $num2;
        } 
    }
    echo "The answer is <strong>$answer</strong><br><br>";
}
?>

<form method="post" action="">
    <label>Enter 1st Number</label><br>
    <input type="number" name="num1" required><br><br>

    <label>Enter 2nd Number</label><br>
    <input type="number" name="num2" required><br><br>

     <label>Select Operation</label><br>
    <select name="operation">
        <option value="+">Addition </option>
        <option value="-">Subtraction </option>
        <option value="*">Multiplication </option>
        <option value="/">Division </option>
    </select><br><br>

    <input type="submit" name="btnSubmit" value="Perform the magic!">
</form>

</body>
</html>
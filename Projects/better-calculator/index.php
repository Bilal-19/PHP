<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator
    </title>
</head>

<body>
    <!-- Step attribute is used in input element to accept decimal values -->
    <form action="index.php" method="post">
        First Number: <input type="number" name="num1"> <br>
        Operator: <input type="text" name="operator"> <br>
        Second Number: <input type="number" name="num2"> <br>
        <input type="submit">
    </form>

    <!-- Backend -->
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == '+') {
        echo "Addition: ", $num1 + $num2;
    } elseif ($operator == '-') {
        echo "Subtraction: ", $num1 - $num2;
    } elseif ($operator == '*') {
        echo "Multiplication: ", $num1 * $num2;
    } elseif ($operator == '/') {
        echo "Division: ", $num1 / $num2;
    } else {
        echo "Invalid Operator";
    }
    ?>

</body>

</html>
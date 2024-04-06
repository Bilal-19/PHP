<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>

<body>
    <form action="index.php" method="get">
        Enter first number: <input type="number" name="num1">
        <br>
        Enter second number: <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    <!-- Backend -->
    <?php
    // get value of input field
    $firstValue = $_GET['num1'];
    $secondValue = $_GET['num2'];

    echo "Total Sum:", $firstValue + $secondValue;
    ?>
</body>

</html>
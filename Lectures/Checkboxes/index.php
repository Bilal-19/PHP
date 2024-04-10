<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Select Fruits</label> <br>
        <input type="checkbox" name="fruits[]" value="apple">Apple<br>
        <input type="checkbox" name="fruits[]" value="orange">Orange<br>
        <input type="checkbox" name="fruits[]" value="mango">Mango<br>
        <input type="checkbox" name="fruits[]" value="banana">Banana<br>

        <input type="submit">
    </form>

    <?php
    $fruitArray = $_POST["fruits"];

    // Access first value of array
    echo "First Value: ", $fruitArray[0];
    ?>
</body>

</html>
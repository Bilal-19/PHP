<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <!-- Array: Store more than one piece of information -->
    <!-- Elements/Items of array -->
    <?php
    $phoneBrand = array("Sumsung", "Real Me", "Xiaomi", "Vivo");

    // Array can store any type of value
    // All values of array have assigned index position
    $randomValues = array("first", 3, true);

    // Access the first value of array
    echo "Array first value:",$phoneBrand[0];

    echo "<br>";

    // Access the third value of array
    echo "Array second value:",$phoneBrand[2];

    echo "<br>";

    // Modify the value of array at index position 3
    $randomValues[2] = "Nokia";
    echo "Modified second value of array:",$randomValues[2];

    echo "<br>";

    // Add new elements to the array
    $randomValues[3] = 300;
    echo "$randomValues[3]";

    echo "<br>";

    // Access the undefined array index
    echo "$randomValues[10]";

    echo "<br>";

    // Compute the total length of array
    echo "Array total length: ",count($randomValues);
    ?>

</body>

</html>
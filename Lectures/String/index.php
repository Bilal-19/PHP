<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $phrase = "The Tech Academy";
    echo "Original String: ", $phrase;

    echo "<br>";

    // convert to lowercase
    echo "Lowercase String:", strtolower($phrase);

    echo "<br>";

    // convert to uppercase
    echo "Uppercase String:", strtoupper($phrase);

    echo "<br>";


    // compute total no of characters
    echo "Total No of Letters: ", strlen($phrase);

    echo "<br>";

    // 'index' refer to specific characters in a string
    // Find the first character in a string
    echo "First letter of a string $phrase: ", $phrase[0];

    echo "<br>";

    // Task: Find the first letter of your name
    echo "Bilal"[0];

    echo "<br>";

    // Modify the string
    $data = "Hello";
    echo "Original String: ", $data;

    echo "<br>";

    $data[0] = "Y";
    echo "Modify String: ", $data;

    echo "<br>";

    // Replace the string
    $academyName = "Tech Academy";

    echo "Original String: ", $academyName;

    echo "<br>";

    echo "Replace String: ", str_replace("Tech", "E-Tech", $academyName);

    echo "<br>";

    $companyName = "Inovative Tech Company";

    echo "Original String: ", $companyName;

    echo "<br>";

    // Find substring in a string
    
    //start from index 10 till the last
    echo "Reading from index 10: ", substr($companyName, 10);

    echo "<br>";

    //start from index 10 and return four characters
    echo "Reading from index 10 to first four letters: ", substr($companyName, 10, 4);
    ?>
</body>


</html>
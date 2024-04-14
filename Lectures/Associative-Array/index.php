<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Submit">
    </form>


    <!-- A special type of array, where data is stored in the form of key value pair -->
    <?php
    // Define an associative array
    // Here, the key is 'Bilal' and the value is 'A+'
    $Grades = array("Bilal" => "A+", "Rohan" => "B-", "Abdul" => "C-");

    // Access the key of array
    echo "Grade of Student Rohan is: ", $Grades["Rohan"];

    echo "<br>";

    // Modify the value of associative array
    $Grades['Abdul'] = "B+";

    echo $Grades["Abdul"];

    echo "<br>";

    // Compute total length of array
    echo "Total length of array: ", count($Grades);
    echo "<hr>";

    // Here, we're getting value using associative arrays
    echo "Grade of ", $_POST["student"], " is ", $Grades[$_POST["student"]];
    ?>
</body>

</html>
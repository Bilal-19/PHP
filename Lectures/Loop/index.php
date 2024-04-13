<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>

<body>

    <?php
    // While loop: Used to loop over a certain block of code while a certain condition is true
    // While loop have two parts: loop condition and loop body
    
    $index = 10;
    while ($index <= 20) {
        echo "$index <br>";
        $index++;  //$index = $index + 1
    }

    // Do wile loop: Loop body execute first and then condition will be checked
    // while loop: First condition will check and then loop body will be execute
    
    $a = 4;
    do {
        echo "$a <br>";
        $a++;
    }
    while ($a <= 4);

    // for loop
    for ($x = 1; $x <= 10; $x++) {
        echo "$x <br>";
    }

    // for loop is more simpler than while loop
    
    // Example: Using for loop, iterate over an array
    $data = array(10, 15, 18, 20, 24, 29);
    for ($i = 0; $i < count($data); $i++) {
        echo "$data[$i] <br>";
    }
    ?>
</body>

</html>
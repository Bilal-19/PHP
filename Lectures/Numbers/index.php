<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // positive number
    echo "Positive Number: ", 40;

    echo "<br>";
    // negative number
    echo "Negative Number: ", -20;

    echo "<br>";
    // decimal number
    echo "Decimal Number: ", 2.9585;

    // There are two categories of numbers
    // 1. decimal number / floating point number 
    // 2. Integer Number
    
    // perform arithmetic operation
    echo "<br>";

    // Addition
    echo "Addition: ", 5 + 9;

    echo "<br>";

    // Subtraction
    echo "Subtraction: ", 10 - 8;

    echo "<br>";

    // Multiplication
    echo "Multiplication: ", 3 * 9;

    echo "<br>";

    // Division
    echo "Divition: ", 8 / 4;

    echo "<br>";

    // Modulus operator
    // Return the remainder after dividing 10 with 3
    echo "Remainder: ", 10 % 3;

    echo "<br>";
    // Order of operation
    // 1. Multiplication/Division
    // 2. Addition/Subtraction
    
    // Here, first 5*10 which is 50 and then 4 is added to 50, results in 54
    
    echo 4 + 5 * 10;

    echo "<br>";

    // To change the order of operation, we have to place the round bracket
    echo (4 + 5) * 10;

    echo "<br>";

    // Storing a number into a variable
    $num = 10;
    echo $num;

    echo "<br>";

    // Increment
    
    //add 1 to the number
    // echo "Before Increment: ", $num;
    // $num++;
    // echo "<br>";
    // echo "After Increment: ", $num;
    
    echo "<br>";

    // add 5 to the number
    // echo "Before Increment: ", $num;
    // $num = $num + 5;
    // echo "<br>";
    // echo "After Increment: ", $num;
    
    echo "<br>";

    // add 15 to the number using shorthand
    echo "Before Increment: ", $num;
    $num += 15;
    echo "<br>";
    echo "After Increment: ", $num;

    echo "<br>";

    // Math Operation
    // 1. Absolute value of a number
    echo abs(-50);

    echo "<br>";

    // 2. Take the power of a number
    
    // 2**4
    echo pow(2, 4);

    echo "<br>";

    // 3. Take the square root of a number
    echo sqrt(144);

    echo "<br>";

    // 4. max(a,b) returns the bigger number either 'a' or 'b'
    echo max(4, 2);

    echo "<br>";

    // 5. min(a,b) returns the smaller number
    echo min(3, 8);

    echo "<br>";

    // 6. 'round' round the number to integer
    echo round(3.2698);

    echo "<br>";

    // 7. 'ceil' round up the number
    echo ceil(5.2);

    echo "<br>";

    // 8. 'floor' round down the number
    echo floor(3.9);
    ?>
</body>

</html>
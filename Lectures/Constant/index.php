<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>

<body>

    <?php
    define("UserAge", 24);
    // echo "User age is: ", UserAge;
    
    // echo "<br>";
    
    // Second Method to define constant
    const usermessage = "Hello User";
    // echo usermessage;
    // echo "<br>";
    
    // Constant Array
    define("fruits", ["Apple", "Mango", "Watermelon", "Pineapple", "Blueberry"]);
    // echo fruits[0];
    
    // echo "<br>";
    // Constant are global
    // Accessing constant inside a funtion
    
    define("Greeting", "Hello User");

    function user()
    {
        echo Greeting;
    }

    echo user();


    ?>
</body>

</html>
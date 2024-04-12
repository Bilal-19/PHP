<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>

<body>
    <?php
    // Conditional Statement: Allow program to make decision
    
    // Here, the variable 'isMale' is boolean variable because it is storing boolean value
    $isMale = true;
    if ($isMale) {
        echo "You are male";
    }

    $isValidUser = true;
    if ($isValidUser) {
        echo "Redirecting to login page....";
    } else {
        echo "Username or password is inccorrect";
    }

    echo "<br>";

    // '&&' logical operator
    $isGraduated = true;
    $haveExperienced = true;

    if ($isGraduated && $haveExperienced) {
        echo "Eligible for job";
    } else {
        echo "Not eligible";
    }

    echo "<br>";

    // "||" logical operator
    // Here, one of the condition only needs to be true
    $highestQualification = "BSSE";
    $cgpa = 3.4;

    if ($highestQualification === 'Masters' || $cgpa > 3.0) {
        echo "Your starting salary will be: 200K PRK";
    } else {
        echo "You are not qualified for this role";
    }

    echo "<br>";

    // Multiple if else statement
    $username = "Bilal";
    $password = '12345678';

    if ($username == 'bilal' && $password == '12345678') {
        echo "Username / Password is incorrect";
    } elseif ($username === 'Bilal' && $password === '12345678') {
        echo "Redirecting to login page";
    } else {
        echo "Try again after five seconds.....";
    }

    echo "<br>";

    // Comparison Operator: less than, greater than, less than equal to, greater than equal to, equal to, not equal to
    // Function: Take two number as inpur and return maximum number
    function getMax($a, $b)
    {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }
    echo getMax(40, 50);

    echo "<br>";

    // Take three numbers as input and return the maximum number
    function getMaximum($x, $y, $z)
    {
        if ($x >= $y && $x >= $z) {
            return $x;
        } elseif ($y >= $x && $y >= $z) {
            return $y;
        } else {
            return $z;
        }
    }
    echo getMaximum(3, 4, 8);

    echo "<br>";

    echo getMaximum(30, 6, 18);
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <p>What was your grade?</p>
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <!-- Backend -->
    <?php
    $grade = $_POST['grade'];

    // 'break' keyword is used to stop checking the further case if one of them already true
    switch ($grade) {
        case "A":
            echo "You did amazing!";
            break;
        case "B":
            echo "You did pretty good";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You did very bad";
            break;
        case "F":
            echo "You FAIL!";
            break;
        // Similar to else statement
        default:
            echo "Invalid Grade";
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game</title>
</head>

<body>
    <!-- Frontend -->
    <form action="index.php" method="get">
        Color: <input type="text" name="color">
        Plural Noun: <input type="text" name="pluralNoun">
        Person Name: <input type="text" name="person">
        <input type="submit">
    </form>

    <!-- Backend -->
    <?php
    $color = $_GET['color'];
    $pluralNoun = $_GET['pluralNoun'];
    $person = $_GET['person'];
    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $person <br>";
    ?>
</body>

</html>
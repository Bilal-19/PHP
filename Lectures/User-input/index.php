<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Frontend -->
    <form action="index.php" method="get">
        Username: <input type="text" name="username">
        Age: <input type="number" name="userage">
        <input type="submit">
    </form>

    <!-- Backend -->
    <?php
    $username = $_GET['username'];
    $age = $_GET['userage'];
    echo "Name: $username & Age: $age";
    ?>

</body>

</html>
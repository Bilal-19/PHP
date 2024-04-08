<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST GET</title>
</head>

<body>
    <!-- get -->
    <!-- <form action="index.php" method="get">
        Password: <input type="password" name="password">
        <input type="submit">
    </form> -->
    <!-- <?php echo "Your password is: ", $_GET["password"] ?> -->
    <!-- <hr> -->

    <!-- post -->
    <form action="index.php" method="post">
        Credit Card: <input type="password" name="credit-card">
        <input type="submit">
    </form>
    <?php echo "Your credit card infomtation: ", $_POST["credit-card"] ?>
</body>

</html>
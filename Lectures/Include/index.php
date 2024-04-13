<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Hello World";
    // 'include filename' is used to add file in php
    include "header.html";

    include "footer.html";

    // Including PHP
    // 1. Creating a template
    // 2. Create variables and functions in a separate file, to use it multiple tie,
    
    // We can also include .php file
    // Here, 'article-header.php' is a template file
    $title = "My first post";
    $author = "Bilal";
    $wordCount = 400;
    include "article-header.php";


    // Using the functionality of another php file inside this file
    include "useful-tools.php";
    echo $feetInMile;
    echo sayHi("Bilal");
    ?>
</body>

</html>
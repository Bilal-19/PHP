<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Class is a custom data type that allow you to model something in the real world
    // Class is a blueprint / template for creating objects
    class Book
    {
        var $title;
        var $author;
        var $numberOfPages;
    }

    // Creating instance of the Book class
    $firstBook = new Book();
    $firstBook->title = "Harry Potter";
    $firstBook->author = "JK Rowling";
    $firstBook->numberOfPages = 300;

    echo $firstBook->author;

    // Creating second instance of the Book class
    $secondBook = new Book();
    $secondBook->title = "Lord of the Rings";
    $secondBook->author = "Tolkiens";
    $secondBook->numberOfPages = 250;

    echo $secondBook->title;

    echo "<br>";

    // Constructor: A special function which is get called when the object of a class is created.
    class Car
    {
        var $modelName;
        var $category;
        var $price;

        function __construct()
        {
            echo "New object created";
        }
    }
    $toyota = new Car();
    $toyota->modelName = "Toyota Prius";
    $toyota->category = "Automatic";
    $toyota->price = "50 Lac";


    // Constructor with parameter and argument
    class Laptop
    {
        var $brandName;
        var $storage;
        var $RAM;

        function __construct($name)
        {
            echo "$name";
        }
    }

    $Laptop1 = new Laptop("Lenovo");


    // Previously, we created a single object using 3 to 4 lines.
    // What happen if we have to create more than 100 objects.
    // To handle this complexity, we will now create object in a single line.
    // 'this' refer to current object in PHP.
    
    class CandidateScore
    {
        var $studentName;
        var $HTML;
        var $CSS;
        var $JS;
        var $Bootstrap5;

        function __construct($student, $html, $css, $js, $css_framework)
        {
            $this->studentName = $student;
            $this->HTML = $html;
            $this->CSS = $css;
            $this->JS = $js;
            $this->Bootstrap5 = $css_framework;
        }
    }

    $studentOne = new CandidateScore("Bilal", 80, 95, 82, 90);
    echo "HTML Score: ", $studentOne->HTML;

    // We can also modify the value of attribute
    $studentOne->HTML = 90;
    echo $studentOne->HTML;

    // Object Function:
    // A function that is defined inside a class
    // Different object of the class can use that function
    
    // Example: Create a function that determine whether the student is on the honor role or not
    // Rule for honor role: If the student gpa is greater than 3.5, then the students is at the honor rule.
    
    class Student
    {
        var $studentname;
        var $major;
        var $gpa;
        function __construct($name, $major, $gpa)
        {
            $this->studentname = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonor()
        {
            if ($this->gpa >= 3.5) {
                return "true";
            }
            return "false";
        }
    }

    $student1 = new Student("Bilal", "BSSE", "3.8");
    echo $student1->hasHonor();

    // Getter and Setter
    // Visibility Modifiers: It tell, what code is able to access and reuse different attributes in our program
    // Note: After making the attribute private, we have to create getter and setter method for that specific attribute.
    class Movies
    {
        public $movieName;
        private $movieReviews;

        function __construct($movieName, $movieReviews)
        {
            $this->movieName = $movieName;
            $this->setRating($movieReviews);
        }
        // getter method
        function getMovieName()
        {
            return $this->movieName;
        }

        function getMovieReviews()
        {
            return $this->movieReviews;
        }

        // setter method
        function setMovieName($newMovieName)
        {
            $this->movieName = $newMovieName;
        }

        function setRating($newRating)
        {
            if ($newRating > 0 && $newRating <= 4) {
                $this->movieReviews = $newRating;
            } else {
                $this->movieReviews = "Not Rated";
            }

        }
    }
    $movie1 = new Movies("The Pursuit of Happiness", 2.5);

    // read values
    echo $movie1->getMovieName();
    echo $movie1->getMovieReviews();

    // set values
    echo $movie1->setMovieName("The beauty of mind");

    echo $movie1->getMovieName();

    echo $movie1->setRating('happy');

    echo $movie1->getMovieReviews();

    // Inheritance
    // Using the attributes and functionalities of another class
    class Chef
    {
        function makeChicken()
        {
            echo "The chef makes chicken <br>";
        }

        function makeSalad()
        {
            echo "The chef makes salad <br>";
        }

        function makeSpecialDish()
        {
            echo "The chef makes BBQ <br>";
        }
    }

    class ItalianChef extends Chef
    {
        function makePasta()
        {
            echo "The Italian chef makes Pasta <br>";
        }

        // Overriding the parent class method
        function makeSpecialDish()
        {
            echo "The Italian chef makes Biryani";
        }
    }

    $generalChef = new Chef();
    $generalChef->makeChicken();

    $italianChef = new ItalianChef();
    $italianChef->makeSalad();
    $italianChef->makePasta();
    $italianChef->makeSpecialDish();
    ?>
</body>

</html>
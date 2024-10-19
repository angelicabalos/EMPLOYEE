<?php

// mga child class
include_once("./Developer.php");
include_once("./Manager.php");

// kaya include one para isang beses lang matawag yung parent class
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // instantiation | gumagawa ng object
    $developer = new Developer("Andrew", 100000, "PHP, Python");
    $manager = new Manager("Camille", 50000, "Accounting");


    // display data in magandang way
    echo $developer->getEmployeeDetails();
    echo "</br>";
    echo $manager->getEmployeeDetails();

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>PHP Syntax Lesson</h1>

<h2> PHP Function Arguments</h2>
<?php

    echo "<h3>Example 1</h3>";

    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }

    familyName("John");
    familyName("Hege");
    familyName("Jane");
    familyName("Mary");
    familyName("Mark");

    echo "<br>";

    function lastnameName($lname,$year) {
        echo "$fname Refsnes. Born in $year<br>";
    }

        familyName("John",2000);
        familyName("Hege",2000);
        familyName("Jane",2000);
        familyName("Mary",2000);
        familyName("Mark",2000);
?>


</body>
</html>
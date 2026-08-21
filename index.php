<?php

// If Statement
$firstName = "Danilo";

if ($firstName === "Danilo") {
    echo "Correct";
    echo "<br>";
}

// If else Statement
$userName = "guest";
$userPass = 1234;

if ($userName === "guest" && $userPass === 1234) {
    echo "Correct";
} else {
    echo "Incorrect";
}


// If... elseif... else Statement
$age = 69;

if ($age <= 17) {
    echo "Minor";
} else if ($age <= 59) {
    echo "Adult";
} else {
    echo "Senior";
}

// Switch Statement
$favAnimal = "cat";

switch ($favAnimal) {

    case "cat":
        echo "Your favorite is cat";
        break;

    case "dog":
        echo "Your favorite is dog";
        break;

    default:
        echo "Input your favorite animal";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>

</body>
</html>

<!-- add file -->
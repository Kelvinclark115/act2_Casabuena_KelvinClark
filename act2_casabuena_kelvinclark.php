   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Activity 2</title>
</head>
<body>
 <?php
   //Kelvin
    /*
    FULL NAME: CASABUENA, KELVIN CLARK, R.
    AGE: 19
    ADDRESS: TUKTUKAN GUIGUINTO BULACAN
    HOBBIES: BIKE, GAMING, READING 
    DREAM JOB: NOTHING
    COURSE: BSIS
    SCHOOL: BULACAN POLYTECHNIC COLLEGE
    */
    
    $me = [
        "name" => "Casabuena, Kelvin Clark, R.",
        "age" => 19,
        "address" => "Tuktukan Guiguinto Bulacan",
        "hobbies" => "Reading",
        "dream_job" => "nothing",
        "course" => "BSIS",
        "school" => "Bulacan Polytechnic College"
    ];

    echo "<h2> My Personal Profile</h2>";
    echo "<p><strong>Name: </strong>" . $me["name"] . "</p>";
    echo "<p><strong>Age: </strong>" . $me["age"] . "</p>";
    echo "<p><strong>Address: </strong>" . $me["address"] . "</p>";
    echo "<p><strong>Hobbies: </strong>" . $me["hobbies"] . "</p>";
    echo "<p><strong>Dream Job: </strong>" . $me["dream_job"] . "</p>";
    echo "<p><strong>Course: </strong>" . $me["course"] . "</p>";
    echo "<p><strong>School: </strong>" . $me["school"] . "</p>";

    print "I am " . $me["name"] . ", a " . $me["course"] . " student of " . $me["school"] . ".";

    ?>
</body>
</html>
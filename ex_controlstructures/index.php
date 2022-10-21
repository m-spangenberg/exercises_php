<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
</head>
<body>
    
    <?php
    
    $a = 5;
    $b = 7;

    if ($a === $b) {
        echo "these numbers are the same";
    } else {
        echo "they are not the same";
    }

    switch ($a) {  // condition
        case 10:  // check condition
            echo "something";
            break; // break out
        case 20:
            echo "something else";
            break;
        default:
            echo "\nphew!";
            break;
    }

    // executes if true
    while ($a <= 10) {
        echo "a loop ";
        $a++;
    }

    // executes at least once
    do {
        echo "looped";
    } while ($a <= 10);

    // standard for-loop, same as Java, C and C++
    for ($i = 0; $i <10; $i++) {
        echo "this is loop" . $i;
    }

    // foreach - for items in array
    $testArray = ["Ford", "Toyota", "Mercedes-Benz"];
    foreach ($testArray as $value) {  // shitty reversed syntax
        echo $value;
    }

    // dictionary style arrays (associative arrays)
    $test2Array = [
        "Name" => "Bobby",
        "Eyecolor" => "Green"
    ];

    foreach ($test2Array as $key => $value) {
        echo $key . ": " . $value;
    }
    
    ?>

</body>
</html>
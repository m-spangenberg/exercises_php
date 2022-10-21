<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax</title>
</head>
<body>

    <?php

        $declaredVariable;  // declared by not assigned

        CONST PI = 3.14;  // constant declaration and assignment (capitalized, no $)
    
        if (1 == 1) {
            echo "<p>This is some text</p>"
        }

        $myName = "username";  // string
        $myAge  100;  // integer
        $canCode = true;  // boolean

        $num1 = 10
        $num2 = 20
        $num1 += $num2
        echo $num1

        // = assignment, == equality, === strict equality (like in JavaScript)
        // $a and $b - true if both $a and $b are true.
        // $a && $b - true if both $a and $b are true. (see operator precedence)
        // "||" has a greater precedence than "or"
        // $a <=> $b spaceship
        
        // $num1 = 5;
        // ++$num1; will output 6 -- increment prepended
        // $num5++; will output 5 -- increment appended

        // string operator
        // $a = "bubba"
        // $b = "sparx"
        // $c = $a . $b
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <?php

    function nameFunc($first, $last) {
        $returnValue = $first . " " . $last;
        return $returnValue;
    }

    if (1 == 1) {
        echo "<h1>${returnedVal}</h1>", nameFunc("bobby", "brown");
    }

    ?>
</body>
</html>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session</title>
</head>
<body>

    <?php
        // SESSION VARIABLE
        $_SESSION['username'] = "randomUser360";

        // CHECK IF SESSION IS SET
        if (!isset($_SESSION['username'])) {
            echo "Not logged in.";
        } else {
            echo "Logged in.";
        }
    ?>
    
</body>
</html>
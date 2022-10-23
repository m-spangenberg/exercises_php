<?php
    
    include_once 'includes/db.inc.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Database</title>
</head>
<body>
    
    <?php

        // craft a query
        $sql = "SELECT * FROM posts;";
        // query the database
        $qry = mysqli_query($conn, $sql);
        // output results of the query
        $results = mysqli_num_rows($qry);

        if ($results > 0) {
            // pass each row from db to row
            while ($row = mysqli_fetch_assoc($qry)) {
                echo $row['subject'] . "<br>";
                echo $row['date'] . "<br>";
            }
        }

    ?>

</body>
</html>
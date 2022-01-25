<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
    <h1> Champs radio</h1>
<?php
    // premiere boucle
    for ($i = 0; $i<10 ; $i++){
        echo "<div>";
        echo "<input type='radio' >" . $i;
        // je peux aussi faire
        echo "<input type='radio' value=' $i'>";
        echo "</div>";
    }
    //  A NE PAS FAIRE 
    ?>
</body>
</html>
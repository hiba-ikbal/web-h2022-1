<?php
    $mot = "Lorem Ipsum sin dolori";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les chaines</title>
</head>
<body>
    <h1> Mot:  <?= $mot ?></h1>
    <div> Longueur:  <?= strlen($mot) ?></div>
    <div> Position orem:  <?= strpos($mot,"orem")?></div>
    <div> Remplacer:  <?= str_replace("rem","gique",$mot)?></div>
    <div> Substring:  <?= substr($mot,1,4)?></div>
    
</body>
</html>
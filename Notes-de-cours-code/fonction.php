<?php
    function hasher($mot){
        // la fonct initilise et retrun 
        $result = "";

        $result = sha1($mot);
        // sha1 est une fonct de hash cad on crypte la valeur? 
        // on utilise plus sha1 psq c est rapide est facile a reverse
        // on peut utiliser la rambow table pour le trouver easy
        // c'est moins pire qu'un mdp en clear text
        // sha1 est identique aka change pas la valeur de hashage
        //
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
</head>
<body>
    <h1> Création d'un hash</h1>
    <?= hasher("John")?>

</body>
</html>
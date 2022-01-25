<?php
// il y a aussi require -> va cherhcer le fichier et les copie a chaque fois peut importe si y a deja ou pas
// include_once -> s'il trouve pas le fichier ft pas planter la page donne un warning pas secu
// require_once -> donne une erreur qd y a pas le fichier demande + donne une erruere si le fichier voulu est deja la 
require_once("lib/Utils.php");
// comme si je ss alle dns le ichier et j ai ft copier coller ici
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichiers externes</title>
</head>
<body>
    Résultat: <?= resultatFormScientifique(3,2)?>
    
</body>
</html>
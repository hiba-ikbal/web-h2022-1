<?php
    // ctrl+É pour commentaire 
    $Valeur_variable = 3;
    // f5  Ne pas oublier pour vider cache
    // ; et une variable est précédée de $
    $username = "John";
    //le navi demande au serveur variable.php
    //avant de l'env il le passe au module php
    // il ttraduit le php dns le dossier ne l'env pas ms env qu'il a fini pq le serveur traduit le html
    
    // si je mets $username = 0 
    // pas le mm type que dns le if donc il mets 0 Smith comme js ft lui demander de comparer ;es mm types sinn il le ft pareil 
    // comparer la valeur aussi on mets ===

    // !!!!!!!! Ne pas oublier tout code de php le mettre ici 
    // Premier if :
    if($username === "John"){
        $username = $username . "Smith";
        //pas + mais . pour php
    }

?>
<!DOCTYPE html <?= $Valeur_variable ?>>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    Nom: <?php  echo $username ?>
    <!--  une fois echo code il env la valeur deja traduite , le nav recoit que 
          ce qu'on env sinn elle reste bien securise en module -->
    Nom a la place de echo: <?= $username ?> 
        <!-- Qd on a besoin d'env la valeur au nav ms ss utiliser echo  -->
        <!-- apache ne ft qu'env le code il evolue rien il st pas c'est quoi le commentaire -->
        <!-- commentaire est evolué par le navigateur donc la valeur est env pareil  -->
        <!-- si on met en commenatire   <?= $username ?> on aura  < !--John -->
        

</body>
</html>
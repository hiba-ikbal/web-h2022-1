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
    //  A NE PAS FAIRE 
    for ($i = 0; $i<10 ; $i++){
        echo "<div>";
        echo "<input type='radio' >" . $i;
        // je peux aussi faire
        echo "<input type='radio' value=' $i'>";
        echo "</div>";
    }
    // meilleur facon de faire
    for ($i = 0; $i<10 ; $i++){
        
    ?>
    <!-- pour mettre du code html dns du php -->
      <div>
          
          <input type="radio" name = "<?= $i?>"> <?= $i?>
      </div>
     <?php
    }

    $j = 10;
    while ($j>0){
        $j--;
        echo $j;
        // NE PAS OUBLIER DE FAIRE J-- SINN BOUCLE INFINIE 
    }

    // Premier tableau
     $tab = []; 
    //  ou écrire array();
    $tab[] = "Hello";
    // Si les crochets sont collés sur la variable,c'est un push
    // comme si on veut dire a l indice 0 c est pas prevu donc on le mets a la fin?
    // pareil que array_push en js
    $tab[] = "World";

    //Premier foreach()

    foreach($tab as $element){
        ?>
        <div>
            <?= $element ?>
        </div>
        <?php
    }
    
    // Des fois on a besoin que de echo de la tab 
    //  si je fs echo $tab; ca dit que c'est un tableau et qu'il ne paut pas faire un echo d'un array 
    // dans ce cas on ft var_dump -> plus pratique pour les structures complexes
    // Ca dit et la valeur et le type de la var

    var_dump($tab);

    
   
   ?>
</body>
</html>
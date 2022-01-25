<?php
    $showbox = false;
    
    if(!empty($_GET["info"])&& strlen($_GET["info"])>5 ){
        $showbox = true;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formualaire</title>
</head>
<body>

   <div>
        bravo
    </div>
    <!-- Mettre la div d'en haut en condition s'affiche que qd on ecris de quoi > 5-->
    <?php

        // if(!empty($_GET["info"])&& strlen($_GET["info"])>5 ){
            // info est le nom du formulaire
            //ajouter !empty 
            // !empty = variable existe, elle n'est pas nulle,elle n'est pas vide,elle n'est pas "", ni 0
            // ss empty on aur des notices psq la personne a rien ecrit 
            //  pour plus de secu on divise l'affichage et le reste pas dns la mm place :
            // cei devient:
            if($showbox){          
            
            ?>
            <div style="color:green;">
            BRAVO!
        </div>
            
            <?php
        }
    ?>
    <form action="formulaire.php" method="get">
    <div>
        info: <input type="text" name = "info" />
    </div>
    <div>
        <input type="submit" value="GO!">
    </div>
    </form>
</body>
</html>
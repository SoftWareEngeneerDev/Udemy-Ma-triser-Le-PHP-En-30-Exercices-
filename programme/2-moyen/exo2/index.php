<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Les Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require "gestionTableaux.php";
$tab=[1,3,4,6,8,35,7,9];
$tab2=[10,2,8,6,44,22];
// afficheTableau($tab);
// echo calculerMoyenne($tab);
// echo "<pre>";
// if(tableauPair($tab)){
//     echo "le tableau contient que des nombre pairs";
// }else{
//     echo "le tableau ne contient pas que des nombre pairs";
// }

// echo "<pre>";
// afficheTableau($tab2);
// echo calculerMoyenne($tab2);
// echo "<pre>";
// if(tableauPair($tab2)){
//     echo "le tableau contient que des nombre pairs";
// }else{
//     echo "le tableau ne contient pas que des nombre pairs";
// }
?>
<div class="row text-center">
    <div class="col">
        <h2>Tableau1</h2>
        <?php 
            afficheTableau($tab);
            echo calculerMoyenne($tab);
            echo "<pre>";
            if(tableauPair($tab)){
                echo "le tableau contient que des nombre pairs";
            }else{
                echo "le tableau ne contient pas que des nombre pairs";
            }
        ?>
    </div>
        
    <div class="col">
    <h2>Tableau2</h2>
    <?php 
            afficheTableau($tab2);
            echo calculerMoyenne($tab2);
            echo "<pre>";
            if(tableauPair($tab2)){
                echo "le tableau contient que des nombre pairs";
            }else{
                echo "le tableau ne contient pas que des nombre pairs";
            }
    ?>
    </div>
</div>
<!--   -->
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les Tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 100);
$random2 = rand(1, 100);
echo "Le chiffre 1:<b> " . $random . "</b><br>";
echo "Le chiffre 2: <b>" . $random2 . "</b><br>";
$resultat = abs($random - $random2);
if ($resultat >= 25 && $resultat <= 75) {
    echo "la valeur absolue de <b> $random - $random2 </b> est comprise entre 25 et 75 <br>";
} else
    echo "la valeur absolue de <b> $random - $random2 </b> n'est pas comprise entre 25 et 75 <br>";

echo $resultat
?>

<!--   -->
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
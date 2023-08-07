<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Les Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$homme = ['Matthieu', 'Pierre', 'Marc', 'Jean'];
//echo $homme[1];

for ($i = 0; $i < count($homme); $i++) {
    echo "$i : $homme[$i] <br>";
}
echo "--------------------------------------------------------------<br>";
$femmes = [];
$femmes[] = "Morgan";
$femmes[] = "Samantha";
$femmes[] = "Marguerite";

foreach ($femmes as $indice => $femme) {
    echo "$indice: $femme <br/ >";
}
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
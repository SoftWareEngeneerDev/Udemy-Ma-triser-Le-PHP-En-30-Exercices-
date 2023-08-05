<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : La boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(1, 20);
echo "<h3>Le nombre est $random</h3>";
// while ($random < 15) {
// }
$cpt = 1;
while ($random < 15) {
    echo "Essaie $cpt Le nombre $random est trop petit</br>";
    $random = rand(1, 20);
    $cpt++;
}
echo "Le nombre est trop grand";
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
<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Les Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Marc = [12, 15, 13, 7, 18];
$Matthieu = [11, 15, 10, 4, 20, 8, 2];

$resultat = 0;
for ($i = 0; $i <= count($Marc) - 1; $i++) {
    $resultat += $Marc[$i];
}
echo "La moyenne des notes de <b>Marc</b> est:<b>" . ($resultat / count($Marc)) . "</b><br>";

$resultat = 0;

foreach ($Matthieu as $Matt) {
    $resultat += $Matt;
}
echo "La moyenne des note de <b>Matthieu</b> est:<b>" . ($resultat / count($Matthieu)) . "</b>";
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
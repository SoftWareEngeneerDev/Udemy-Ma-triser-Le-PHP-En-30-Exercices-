<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : La boucle For"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$random = rand(5, 15);
echo "<h2> Voici Le Cummule Des $random Premiers Nombres (en sens inverse): </h2>";
$resultat = 0;
for ($i = $random; $i >= 1; $i--) {
    $resultat += $i;
    echo "Etape " . ($random - $i + 1) . "- resultat =" . $resultat . "</br>";
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
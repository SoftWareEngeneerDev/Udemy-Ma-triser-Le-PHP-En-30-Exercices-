<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : La boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a = 5;
$b = 122;

function estChiffrePair($nombre)
{
    if ($nombre % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
echo "<pre>";
if (estChiffrePair($a)) {
    echo $a . " est pair.";
} else {
    echo $a . " n'est pas pair.";
}
echo "</pre>";

echo "<pre>";
if (estChiffrePair($b)) {
    echo $b . " est pair.";
} else {
    echo $b . " n'est pas pair.";
}
echo "</pre>";
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
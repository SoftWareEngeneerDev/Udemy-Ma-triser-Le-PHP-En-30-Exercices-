<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : La boucle While"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$monMot = "Coucou";
$monMotSansVoyelle = fonctionRep($monMot);
function fonctionRep($mot)
{
    $voyelle = ['e', 'a', 'u', 'o', 'i', 'y'];
    $resultat = str_replace($voyelle, '', $mot);
    return $resultat;
}
echo "$monMot sans voyelle est: $monMotSansVoyelle";
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
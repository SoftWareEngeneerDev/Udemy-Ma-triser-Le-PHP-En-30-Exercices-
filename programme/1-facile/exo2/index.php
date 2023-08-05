<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables Et terniaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pièrre";
$age2 = 32;
$homme2 = true;

echo "<p>";
echo $nom . " à " . $age . " ans ";
if ($homme === false) {
    echo "C'est une femme";
} else {
    echo "C'est un homme <pre>";
}
echo "<pre>";
echo $nom2 . " à " . $age2 . " ans ";
if ($homme2 === false) {
    echo "et c'est une femme";
} else {
    echo "et c'est un homme <pre>";
}

echo "</p>";

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
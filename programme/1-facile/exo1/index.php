<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a = 3;
$b = 5;
$c = 7;
echo "********************Avant permutation*********************************<br/>\n";
echo "A:" . $a . "<br/>";
echo "B:" . $b . "<br/>";
echo "C:" . $c . "<br/>";

echo "********************Après permutation*********************************<br/>\n";
$temp = $a;
$a = $b;
$b = $c;
$c = $temp;

echo "A:" . $a . "<br/>";
echo "B:" . $b . "<br/>";
echo "C:" . $c . "<br/>";
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
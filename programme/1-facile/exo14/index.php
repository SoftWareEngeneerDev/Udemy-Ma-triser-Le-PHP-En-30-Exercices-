<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Les Tableaux de tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$Marc = [12, 15, 13, 7, 18];
$Matthieu = [11, 15, 10, 4, 20, 8, 2];
$Pierre = [26, 97, 07, 26, 2, 0];
$Paul = [2, 6, 8, 0, 5, 26];

$tablauxNotes = [$Marc, $Matthieu, $Pierre, $Paul];

for ($i = 0; $i <= count($tablauxNotes) - 1; $i++) {
    echo "La moyenne des notes de la " . $i . " eme note est:<b>" . CalculerMoyenne($tablauxNotes[$i]) . "</b><br>";
}
// echo "La moyenne des note de <b>Matthieu</b> est:<b>" . CalculerMoyenne($Matthieu) . "</b><br>";
// echo "La moyenne des note de <b>Pierre</b> est:<b>" . CalculerMoyenne($Pierre) . "</b><br>";
// echo "La moyenne des note de <b>Paul</b> est:<b>" . CalculerMoyenne($Paul) . "</b><br>";

function CalculerMoyenne($notes)
{
    $resultat = 0;
    foreach ($notes as $note) {
        $resultat += $note;
    }
    return ($resultat / count($notes));
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
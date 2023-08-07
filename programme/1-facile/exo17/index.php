<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Les Tableaux Complexes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$j1 = [
    "nom" => "Matthieu",
    "age" => 30,
    "sexe" => true,
    "notes" => [2, 4, 6, 9, 24],
];
$j2 = [
    "nom" => "Marie",
    "age" => 32,
    "sexe" => false,
    "notes" => [2, 23, 6, 11, 24],
];
$j3 = [
    "nom" => "Paul",
    "age" => 25,
    "sexe" => true,
    "notes" => [2, 9, 6, 4],
];
$j4 = [
    "nom" => "Mireille",
    "age" => 21,
    "sexe" => false,
    "notes" => [67, 12, 6, 8, 24],
];

$joueurs = [$j1, $j2, $j3, $j4];

foreach ($joueurs as $joueur) {
    echo "---------------------------------<br>";
    afficherJoueur($joueur);
}
//Création des tableaux associatif
function afficherJoueur($joueur)
{
    echo "Nom:" . $joueur['nom'] . "<br> Age:" . $joueur['age'] . "<br>";

    if ($joueur['sexe']) {
        echo 'Sexe: Homme <br>';
    } else {
        echo 'Sexe: Femme <br>';
    }
    $resultat = 0;
    foreach ($joueur['notes'] as $indice => $note) {
        $resultat += $note;
        echo "Note" . ($indice + 1) . ":" . $note . "<br>";
    }
    echo "La moyenne est: " . ($resultat / count($joueur['notes'])) . "<br>";
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
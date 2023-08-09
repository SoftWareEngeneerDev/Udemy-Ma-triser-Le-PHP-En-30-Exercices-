<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 01: Les tables de miltiplications"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$ligne = [];
for ($j = 1; $j <= 10; $j++) {
    $colonne = [];
    for ($i = 1; $i <= 10; $i++) {
        $colonne[] = $i * $j;
    }
    $ligne[] = $colonne;
}
echo "<pre>";
// print_r($ligne)
?>
<?= "<pre>" ?>
<table class="table">
    <?php for ($j = 0; $j < 10; $j++): ?> 
        <tr>
            <?php for ($i = 0; $i < 10; $i++): ?>
                <td>
                    <?= $ligne[$j][$i] ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>   
</table>
<?= "<pre>" ?>
<!--   -->
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
$content = ob_get_clean();
require "../../global/common/template.php";
?>
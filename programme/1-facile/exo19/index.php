<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : La Méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="" mehod="POST">
    <div class="form-group">
        <label for="">Chiffre :</label>
        <input type="number" name="saisie" id="" class="form-control"></input>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>

<?php
if (isset($_POST['saisie']) && !empty($_POST['saisie'])) {
    if ($_POST['saisie'] % 2 !== 0) {
        echo " Le chiffre saisie n'est pas paire";
    } else {
        echo "Le chiffre saisi  est paire";
    }
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
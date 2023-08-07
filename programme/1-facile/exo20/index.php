<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<form action="" mehod="POST">
    <div class="form-group">
        <label for="">Note1 :</label>
        <input type="number" name="note1" id="" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label for="">Note2 :</label>
        <input type="number" name="note2" id="" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label for="">Note3 :</label>
        <input type="number" name="note3" id="" class="form-control" require></input>
    </div>
    <div class="form-group">
        <label for="">Note4 :</label>
        <input type="number" name="note4" id="" class="form-control" require></input>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>

<?php
if (
    isset($_POST['note1']) && !empty($_POST['note1']) &&
    isset($_POST['note2']) && !empty($_POST['note2']) &&
    isset($_POST['note3']) && !empty($_POST['note3']) &&
    isset($_POST['note4']) && !empty($_POST['note4'])

) {
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];
    $note3 = $_POST['note3'];
    $note4 = $_POST['note4'];
    $notes = [$note1, $note2, $note3, $note4];
    $moyenne = calculerMoyenne($notes);
    echo "<h2>La moyenne des " . count($notes) . " est : " . $moyenne . "</h2>";

    function calculerMoyenne($notes)
    {
        $resultat = 0;
        foreach ($notes as $note) {
            $resultat += $note;
        }
        return ($resultat / count($notes));
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
<?php 
function afficheTableau($tab){
    echo "<div>";
    for($i=0;$i< count($tab) ;$i++){
        echo ($i===0)? "": " - ";
        echo $tab[$i];
    }
    echo "</div>";
}

function calculerMoyenne($tabs){
    $resultat=0;
    foreach($tabs as $tab){
        $resultat +=$tab;
    }
    return ($resultat/count($tabs));

}
function tableauPair($tab){
    $pair = true;
    foreach($tab as $valeur){
        if($valeur%2 !==0)return false;
    }
    return true;
}
?>
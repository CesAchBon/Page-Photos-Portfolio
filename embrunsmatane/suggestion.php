<?php
$articles = array("Demenagement de mon portfolio","Maintenance Colorbox","Maintenance Ecole Du SQL","Recherche Dynamique du Portfolio","Page Photos du Portfolio") ;
$perso = array("Demenagement de mon portfolio");
$cegep = array("Maintenance Colorbox","Maintenance Ecole Du SQL","Recherche Dynamique du Portfolio","Page Photos du Portfolio");
$recherche = $_GET["recherche"];

if (strlen($recherche) > 0) {

    $suggerer = "";

    for ($i = 0; $i < count($articles); $i++) {
        if (strtolower($recherche) == strtolower(substr($articles[$i], 0, strlen($recherche)))) {
            if ($suggerer == "") {
                $suggerer = $articles[$i];
            } 
            else {
                $suggerer = $suggerer . " , " . $articles[$i];
            }
        }
    }
    if (strtolower($recherche) == "cegep"){
        for ($i = 0; $i < count($cegep); $i++) {
        
            if ($suggerer == "") {
                $suggerer = $cegep[$i];
            } 
            else {
                $suggerer = $suggerer . " , " . $cegep[$i];
            }
        
        }
	}
    if (strtolower($recherche) == "perso"){
        for ($i = 0; $i < count($perso); $i++) {
        
            if ($suggerer == "") {
                $suggerer = $perso[$i];
            } 
            else {
                $suggerer = $suggerer . " , " . $perso[$i];
            }
        
        }
	}
    echo ($suggerer == "") ? 'Aucun article ne correspond a votre recherche.' : $suggerer;
}


?>
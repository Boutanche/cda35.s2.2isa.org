<?php
function executeRequete($req)
{
    global $bdd;
    $resultat = $bdd->query($req);
    if(!$resultat) //
    {
        die("Erreur sur la requete sql.<br>Message : " . $bdd->error . "<br>Code: " . $req);
    }
    return $resultat; //
}

function debug($var, $mode = 1)
{
    echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
    $trace = debug_backtrace();
    $trace = array_shift($trace);
    echo 'Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].';
    if($mode === 1)
    {
        echo '<pre>'; print_r($var); echo '</pre>';
    }
    else
    {
        echo '<pre>'; var_dump($var); echo '</pre>';
    }
    echo '</div>';
}

function internauteEstConnecte()
{
    if(!isset($_SESSION['membre'])) return false;
    else return true;
}
//------------------------------------
function internauteEstConnecteEtEstAdmin()
{
    if(internauteEstConnecte() && $_SESSION['membre']['statut'] == 1) return true;
    else return false;
}
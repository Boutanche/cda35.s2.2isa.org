<?php require_once("../inc/init.inc.php");
//---------------------------------//
// ------ TRAITEMENTS PHP ---------//
//---------------------------------//
if($_POST)
{
    debug($_POST);
    /*
     * preg_match() est une expression régulière (regex)
     * toujours entourée du symbole # dieze afin de préciser des options choisies :
     * ^ désigne le début de la chaine.
     * $ désigne la fin de la chaine.
     * + est présent pour dire que les lettres autorisées peuvent apparaitre plusieurs fois.
     */
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']);
    if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) //
        /*
         * ) A travers cette condition, nous vérifions qu'il n'y ai pas un caractère interdit
         * ou un problème de taille sur le pseudo.
         * Cela reste faible,
         * dans une version plus aboutie il faudrait penser à renforcer les contrôles
         * (sur le pseudo mais aussi les autres champs).
         */
    {
        $contenu .= "
                    <div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. 
                        <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9
                    </div>";
    }
    else
    {
        $membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
        if($membre->num_rows > 0)
        {
            $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // Ici insérer fonction de cryptage :
            //TODO : Sécurité / Cryptage // Pas de mp en clair.
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            //TODO : Prepare -> Execute bien plus sécurisée :
            //Ici : je voulais exécuter des fonction : voir sur comment factoriser le prepare execute :
            executeRequete("INSERT INTO membre (pseudo,
                                        mdp, 
                                        nom,
                                        prenom,
                                        email,
                                        civilite,
                                        ville,
                                        code_postal,
                                        adresse) 
                                VALUES ('$_POST[pseudo]', 
                                        '$_POST[mdp]',
                                        '$_POST[nom]',
                                        '$_POST[prenom]',
                                        '$_POST[email]',
                                        '$_POST[civilite]',
                                        '$_POST[ville]',
                                        '$_POST[code_postal]',
                                        '$_POST[adresse]')");
            $contenu .= "
                    <div class='validation'>Vous êtes inscrit à notre site web. 
                        <a href=\"connexion.php\">
                            <u>Cliquez ici pour vous connecter</u>
                        </a>
                    </div>";
        }
    }
}
//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
<?php require_once("../inc/init.inc.php"); ?>
<?php require_once("../inc/head.inc.php"); ?>

    <form method="post" action="">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>

        <label for="mdp">Mot de passe</label><br>
        <input type="password" id="mdp" name="mdp" required="required"><br><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" placeholder="votre nom"><br><br>

        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom" placeholder="votre prénom"><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>

        <label for="civilite">Civilité</label><br>
        <input name="civilite" value="m" checked="" type="radio">Homme
        <input name="civilite" value="f" type="radio">Femme<br><br>

        <label for="ville">Ville</label><br>
        <input type="text" id="ville" name="ville" placeholder="votre ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."><br><br>

        <label for="cp">Code Postal</label><br>
        <input type="text" id="code_postal" name="code_postal" placeholder="code postal" pattern="[0-9]{5}" title="5 chiffres requis : 0-9"><br><br>

        <label for="adresse">Adresse</label><br>
        <textarea id="adresse" name="adresse" placeholder="votre adresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_."></textarea><br><br>

        <input type="submit" name="inscription" value="S'inscrire">
    </form>

<?php require_once("../inc/foot.inc.php"); ?>
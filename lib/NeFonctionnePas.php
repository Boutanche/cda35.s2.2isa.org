<?php
// Un test pour vérifier que le pseudo n'est pas déjà dans la base de donnée avant de l'utiliser :
// Cette partie ne fonctionne pas encore.
// Il me fait les insertions sur la table invitation quoi qu'il arrive.
// Il faut que je continue de travailler là dessus.
if (isset($_POST['pseudo'])) {
    $user = ($_POST['pseudo']);
    foreach ($ar_user_var['pseudo'] as $asPseudo) {
        if ($asPseudo == $user) {
            echo "<span class='taken'>&nbsp;&#x2718; " .
                "Le nom d'utilisateur '$user' existe déjà</span>";
            $userExist = true;
        } else
            echo "<span class='available'>&nbsp;&#x2714; " .
                "Le nom d'utilisateur '$user' est disponible pour le moment</span>";
    }
    if (isset($_POST['pseudo']) && $userExist == false) {
        $query =
            'INSERT INTO invitation(
                pseudo,
                password
            ) VALUES (
            "' . $_POST["pseudo"] . '",
            "' . $_POST["password"] . '"
            )';
// Cette partie ne fonctionne pas encore.
        // Il me fait les insertions sur la table invitation quoi qu'il arrive.
        if (isset($_POST['pseudo'])) {
            $user = ($_POST['pseudo']);

            foreach ($ar_user_var['pseudo'] as $asPseudo) {
                if ($asPseudo == $user) {
                    echo "<span class='taken'>&nbsp;&#x2718; " .
                        "Le nom d'utilisateur '$user' existe déjà</span>";
                    $userExist = true;
                } else {
                    echo "<span class='available'>&nbsp;&#x2714; " .
                        "Le nom d'utilisateur '$user' est disponible pour le moment</span>";
                }
            }
            if (isset($_POST['pseudo']) && $userExist == false) {

                echo "Query : " . $query;
            }
        }
    }
}

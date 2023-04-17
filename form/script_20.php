<HTML>

<HEAD>
    <TITLE>Ma première récupération</TITLE>
</HEAD>

<BODY>
    <?PHP
    echo "Bonjour ";
    if (isset($_POST["prenom"])) echo $_POST["prenom"];
    else $data = "";
    echo "</br>Vous avez défini votre sexe sur : ";
    if (isset($_POST["sexe"])) echo $_POST["sexe"];
    else $data = "";
    echo "</br>Vos disciplines préferé sont : ";
    if (empty($_POST['lettre']) && empty($_POST['art']) && empty($_POST['sport']) && empty($_POST['science'])) {
        echo "Aucune discipline";
    } else {
        if (isset($_POST["lettre"])) echo $_POST["lettre"], " ";
        else $data = "";
        if (isset($_POST["art"])) echo $_POST["art"], " ";
        else $data = "";
        if (isset($_POST["sport"])) echo $_POST["sport"], " ";
        else $data = "";
        if (isset($_POST["science"])) echo $_POST["science"], " ";
        else $data = "";
    }
    ?>
    </br></br>
    <?PHP
    // récupération des données issues du formulaire
    if (!empty($_POST["prenom"])) $prenom = $_POST["prenom"];
    else $prenom = "aucune saisie...";
    $sexe = $_POST["sexe"];
    if (!empty($_POST["lettre"])) $lettre = $_POST["lettre"];
    else $lettre = "";
    if (!empty($_POST["art"])) $art = $_POST["art"];
    else $art = "";
    if (!empty($_POST["sport"])) $sport = $_POST["sport"];
    else $sport = "";
    if (!empty($_POST["science"])) $science = $_POST["science"];
    else $science = "";
    // concaténation des information en une seule ligne avec des ; en séparateur
    $information = $prenom . ";" . $sexe . ";" . $lettre . ";" . $art . ";" . $sport . ";" . $science;
    // test de l'existence du fichier et création avec ligne d’en-tête sinon
    if (!file_exists("donnees.txt")) {
        // création du fichier vide et mise en place du pointeur au début
        $fichier = fopen("donnees.txt", "w+");
        // écriture de la ligne d'en-tête ; \n indique un changement de ligne à la fin
        fwrite($fichier, "prenom;sexe;lettre;art;sport;science\n");
        // fermeture du fichier
        fclose($fichier);
    }
    // ouverture du fichier en mode lecture-écriture avec pointeur en fin
    $fichier = fopen("donnees.txt", "a+");
    fwrite($fichier, "$information\n");
    fclose($fichier);
    echo "Envoie avec succès!<br>Donnée inscrite : <b>$information</b>";
    ?>
</BODY>

</HTML>
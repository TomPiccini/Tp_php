<HTML>

<HEAD>
    <TITLE>Ma première récupération</TITLE>
</HEAD>

<BODY>
    <?PHP
    echo "Bonjour "; if(isset($_POST["prenom"])) echo $_POST["prenom"] ; else $data="" ; echo"</br>Vous avez défini votre sexe sur : "; if(isset($_POST["sexe"])) echo $_POST["sexe"] ; else $data=""; 
    echo "</br>Vos disciplines préferé sont : ";
    if (empty($_POST['lettre']) && empty($_POST['art']) && empty($_POST['sport']) && empty($_POST['science'])) {
        echo "Aucune discipline";
    }
    else {
        if(isset($_POST["lettre"])) echo $_POST["lettre"], " " ; else $data="";if(isset($_POST["art"])) echo $_POST["art"], " " ; else $data="" ;if(isset($_POST["sport"])) echo $_POST["sport"], " " ; else $data="" ;if(isset($_POST["science"])) echo $_POST["science"], " " ; else $data="" ;
    }
    ?>
</BODY>

</HTML>
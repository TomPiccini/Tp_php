<html>
    <head>
    <meta charset="UTF-8">
        <title>Contrôle Informations</title>
    </head>
    <body>
    <center>
        --------Enregistrement---------<br><br>
        <?php
        if (isset($_POST["nom"])) $varnom=$_POST["nom"]; else $varnom="**";
        if (isset($_POST["prenom"])) $varprenom=$_POST["prenom"]; else $varprenom="**";
        if (isset($_POST["sexe"])) $varsexe=$_POST["sexe"]; else $varsexe="**";
        echo "Nom = $varnom <br>";
        echo "Prénom = $varprenom <br>";
        echo "sexe = $varsexe <br>";

        $con = mysqli_connect('localhost', 'root', 'root','db_autre_tsti2d');
        if (!$con) {
            die("La connexion a échoué: " . mysqli_connect_error());
           }
           echo "Connecté";

           mysqli_query($con, "INSERT INTO tb_autre_data_tsti2d(date,nom,prenom,sexe) VALUES (
            NOW(),
            '".$_POST['nom']."',
            '".$_POST['prenom']."',
            '".$_POST['sexe']."'
            )");
            mysqli_close($con)
        ?>
        <FORM ACTION="affichage_control.php" METHOD="POST" NAME="affichage">
        <INPUT TYPE="submit" NAME="submit" VALUE="Afficher" >
    </FORM>
        </center>
    </body>
</html>
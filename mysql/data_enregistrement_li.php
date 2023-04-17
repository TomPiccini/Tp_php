<html>
    <head>
        <title>Enregistrement</title>
    </head>
    <body>
        
        <center>
        --------Enregistrement---------<br><br>
        <?php
        if (isset($_POST["nom"])) $varnom=$_POST["nom"]; else $varnom="**";
        if (isset($_POST["prenom"])) $varprenom=$_POST["prenom"]; else $varprenom="**";
        if (isset($_POST["etat"])) $varetat=$_POST["etat"]; else $varetat="**";
        if (isset($_POST["temperature"])) $vartemperature=$_POST["temperature"]; else $vartemperature="**";
        if (isset($_POST["humidite"])) $varhumidite=$_POST["humidite"]; else $varhumidite="**";
        if (isset($_POST["luminosite"])) $varluminosite=$_POST["luminosite"]; else $varluminosite="**";
        echo "Nom = $varnom <br>";
        echo "Prénom = $varprenom <br>";
        echo "état = $varetat <br>";
        echo "Température = $vartemperature <br>";
        echo "Humidité = $varhumidite <br>";
        echo "Luminosité = $varluminosite <br><br>";

        $con = mysqli_connect('localhost', 'root', 'root','db_mabase');
        if (!$con) {
            die("La connexion a échoué: " . mysqli_connect_error());
           }
           echo "Connecté";

           mysqli_query($con, "INSERT INTO tb_data(date,nom,prenom,etat,temperature,humidite,luminosite) VALUES (
            NOW(),
            '".$_POST['nom']."',
            '".$_POST['prenom']."',
            '".$_POST['etat']."',
            '".$_POST['temperature']."',
            '".$_POST['humidite']."',
            '".$_POST['luminosite']."')
            ");
            mysqli_close($con)
        ?>
        <FORM ACTION="data_affichage_li.php" METHOD="POST" NAME="affichage">
        <INPUT TYPE="submit" NAME="submit" VALUE="Afficher" >
    </FORM>
        </center>
    </body>
</html>
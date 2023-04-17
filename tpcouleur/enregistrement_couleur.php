<html>
    <head>
        <title>Vérification
        </title>
    </head>
    <body>
        <center>
            ---------Enregistrement---------
            <?php
            if (isset($_POST["red"])) $red=$_POST["red"]; else $red="NONE";
            echo "<br>redinosité : $red";
            if (isset($_POST["green"])) $green=$_POST["green"]; else $green="NONE";
            echo "<br>greeninosité : $green";
            if (isset($_POST["blue"])) $blue=$_POST["blue"]; else $blue="NONE";
            echo "<br>blueinosité : $blue";

            $con = mysqli_connect('localhost', 'root', 'root','tsti2d_tpcouleur');
        if (!$con) {
            die("La connexion a échoué: " . mysqli_connect_error());
           }
           echo "<br>Connecté";

           mysqli_query($con, "INSERT INTO tb_couleur(date,red,green,blue) VALUES (
            NOW(),
            '".$_POST['red']."',
            '".$_POST['green']."',
            '".$_POST['blue']."'
            )");
            mysqli_close($con)
            ?>
            <FORM ACTION="affichage_couleur.php" METHOD="POST" NAME="affichage">
        <INPUT TYPE="submit" NAME="submit" VALUE="Afficher" >
           </center>
    </body>
</html>
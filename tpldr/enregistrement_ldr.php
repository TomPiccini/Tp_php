<html>
    <head>
        <title>Vérification
        </title>
    </head>
    <body>
        <center>
            ---------Enregistrement---------
            <?php
            if (isset($_POST["lum"])) $lum=$_POST["lum"]; else $lum="NONE";
            echo "<br>Luminosité : $lum";

            $con = mysqli_connect('localhost', 'root', 'root','db_tsti2d_g2_ldr');
        if (!$con) {
            die("La connexion a échoué: " . mysqli_connect_error());
           }
           echo "<br>Connecté";

           mysqli_query($con, "INSERT INTO tb_ldr(date,lum) VALUES (
            NOW(),
            '".$_POST['lum']."'
            )");
            mysqli_close($con)
            ?>
            <FORM ACTION="affichage_ldr.php" METHOD="POST" NAME="affichage">
        <INPUT TYPE="submit" NAME="submit" VALUE="Afficher" >
           </center>
    </body>
</html>
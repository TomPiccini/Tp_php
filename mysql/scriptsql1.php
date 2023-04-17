<html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
    <center>
        <FORM ACTION="data_enregistrement_li.php" METHOD="POST" NAME="versdata">
            Prénom : <INPUT TYPE="text" NAME="prenom" SIZE="20">
             Nom : <INPUT TYPE="text" NAME="nom" SIZE="20">
            <br><br>État :
            <input type="radio" name="etat" value="1">True
            <input type="radio" name="etat" value="0">False
            <br><br>
            Température : <INPUT TYPE="text" NAME="temperature" SIZE="10">
            Luminosité : <INPUT TYPE="text" NAME="luminosite" SIZE="10">
            Humidité : <INPUT TYPE="text" NAME="humidite" SIZE="10"><br><br>
            <INPUT TYPE="submit" NAME="submit" VALUE="Envoyer" >
        </FORM>
    </center>
    </body>
</html>
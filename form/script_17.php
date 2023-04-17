<HTML>

<HEAD>
    <TITLE>Ma première calculatrice</TITLE>
</HEAD>

<BODY>
    <FORM ACTION="script_17.php" METHOD="POST">
        <INPUT TYPE="text" NAME="op1" VALUE="<?PHP if (!empty($_POST["op1"])) echo $_POST["op1"]; ?>">
        <input type="radio" name="choix" value="add" checked>+
        <input type="radio" name="choix" value="sous">-
        <input type="radio" name="choix" value="mult">x
        <input type="radio" name="choix" value="div">÷
        <input type="radio" name="choix" value="exp">^

        <INPUT TYPE="text" NAME="op2" VALUE="<?PHP if (!empty($_POST["op2"])) echo $_POST["op2"]; ?>">
        <INPUT TYPE="submit" NAME="calcule" VALUE="=">

        <?PHP if ((!empty($_POST["op1"])) and (!empty($_POST["op2"])) and ($_POST['choix']=="add")) echo $_POST["op1"] + $_POST["op2"]; ?>
        <?PHP if ((!empty($_POST["op1"])) and (!empty($_POST["op2"])) and ($_POST['choix']=="sous")) echo $_POST["op1"] - $_POST["op2"]; ?>
        <?PHP if ((!empty($_POST["op1"])) and (!empty($_POST["op2"])) and ($_POST['choix']=="mult")) echo $_POST["op1"] * $_POST["op2"]; ?>
        <?PHP if ((!empty($_POST["op1"])) and (!empty($_POST["op2"])) and ($_POST['choix']=="div")) echo $_POST["op1"] / $_POST["op2"]; ?>
        <?PHP if ((!empty($_POST["op1"])) and (!empty($_POST["op2"])) and ($_POST['choix']=="exp")) echo $_POST["op1"] ** $_POST["op2"]; ?>
    </FORM>
</BODY>

</HTML>
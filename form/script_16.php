<HTML>

<HEAD>
    <TITLE>Ma première calculatrice</TITLE>
</HEAD>

<BODY>
    <FORM ACTION="script_16.php" METHOD="POST">
        <INPUT TYPE="text" NAME="op1" VALUE="<?PHP if (!empty($_POST["op1"])) echo $_POST["op1"]; ?>">+
        <INPUT TYPE="text" NAME="op2" VALUE="<?PHP if (!empty($_POST["op2"])) echo $_POST["op2"]; ?>">
        <INPUT TYPE="submit" NAME="calcule" VALUE="=">
        <?PHP if ((!empty($_POST["op1"])) and (!empty($_POST["op2"]))) echo $_POST["op1"] + $_POST["op2"]; ?>
    </FORM>
</BODY>

</HTML>
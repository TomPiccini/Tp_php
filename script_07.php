<HTML>
    <HEAD>
    <TITLE>Septième script</TITLE>
    </HEAD>
    <BODY>
        <?PHP
        $hauteur=20;
        $pi = 3.141592 ;
        $rayon = rand(0,100);
        $perimetre = $pi*$rayon**2*$hauteur;
        echo "<center>Le volume d’un cercle de $rayon cm est $perimetre cm<sup>3</sup>.</center>" ;
        ?>
    </BODY>
</HTML>
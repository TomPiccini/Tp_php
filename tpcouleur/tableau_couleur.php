<html>

<head>
    <title>Affichage</title>
</head>

<body>
    <?php
    echo "<table border=1 align='center'>
        <tr>
            <td class='gras' width=10%>Date</td>
            <td class='gras' width=10%>Rouge</td>
            <td class='gras' width=10%>Vert</td>
            <td class='gras' width=10%>Bleu</td>
        </tr>";
         $con=mysqli_connect("localhost","root","root","tsti2d_tpcouleur");
         $query="SELECT* FROM tb_couleur ORDER BY id DESC LIMIT 10";
         $req=mysqli_query($con,$query);
         while($ligne=mysqli_fetch_array($req, MYSQLI_BOTH) ) {
            echo "<tr align='center'><td>".$ligne['date']."</td><td>".$ligne['red']."</td><td>".$ligne['green']."</td><td>".$ligne['blue']."</td></tr>";
         }
         
         echo "</table>";
         mysqli_close($con);
         
    ?>
    <center><form action="saisie_couleur.php" method="POST" name="Saisie">
    Saisie : <INPUT type="submit" name="Saisie">
            </form><form action="affichage_couleur.php" method="POST" name="Graphe">
            Graphe : <INPUT type="submit" name="Graphe">
            </form></center>
</body>

</html>
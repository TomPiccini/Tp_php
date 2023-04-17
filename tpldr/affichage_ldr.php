<html>

<head>
    <title>Affichage</title>
</head>

<body>
    <?php
    echo "<table border=1 align='center'>
        <tr>
            <td class='gras' width=10%>Date</td>
            <td class='gras' width=10%>Luminosité</td>
        </tr>";
         $con=mysqli_connect("localhost","root","root","db_tsti2d_g2_ldr");
         $query="SELECT* FROM tb_ldr ORDER BY date LIMIT 10";
         $req=mysqli_query($con,$query);
         while($ligne=mysqli_fetch_array($req, MYSQLI_BOTH) ) {
            echo "<tr align='center'><td>".$ligne['date']."</td><td>".$ligne['lum']."</td></tr>";
         }
         
         echo "</table>";
         mysqli_close($con);
         
    ?>
    <center><form action="saisie_ldr.php" method="POST" name="retour">
            <INPUT type="submit" name="Retour">
            </form></center>
</body>

</html>
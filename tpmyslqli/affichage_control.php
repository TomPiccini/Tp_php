<html>

<head>
    <title>Affichage</title>
</head>

<body>
    <?php
    echo "<table border=1 align='center'>
        <tr>
            <td class='gras' width=10%>Date</td>
            <td class='gras' width=10%>Prénom</td>
            <td class='gras' width=10%>Nom</td>
            <td class='gras' width=10%>Sexe</td>
        </tr>";
         $con=mysqli_connect("localhost","root","root","db_autre_tsti2d");
         $query="SELECT* FROM tb_autre_data_tsti2d ORDER BY prenom LIMIT 10";
         $req=mysqli_query($con,$query);
         while($ligne=mysqli_fetch_array($req, MYSQLI_BOTH) ) {
            echo "<tr align='center'><td>".$ligne['date']."</td><td>".$ligne['prenom']."</td><td>".$ligne['nom']."</td><td>".$ligne['sexe']."</td></tr>";
         }
         echo "</table>";
         mysqli_close($con);
    ?>
</body>

</html>
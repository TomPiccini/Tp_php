<html>

<head>
<script src="RGraph.common.core.js"></script>
<script src="RGraph.common.dynamic.js"></script>
<script src="RGraph.common.tooltips.js"></script>
<script src="RGraph.bar.js"></script>

</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "tsti2d_tpcouleur";

    // Create the PHP MySQLi object
    $mysqli = new MySQLi($hostname, $username, $password, $database);

    // Check for any connection errors
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }


    // Make the query
    $result = $mysqli->query("SELECT date, red, green, blue FROM tb_couleur ORDER BY id DESC LIMIT 10");

    if ($result) {

        $labels = array();

        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) {
            $labels[] = $row["date"];
            $red[]   = $row["red"];
            $green[]   = $row["green"];
            $blue[]   = $row["blue"];
        }

        // Now you can aggregate all the data into one string
        $red_string = "[" . join(", ", $red) . "]";
        $green_string = "[" . join(", ", $green) . "]";
        $blue_string = "[" . join(", ", $blue) . "]"; 
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . $mysqli->error);
    }
    ?>
<div>
    <center>
    <canvas id="cvs" width="850" height="250">[No canvas support]</canvas><br>
    <canvas id="cvg" width="850" height="250">[No canvas support]</canvas><br>
    <canvas id="cvb" width="850" height="250">[No canvas support]</canvas><br>
     <form action="tableau_couleur.php" method="POST" name="tableau">
     Tableau :
     <INPUT type="submit" name="tableau">
            </form>
            <form action="saisie_couleur.php" method="POST" name="saisie">
            Saisie : <INPUT type="submit" name="saisie">
            </form>
</center>
</div>
<script>
    labels = [
        <?php print($labels_string) ?>
    ];
    
    redData = [
        <?php print($red_string) ?>
    ];
    greenData = [
        <?php print($green_string) ?>
    ];
    blueData = [
        <?php print($blue_string) ?>
    ];

    new RGraph.Bar({
        id: 'cvs',
        data: redData,
        options: {
            tooltips: '%{global:labels[%{group}]} %{key}',
            tooltipsFormattedKeyColorsCss: {
                border: '1px solid #ccc'
            },
            tooltipsFormattedKeyLabels: ['gray'],
            tooltipsCss:{
                textAlign: 'left'
            },
            tooltipsOffsety: -5,
            colors: ['red'],
            marginBottom: 75,
            marginLeft: 75,
            xaxis: false,
            yaxis: false,
            yaxisScaleMax: 600,
            backgroundGridVlines: false
        }
    }).draw();
    new RGraph.Bar({
        id: 'cvg',
        data: greenData,
        options: {
            tooltips: '%{global:labels[%{group}]} %{key}',
            tooltipsFormattedKeyColorsCss: {
                border: '1px solid #ccc'
            },
            tooltipsFormattedKeyLabels: ['gray'],
            tooltipsCss:{
                textAlign: 'left'
            },
            tooltipsOffsety: -5,
            colors: ['green'],
            marginBottom: 75,
            marginLeft: 75,
            xaxis: false,
            yaxis: false,
            yaxisScaleMax: 600,
            backgroundGridVlines: false
        }
    }).draw();
    new RGraph.Bar({
        id: 'cvb',
        data: blueData,
        options: {
            tooltips: '%{global:labels[%{group}]} %{key}',
            tooltipsFormattedKeyColorsCss: {
                border: '1px solid #ccc'
            },
            tooltipsFormattedKeyLabels: ['gray'],
            tooltipsCss:{
                textAlign: 'left'
            },
            tooltipsOffsety: -5,
            colors: ['blue'],
            marginBottom: 75,
            marginLeft: 75,
            xaxis: false,
            yaxis: false,
            yaxisScaleMax: 600,
            backgroundGridVlines: false
        }
    }).draw();
</script>
<center><?php if (($red>$blue)&&($red>$green)) {
 echo '<img src="red_square.png">';}
 elseif (($blue>$red)&&($blue>$green)) {
    echo '<img src="blue_square.png">';
}
 else {
    echo '<img src="green_square.png">';
 }
 ?>
 </center>
</body>

</html>
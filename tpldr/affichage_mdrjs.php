<html>

<head>
    <script src="RGraph.common.core.js"></script>
    <script src="RGraph.bar.js"></script>

</head>

<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "db_tsti2d_g2_ldr";

    // Create the PHP MySQLi object
    $mysqli = new MySQLi($hostname, $username, $password, $database);

    // Check for any connection errors
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }


    // Make the query
    $result = $mysqli->query("SELECT date, lum FROM tb_ldr ORDER BY id DESC LIMIT 10");

    if ($result) {

        $labels = array();
        $data = array();

        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) {
            $labels[] = $row["date"];
            $data[]   = $row["lum"];
        }

        // Now you can aggregate all the data into one string
        $data_string = "[" . join(", ", $data) . "]";
        $labels_string = "['" . join("', '", $labels) . "']";
    } else {
        print('MySQL query failed with error: ' . $mysqli->error);
    }
    ?>
    <canvas id="cvs" width="1300" height="450">
        [No canvas support]
    </canvas>
    <script>
        new RGraph.Bar({
            id: 'cvs',
            data: <?php print($data_string) ?>,
            options: {
                
                marginLeft: 75,
                marginRight: 25,
                marginTop: 25,
                marginBottom: 25,
                colors: ['#0377cc'],
                yaxisScaleMax: 4095,
                yaxisLabelsCount: 12,
                xaxisLabels: <?php print($labels_string) ?>,
                labelsAbove: <?php print($data_string) ?>,
                backgroundGrid: false,
                backgroundBarsCount: 12,
                backgroundBarsColor1: '#b4dfff',
                backgroundBarsColor2: '#cdeaff',
                marginInner: 10,
                xaxisColor: 'gray',
                yaxisColor: 'gray',
                xaxisTickmarksCount: 0,
                yaxisTickmarksCount: 0,
                textSize: 8,
                shadow: true,
                shadowBlur: 2,
                shadowOffsetx: 1,
                shadowOffsety: 1

            }
        }).wave();
    </script>
</body>

</html>
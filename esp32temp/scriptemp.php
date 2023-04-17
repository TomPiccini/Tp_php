<html>

<head>
    <meta charset="UTF-8">
    <title>Température</title>

</head>

<body>
    <?php   
    $con=mysqli_connect('localhost','root','root','db_esp32_temperature');

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL" . mysqli_connect_error();
    }
    
    if (isset($_POST['temperature'])) {
        $temp = ($_POST['temperature']);
        echo $temp;
        mysqli_query($con, "INSERT INTO tb_esp32_temp(date,temperature) VALUES(NOW(), '$temp')");
            mysqli_close($con);
    }
    ?>
</body>
</html>
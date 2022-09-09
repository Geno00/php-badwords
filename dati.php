<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $parola = $_POST ['parola'];

        $parola2 = $_POST ['parola']. str_replace(" ", "***", $parola);

    ?>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<?php echo $parola;?> Quidem veniam repudiandae ipsam modi nam animi, nihil aspernatur obcaecati accusantium nisi incidunt asperiores blanditiis eveniet accusamus minima eos quasi illum minus.</p>
</body>
</html>
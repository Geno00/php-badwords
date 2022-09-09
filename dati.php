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
        $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum suscipit totam at veritatis id rerum. Magni eos recusandae, ipsum voluptate a facilis unde itaque eius impedit, doloribus modi inventore cumque.';
        $parola2 = str_replace($parola, "***", $testo);

    ?>

    <p><?php echo $parola2;?> </p>
</body>
</html>



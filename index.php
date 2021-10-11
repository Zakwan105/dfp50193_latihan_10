<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>

    <?php

    function hello()
    {
        echo 'Hello';
    }

    function hai($nama)
    {
        return 'Hello ' . $nama;
    }

    hello();
    echo '<br>';
    echo hai('Zakwan');

    ?>
    <p>
    <a href="contoh.php">CONTOH</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Contoh Function</h1>

    <?php
    $harga = 1.70;
    $berat = 2;
    ?>

    <p>
        Harga sekilogram buah betik adalah RM<?php echo number_format($harga, 2); ?>
    </p>
    Untuk <?php echo $berat; ?>KG, total harga adalah 
    RM<?php echo number_format(kira($harga, $berat),2); ?>

    <p>
    <a href="bmi.php">B.M.I</a>
</body>
</html>

<?php
function kira($harga, $berat){
    $total = $harga * $berat;
    return $total;
    
}
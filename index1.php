<?php include 'calculate.php'; ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= $c; ?> <span>C</span></h1>
    <h1> <?= $f; ?> <span>F</span></h1>
    <h1> <?= $k; ?> <span>K</span></h1>
    <h1> <?= $r; ?> <span>R</span></h1>
    <hr>
    <form action="" method="get">
        <label for="">Celcius</label>
        <input type="number" name="celcius">
        <input type="submit" name="dor" value="celci">
        <br>
        <label for="">Farenheit</label>
        <input type="number" name="farenheit">
        <input type="submit" name="dor" value="fare">
        <br>
        <label for="">Kelvin</label>
        <input type="number" name="kelvin">
        <input type="submit" name="dor" value="kelv">
        <br>
        <label for="">Reamur</label>
        <input type="number" name="reamur">
        <input type="submit" name="dor" value="rea">
        <br>
    </form>
    <a href="index1.php">
        <button>Bersihkan</button>
    </a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="site.php" method="get">
    x= <input type="number" name="x"> <br>  
    y= <input type="number" name="y">

    <input type="submit">
    </form>

    Resposta: <?php echo $_GET["x"] + $_GET["y"] ?>
</body>
</html>
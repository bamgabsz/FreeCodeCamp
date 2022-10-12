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
    Cor: <input type="text" name="cor"> <br>
    Coisa: <input type="text" name="coisa"> <br>
    Alguem: <input type="text" name="alguem"> <br>
    <input type="submit">
    </form>

    <?php 
        $cor = $_GET["cor"];
        $coisa = $_GET["coisa"];
        $alguem = $_GET["alguem"];

        echo "Rosas são $cor <br>";
        echo "$coisa são Azuis <br>";
        echo "$alguem te amo"
    ?>

</body>
</html>
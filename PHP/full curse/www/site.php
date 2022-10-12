<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="site.php" method="post">

    Maças: <input type="checkbox" name="frutas[]" value="apples"><br>
    Laranjas: <input type="checkbox" name="frutas[]" value="oranges"><br>
    Peras: <input type="checkbox" name="frutas[]" value="pears"><br>
    <input type="submit">
    </form>

    <?php 
        $fruits = $_POST["frutas"];
        echo $fruits[0];
    ?>

</body>
</html>
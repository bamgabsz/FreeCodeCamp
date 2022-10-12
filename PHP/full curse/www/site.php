<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php</title>
</head>
<body>

    <form action="site.php" method="post">
        <input type="text" name="aluno">
        <input type="submit">
    </form>

    <?php 
        $classe = array("Jim"=>"A+", "Pam"=>"B-","Oscar"=>"C+");
        echo $classe[$_POST["aluno"]]; 
        //$classe["Jim"] = "F";
        //echo $classe["Jim"];
        //echo count($classe);
    ?>
    <br>
</body>
</html>
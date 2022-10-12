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
       
        $frase = "Academia da Girafa";

        // funções/metodos em strings

        // tudo pra minusculo
        echo strtolower($frase);
        echo "<br>";
        // tudo pra maiusculo
        echo strtoupper($frase);
        echo "<br>";
        // tamanho da string
        echo strlen($frase);
        echo "<br>";
        // pegar uma determinada letra
        echo $frase[1];
        echo "<br>";

        $frase[1] = "8";
        echo $frase; 
        echo "<br>";

        echo str_replace("Girafa","Panda", $frase);
        echo "<br>";

        echo str_replace("rafa","ro", $frase);
        echo "<br>";

        echo substr($frase,8,3);
    ?>

</body>
</html>
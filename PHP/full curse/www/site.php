<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    
<?php
    function cube($num){
        $result = pow($num,3);
        return $result;
    }

    $cubeResult = cube(4);
    echo $cubeResult;
    echo cube(2);
?>

</body>
</html>
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
    $n1 = 8;
    $n2 = 6;
    $calculadora = "soma";
    switch($calculadora){
        case "soma":
            echo $n1 + $n2;
            break;
        } switch($calculadora){
            case "subtração":
            echo $n1 - $n2;
            break;}
            switch($calculadora){
            case "multiplicação":
            echo $n1 * $n2;
            break;
            }
            switch($calculadora){
            case "divisão":
            echo $n1 / $n2;
            break;
            }
    ?>
    
</body>
</html>
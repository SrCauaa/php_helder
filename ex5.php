<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPORTANTE irá cair na prova (if else)</title>
</head>
<body>
    <?php
    $n1 = 5;
    $n2 = 6;
    $media = ($n1 + $n2) / 2;
    if (($media >= 0) && ($media < 10)) {
        if($media >= 0) {
            echo "nota a";
        }
        else if(($media < 6) && ($media < 8)) {
            echo "nota b";
        } 
        else if ($media >= 5){
            echo "nota c";
        }
        else {
            echo "REPROVADO";
        }
    }
    ?>
</body>
</html>
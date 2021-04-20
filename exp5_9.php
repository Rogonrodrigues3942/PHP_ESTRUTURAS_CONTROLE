<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aninhamento de Loops</title>
</head>
<body>
    <?php
        $vetor[0][0] = "elemento 00";
        $vetor[0][1] = "elemento 01";
        $vetor[1][0] = "elemento 10";
        $vetor[1][1] = "elemento 11";

        for($i = 0; $i < 2; $i++)
            for($j = 0; $j < 2; $j++)
            {
                echo "O elemento da posição $i-$j é: ";
                echo $vetor[$i][$j] . "<br>";
            }
    ?>    
</body>
</html>
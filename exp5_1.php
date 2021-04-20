<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Escolar - EXEMPLO 5 - 1 - PHP</title>
</head>
<body>
    <?php
        $prova1 = 7;
        $prova2 = 5;
        $nota = ($nota1 + $nota2) / 2;

        if($nota < 2)
            $desempenho = "PÉSSIMO";
        elseif (nota < 5) 
            $desempenho = "RUIM";
        elseif(nota < 7)
            $desempenho = "MÉDIO";
        elseif(nota < 9 )
            $desempenho = "BOM";
        else
            $desepenho = "EXCELENTE";

        echo "O seu desempenho foi $desempenho.<br><br>";
    ?>
</body>
</html>
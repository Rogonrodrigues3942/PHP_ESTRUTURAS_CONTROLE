<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while - contagem regressiva - pag 69</title>
</head>
<body>
    <?php
        $regressao = 15;

        while($regressao > 0)
        {
            if ($regresso % 10 == 1)
                echo "<br>";
            echo "$regressao ";
            $regressao--;
           
        }
    ?>    
</body>
</html>
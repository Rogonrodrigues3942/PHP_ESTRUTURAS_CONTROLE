<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo switch - Capítulo 5 - página 64</title>
</head>
<body>
    <?php
        $numero = 3;

        switch($numero){
            case 0:
                echo "A variavel vale $numero.";
                break;
            case 1:
                echo "A variavel vale $numero.";
                break;
            case 2:
                echo "A variavel vale $numero.";
                break;
            default:
                echo "Fim do programa";
        }
    ?>
</body>
</html>
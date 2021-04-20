<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo switch - Capítulo 5 - página 65</title>
</head>
<body>
    <?php
        $opcao = 'N';

        switch($opcao){
            case 's':
            case 'S':
                echo "Você decidiu pelo sim!!";
                break;
            case 'n':
            case 'N':
                echo "Você decidiu pelo não!!";
                break;
            default:
                echo "Opção invalida!! Fim do programa!!";
        }
    ?>    
</body>
</html>
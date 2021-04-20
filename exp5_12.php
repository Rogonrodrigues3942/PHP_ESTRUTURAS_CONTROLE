<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break - exemplo</title>
</head>
<body>
    <?php
        $i = 0;
        $k = 0;

        while($k < 10)
        {
            $i++;
            $k++;

            while($i < 20)
            {
                if($i == 10)
                {
                    echo "Encerrando o primeiro while...<br>";
                    break;
                    print "Essa linha não será impressa!!!";
                }
                elseif ($i == 15)
                {
                    print "Encerrando os dois while...";
                    break 2;
                }
                $i++;
            }
        }
    ?>
</body>
</html>
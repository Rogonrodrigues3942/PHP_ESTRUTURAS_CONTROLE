<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor - Array</title>
</head>
<body>
    <?php
        $vetor = array(1, 2, 3, 4);

        foreach($vetor as $v)
            print "O valor atual do vetor é: $v. <br>";

        //segundo vetor criado
        $a = array ("um" => 1, "dois" => 2, "tres" => 3);

        echo "<br>";

        foreach($a as $chave => $valor)
            print "\$a[$chave] => $valor.<br>"
    ?>    
</body>
</html>
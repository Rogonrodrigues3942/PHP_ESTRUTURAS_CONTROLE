<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - foreach</title>
</head>
<body>
    <?php
        $v = array(1, 10, 2, 20, 3, 30);

        print "Vetor com a 1ª declaração foreach<br><br>";
        foreach($v as $valor)
            print "O valor da posição atual é: $valor.<br>";

        echo "<br>Vetor com a 2ª declaração de foreach<br><br>";
        $s = array("nome1" =>"Rogério","nome2" => "Rafael", "nome3" => "Samuel");
        foreach($s as $indice => $nome)
            print "\$s[$indice] => $nome.<br>" //$indice é o valor da propriedade do vetor $s.
    ?>
    
</body>
</html>
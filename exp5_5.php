<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while - página</title>
</head>
<body>
    <?php
        $i = 1;
        
        while( $i < 101){
        echo " $i";
        $i++;
        if($i % 10 == 1)
            echo "<br>";
        }
    ?>    
</body>
</html>
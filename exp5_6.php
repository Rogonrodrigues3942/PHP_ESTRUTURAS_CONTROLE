<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do...while - página 67</title>
</head>
<body>
    <?php
        $i = 1;

        do{
            echo " $i";
            if($i % 10 == 0)
                echo "<br>";
            $i++;
        }
        while( $i < 101);
    ?>
    
</body>
</html>
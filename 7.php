<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    $age = 28;

    if ($age >= 18 && $age <= 59 ) {

        echo "Вам еще работать и работать";
    }
    elseif ($age > 59){

        echo "Вам пора на пенсию";
    }
    elseif ($age > 0 && $age < 17){

        echo "Вам еще рано работать";
    }

    ?>
</p>
</body>
</html>
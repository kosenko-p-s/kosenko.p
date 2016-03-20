<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    $age = 60;

    if ($age >= 18 && $age <= 59 ) {

        echo "Вам еще работать и работать";
    }
    elseif ($age > 59){

        echo "Вам пора на пенсию";
    }
    ?>
</p>
</body>
</html>
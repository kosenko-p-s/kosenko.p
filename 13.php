<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $s = 100; // Длинна участка

    $t = 2; // Время движения в часах

    $w = $s / $t;

    $r = ($s * 1000) / ($t * 3600);


    echo "$w км/ч <br>" ; //км/ч

    echo "$r м/сек"  ; //м/сек


    ?>
</p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Kalkulyator</title>
</head>
<body>
<form method="POST" action=''>
    первое число<input TYPE="text" name="a" value="0" /><br>
    второе число<input TYPE="text" name="b" value="0" /><br><br>
    <input TYPE="radio" name="operation" checked value='+'/>сложение
    <input TYPE="radio" name="operation" value='-'/>разность
    <input TYPE="radio" name="operation" value='*'/>произведение
    <input TYPE="radio" name="operation" value='/'/>деление
    <input Type="radio" name="operation" value='%' />остаток от деления<br><br>
    <input type='submit' name='vichislit' value='Вычислить'>
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$radio=$_POST['operation'];
if ($_POST['vichislit'])
{
    if ($radio=='+'){$c = $a + $b; echo "Сумма=" . $c.'<br>';}
    elseif ($radio=='-'){$d = $a - $b; echo "Разность=" . $d.'<br>';}
    elseif ($radio=='*'){$e = $a *$b;  echo  "Произведение=" . $e.'<br>';}
    elseif ($radio=='/'){$f = $a / $b; echo "Деление=" . $f;}
    elseif ($radio== '/'){$j = $a / 0; echo "Ошибка! На 0 делить нельзя=" . $j;}
    elseif ($radio=='%'){$g = $a % $b; echo "Остаток от деления=" . $g;}
    else echo "Ошибка";
}
?>
</body>
</html>
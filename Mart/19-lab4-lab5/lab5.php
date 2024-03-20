<?php 

echo "Birinci ededi daxil edin:";
$num1 = readline();

echo "Ikinci ededi daxil edin:";
$num2 = readline();


echo "Emeli daxil edin:";
$argument = readline();

switch($argument) {
    case "+": 
        echo $num1 + $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "-":
        echo $num1 - $num2;
        break;
    case "/":
        echo $num1 / $num2;
        break;
}

?>
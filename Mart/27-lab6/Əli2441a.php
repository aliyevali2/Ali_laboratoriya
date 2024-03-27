<!DOCTYPE html>
<html>
<body>

<?php

$a = 9;
$b = 9;

echo("<table>");

for ($r = 1; $r <= $a; $r++){
    echo('<tr>');
    for ($c = 1; $c <= $b; $c++){
        echo('<td>' . "$c * $r = " . ($c*$r) . "&emsp;". "&emsp;". '</td>');
   
        
    }
    echo('</tr>');
}

echo("</table>");

?>


</body>
</html>
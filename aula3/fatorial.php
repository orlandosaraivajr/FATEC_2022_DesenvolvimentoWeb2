<?php
$total = 0;

function fatorial($numero){
    if ($numero == 1){
        return $numero;
    } else {
        return $numero * fatorial($numero - 1);
    }
}

echo 'Fatorial(3) '. fatorial(3) ."<br>\n";
echo 'Fatorial(7) '. fatorial(7) ."<br>\n";

?>
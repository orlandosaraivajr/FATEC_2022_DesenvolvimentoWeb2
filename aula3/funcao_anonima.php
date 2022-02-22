<?php

$maiusculas = function($input_str){
    $result_str = strtoupper($input_str);
    $result_str = 'Convertido para: '. $result_str;
    return $result_str;
};

echo ' '. $maiusculas('orlando saraiva') ."<br>\n";

$nomes = array();
$nomes[] = 'orlando';
$nomes[] = 'ana';
$nomes[] = 'lucas';
print_r($nomes);
print '<br><br>';
// Visitar https://www.php.net/manual/en/function.array-map.php
$nomes2 = array_map($maiusculas, $nomes);
print_r($nomes2);
?>
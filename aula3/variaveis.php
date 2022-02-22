<?php
/*
Variáveis 
*/

$texto_de_exemplo = 'texto';
echo gettype($texto_de_exemplo) . '<br>' .PHP_EOL;

$texto = 123;
echo gettype($texto) . '<br>' .PHP_EOL;

$numero = 1;
echo gettype($numero) . '<br>' .PHP_EOL;

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo gettype($array) . '<br>' .PHP_EOL;

?>
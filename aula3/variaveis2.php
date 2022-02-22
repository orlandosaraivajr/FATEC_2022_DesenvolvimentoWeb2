<?php
/*
Variáveis 
*/

function descobre_tipo($valor){
    echo gettype($valor) . '<br>' .PHP_EOL;
}
$texto = 'texto';

descobre_tipo($texto);

$numero = 1;
descobre_tipo($numero);

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
descobre_tipo($array);

?>
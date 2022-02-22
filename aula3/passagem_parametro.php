<?php
$total = 0;

// $variavel com passagem de valor
function incrementa_1($variavel, $valor){
    $variavel += $valor;
}
// $variavel com passagem de referência
function incrementa_2(&$variavel, $valor){
    $variavel += $valor;
}

function incrementa_3(&$variavel, $valor = 40){
    $variavel += $valor;
}

$a = 10;
incrementa_1($a, 20);
echo $a ." <br>\n";
incrementa_2($a, 20);
echo $a ." <br>\n";

echo " A variável voltou a ser 10.<br>\n";
$a = 10;
echo $a ." <br>\n";
incrementa_3($a);
echo $a ." <br>\n";
incrementa_3($a, 2);
echo $a ." <br>\n";
?>
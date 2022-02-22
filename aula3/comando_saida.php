<?php
# Comentário

// Comentário também

/*
Comentários com múltiplas linhas
Neste código, observamos os comandos
- echo
- print
- var_dump
- print_r

*/

echo 'a'.'<br>'.PHP_EOL;
echo 'b'.'<br>'.PHP_EOL;

print 'abc'.'<br>'.PHP_EOL;

$array = [
    "n1" => 10,
    "n2" => 20,
    "n3" => 30,
];

var_dump($array);
echo '<br><br>';
print_r($array);

?>
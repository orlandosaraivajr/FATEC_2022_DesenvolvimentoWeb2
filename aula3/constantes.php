<?php
// Definição de uma constante
define('MAXIMO_CLIENTES', 100);

$numero_clientes = 50;
print MAXIMO_CLIENTES;
if($numero_clientes >= MAXIMO_CLIENTES) {
    print 'Número máximo foi atingido';
} else {
    print 'Número máximo NÃO foi atingido';
}

?>
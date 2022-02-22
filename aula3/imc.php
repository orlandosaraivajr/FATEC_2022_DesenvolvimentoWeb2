<?php

function calculo_imc(float $peso, float $altura){
    var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}

$imc_1 =  calculo_imc(75.5, 1.70);
print('<br>' . $imc_1 . '<br>' );

# Parâmetro sendo string
$imc_2 =  calculo_imc('75.5', 1.70);
print('<br>' . $imc_2 . '<br>' );

# Parâmetro sendo string e vai dar warning
$imc_3 =  calculo_imc('75.5x', 1.70);
print('<br>' . $imc_3 . '<br>' );

# Parâmetro sendo string e vai dar Fatal Error
$imc_3 =  calculo_imc('abc75x', 1.70);
print('<br>' . $imc_3 . '<br>' );

?>
<?php

declare(strict_types=1);

function calculo_imc(float $peso, float $altura): float{
    var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}

$imc_1 =  calculo_imc(75.5, 1.70);
print('<br>' . $imc_1 . '<br>' );

# Parâmetro sendo string
$imc_2 =  calculo_imc('75.5', 1.70);
print('<br>' . $imc_2 . '<br>' );

?>
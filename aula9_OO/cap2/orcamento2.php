<?php 
require_once 'classes/Orcamento.php'; 
require_once 'classes/OrcavelInterface.php'; 
require_once 'classes/Produto.php'; 
require_once 'classes/Servico.php'; 

$o = new Orcamento; 
$o->adiciona( new Produto('Máquina de café', 10, 299), 1 ); 
$o->adiciona( new Produto('Barbeador elétrico', 10, 170), 1 ); 
$o->adiciona( new Produto('Barra de chocolate', 10, 7), 3 ); 

$o->adiciona( new Servico('Corte de grama', 20), 1 ); 
$o->adiciona( new Servico('Corte de barba', 20), 1 ); 
$o->adiciona( new Servico('Limpeza do apto', 50), 1 ); 

print $o->calculaTotal();
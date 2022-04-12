<?php 
require_once 'classes/Cesta.php'; 
require_once 'classes/Produto.php'; 

// criação da cesta 
$c1 = new Cesta; 

// agregação dos produtos 
$c1->addItem( $p1 = new Produto('Chocolate', 10, 5) ); 
$c1->addItem( $p2 = new Produto('Café',     100, 7) ); 
$c1->addItem( $p3 = new Produto('Mostarda',  50, 3) ); 

foreach ($c1->getItens() as $item) 
{ 
    print 'Item: ' . $item->getDescricao() . "<br>\n"; 
} 
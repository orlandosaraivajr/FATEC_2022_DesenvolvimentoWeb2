<?php 
class Pessoa 
{ 
    public $nome; 
    public $endereco; 
    public $nascimento; 
} 

$p1 = new Pessoa; 
$p1->nome = 'Maria da Silva'; 
$p1->endereco = 'Rua Bento Gonçalves'; 
$p1->nascimento = '01 de Maio de 2015'; 
$p1->telefone = '(51) 1234-5678'; // definida em tempo de execução 

print_r($p1); 
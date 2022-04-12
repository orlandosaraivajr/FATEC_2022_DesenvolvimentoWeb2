<?php 
class Pessoa 
{ 
    protected $nome; 
    
    public function __construct($nome) 
    { 
        $this->nome = $nome; 
    } 
} 

class Funcionario extends Pessoa 
{ 
    private $cargo, $salario; 
    
    public function contrata($c, $s) 
    { 
        if (is_numeric($s) AND $s > 0) { 
            $this->cargo = $c; 
            $this->salario = $s; 
        } 
    } 
    
    public function getInfo() 
    { 
        return "Nome: {$this->nome}, Salário: {$this->salario}"; 
    } 
} 

$p1 = new Funcionario('Maria da Silva'); 
$p1->contrata( 'Auxiliar administrativo', 1600 ); 

print $p1->getInfo(); 

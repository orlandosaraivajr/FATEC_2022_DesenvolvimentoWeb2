<?php 
class Produto 
{ 
	private $descricao; 
	private $estoque; 
	private $preco; 
	 
	public function setDescricao($descricao) 
	{ 
	    if (is_string($descricao)) { 
	        $this->descricao = $descricao; 
	    } 
	} 
	 
	public function getDescricao() 
	{ 
	    return $this->descricao; 
	} 
	 
	public function setEstoque($estoque) 
	{ 
	    if (is_numeric($estoque) AND $estoque > 0) { 
	        $this->estoque = $estoque; 
	    } 
	} 
	 
	public function getEstoque() 
	{ 
	    return $this->estoque; 
	} 
} 

$p1 = new Produto; 
$p1->setDescricao('Chocolate'); 
$p1->setEstoque(10); 
print 'Descrição: '. $p1->getDescricao() . '<br>'.PHP_EOL; 
print 'Estoque:   ' .$p1->getEstoque()   . '<br>'.PHP_EOL;
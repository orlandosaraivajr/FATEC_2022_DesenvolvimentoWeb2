<?php 
class Produto //implements OrcavelInterface  
{ 
	private $descricao; 
	private $estoque; 
	private $preco;
	private $fabricante; 
	private $caracteristicas; 
	 
	public function __construct($descricao, $estoque, $preco) 
	{ 
            $this->caracteristicas = [];
            $this->descricao = $descricao; 
            $this->estoque = $estoque; 
            $this->preco = $preco;  
	} 
	 
	public function getDescricao() 
	{ 
	    return $this->descricao; 
	} 
	 
	public function setFabricante( Fabricante $f ) 
	{ 
	    $this->fabricante = $f; 
	} 
	 
	public function getFabricante() 
	{ 
	    return $this->fabricante; 
	} 
	
	public function addCaracteristica( $nome, $valor ) 
	{ 
	    $this->caracteristicas[] = new Caracteristica($nome, $valor); 
	} 
	 
	public function getCaracteristicas() 
	{ 
	    return $this->caracteristicas; 
	}
	
	public function getPreco() 
	{ 
	    return $this->preco; 
	}
} 

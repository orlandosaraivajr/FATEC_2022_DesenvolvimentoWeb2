<?php 
abstract class Pessoa { 
	private $nome; 
	private $idade; 
	private $cpf;

    public function aumentarIdade( $nova_idade ) { 
        if (is_numeric($nova_idade)) { 
            $this->idade = $nova_idade; 
        } 
    } 

    public function checkMaioridade() { 
        if ($this->idade>=18) { 
            print "A pessoa é maior de idade <br>\n <br>\n"; 
        } 
        else{
            print "A pessoa é menor de idade <br>\n <br>\n"; 
        }
    }

    public function alterar_Nome($novo_nome){
        $this->nome = $novo_nome;
    }
	public function getNome() {
	    return $this->nome; 
	} 
    public function alterar_cpf($novo_cpf){
        $this->cpf = $novo_cpf;
    }
} 

class Professor extends Pessoa{

}

?>
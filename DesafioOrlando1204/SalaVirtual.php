<?php 
class Sala { 
	private $professor; 
    private $numeroalunos; 
    private $materia; 

    public function aumentarQtdeAluno( $numero ) { 
        if (is_numeric($numero)) { 
            $this->numeroalunos += $numero; 
            print "A nova quantidade é: {$this->numeroalunos} <br>\n <br>\n"; 
        } 
    } 

    public function diminuirQtdeAluno( $numero ) { 
        if (is_numeric($numero)) { 
            $this->numeroalunos -= $numero; 
            print "A nova quantidade é: {$this->numeroalunos} <br>\n <br>\n"; 
        } 
    } 

    public function mudarProfessor( Pessoa $p ) {  
        $this->professor = $p; 
    } 

    public function mudarMateria( $nomemateria ) {  
        $this->materia = $nomemateria; 
        print "A matéria agora é: {$this->materia} <br>\n <br>\n"; 
    } 

    public function mudarNumeroAlunos( $novo_numero ) {  
        $this->numeroalunos = $novo_numero; 
        print "Novo número de alunos: {$this->numeroalunos} <br>\n <br>\n"; 
    } 

    public function getProfessor() { 
	    return $this->professor;
	} 
} 

?>
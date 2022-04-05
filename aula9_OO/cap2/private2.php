<?php 
class Pessoa 
{ 
    private $nome; 
    private $endereco; 
    private $nascimento; 
    
    public function __construct($nome, $endereco) 
    { 
        $this->nome = $nome; 
        $this->endereco = $endereco; 
    } 
    
    public function setNascimento($nascimento) 
    { 
        $partes = explode('-', $nascimento); 
        if (count($partes)==3) { 
            if (checkdate ( $partes[1] , $partes[2] , $partes[0] )) { 
                $this->nascimento = $nascimento; 
                return true; 
            } 
            return false; 
        } 
        return false; 
    } 
} 
 
$p1 = new Pessoa('Maria da Silva', 'Rua Bento Gonçalves'); 

if ($p1->setNascimento('01 de Maio de 2015')) { 
    print "Atribuiu 01 de Maio de 2015<br>\n"; 
} 
else { 
    print "Não atribuiu 01 de Maio de 2015<br>\n"; 
} 

if ($p1->setNascimento('2015-12-30')) { 
    print "Atribuiu 2015-12-30<br>\n"; 
} 
else { 
    print "Não atribuiu 2015-12-30<br>\n"; 
} 
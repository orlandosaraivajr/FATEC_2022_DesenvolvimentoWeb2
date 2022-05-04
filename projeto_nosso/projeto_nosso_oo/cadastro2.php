<?php

class BancoDados{
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $password = '123mudar';
    private $dbname = 'cadastro';
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }

    private function validar_idade($idade){
        if ($idade < 0){
            echo "Idade precisa ser positiva";
            return FALSE;
        }
        return TRUE;
    }
    public function adicionar_cliente($nome, $endereco, $idade, $cpf, $sexo){
        if ($this->validar_idade($idade)){
            $sql = "INSERT INTO cliente ( `nome`, `endereco`, `idade`, `cpf`, `sexo`) ";
            $sql = $sql."VALUES ('".$nome."', '".$endereco."', ".$idade.", '".$cpf ."', '".$sexo."')";
            if (mysqli_query($this->conn, $sql)) {
                echo "Cadastro feito com sucesso";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        

    }
}

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

$DBMagico = new BancoDados;
$DBMagico->adicionar_cliente($nome, $endereco, $idade, $cpf, $sexo);

?>
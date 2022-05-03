<?php
/*
print_r($_GET);
print_r($_POST);
*/
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
// echo $nome;

// Parâmetros da conexão com o banco de dados
$servername = '127.0.0.1';
$username = 'root';
$password = '123mudar';
$dbname = 'cadastro';
// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Preparando o comando SQL
$sql = "INSERT INTO cliente ( `nome`, `endereco`, `idade`, `cpf`, `sexo`) ";
$sql = $sql."VALUES ('".$nome."', '".$endereco."', ".$idade.", '".$cpf ."', '".$sexo."')";
// echo $sql;
// Executar o comando SQL
if (mysqli_query($conn, $sql)) {
    echo "Cadastro feito com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Fechar a conexão
mysqli_close($conn);
?>
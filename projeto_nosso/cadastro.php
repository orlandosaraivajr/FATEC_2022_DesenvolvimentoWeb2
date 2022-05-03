<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro de Cliente</h2>
        <p>Nosso cadastro de clientes.</p>
        <form action="cadastro2.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" value="nome">
                <br><br>
                <label>Endereço</label>
                <input type="text" name="endereco" value="endereco">
                <br><br>
                <label>Idade</label>
                <input type="text" name="idade" value="idade">
                <br><br>
                <label>CPF</label>
                <input type="text" name="cpf" value="CPF">
                <br><br>
                <label>Sexo</label>
                <input type="text" name="sexo" value="Sexo">
                <br><br>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>    
</body>
</html>

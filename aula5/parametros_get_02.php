<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via GET</title>
</head>
<body>
<?php
print_r($_GET);

if(isset($_GET['fname'])){
    echo '<br><br>';
    echo 'Nome: '.$_GET['fname'];
}
if(isset($_GET['lname']) and $_GET['lname'] <> ""){
    echo '<br><br>';
    echo 'Sobrenome: '.$_GET['lname'];
}
?>
</body>
</html>
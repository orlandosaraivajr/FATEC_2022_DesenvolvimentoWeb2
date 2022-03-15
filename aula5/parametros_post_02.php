<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
print_r($_GET);
print_r($_POST);

if(isset($_POST['fname'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['fname'];
}
if(isset($_POST['lname']) and $_POST['lname'] <> ""){
    echo '<br><br>';
    echo 'Sobrenome: '.$_POST['lname'];
}
?>
</body>
</html>
<?php
require_once 'Pessoa.php'; 
require_once 'SalaVirtual.php'; 

# Criando uma Pessoa do tipo professor
$orlando = new Professor();
$orlando->alterar_Nome('Orlando'); 
$orlando->aumentarIdade(40); 
$orlando->alterar_cpf(123456789); 

# Criando uma Sala Virtual
$sala_na_Fatec = new Sala();

$sala_na_Fatec->mudarProfessor($orlando);

$sala_na_Fatec->mudarNumeroAlunos(15); 
$sala_na_Fatec->mudarMateria('Desenvolvimento Web 2'); 


print 'O nome do professor é ' . $sala_na_Fatec->getProfessor()->getNome() . "<br>\n";
print 'O nome do professor é ' . $orlando->getNome() . "<br>\n";

print_r($sala_na_Fatec);

$nilton = new Professor();
$nilton->alterar_Nome('Nilton'); 
$nilton->aumentarIdade(45); 
$nilton->alterar_cpf(987654321);

$sala_na_Fatec->mudarProfessor( $nilton );
$sala_na_Fatec->mudarMateria('Algoritmo'); 
print 'O nome do professor é ' . $sala_na_Fatec->getProfessor()->getNome() . "<br>\n";

print_r($sala_na_Fatec);


?>

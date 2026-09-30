<?php

// Importando as classes

require_once "Usuario.php";
require_once "Professor.php";
//require_once "Aluno.php";

$nome = $_POST["nome"] ?? '';

$email = $_POST["email"] ?? '';

$disciplina = $_POST["disciplina"] ?? '';

// Criando objetos

$professor1 = new Professor($nome, $email, $disciplina);
//$professor2 = new Professor("Mariana Souza", "mariana@escola.com", "Física");

//Exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->darAula() . "<br></br>";

//caminho do arquivo JSON
$banco = 'banco.json';

// Ler dados existentes
$dados = [];
if (file_exists($banco)) {
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}
$usuario = new professor($nome, $email, $disciplina);
$dados[] = [
    'nome' => $usuario->getNome(),
    'email' => $usuario->getEmail(),
    'disciplina' => $usuario->getDisciplina()
];
// Escrever dados no arquivo JSON
file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
echo "<h2>Cadastro realizado com sucesso!</h2>";
echo "<a href='index.php'>Ver Usuários</a>";

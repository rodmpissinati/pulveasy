<?php
require 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf');
$senha = filter_input(INPUT_POST, 'senha');

if ($nome && $email) {
    $sql = $pdo->prepare("SELECT * FROM tb_usuario WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO tb_usuario (nome, cpf, email, senha) VALUES (:nome,:cpf,:email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();
        header('Location: login.php'); //corrigir essa linha (estava antes Location: index.php)
        exit;
    } else {
        header('Location: cadastro.php');
        exit;
    }
} else {
    header('Location: cadastro.php');
    exit;
}
?>
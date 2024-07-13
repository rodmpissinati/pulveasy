<?php
require 'conexao.php';

$cidade = filter_input(INPUT_POST, 'cidade');
$bairro = filter_input(INPUT_POST, 'bairro');
$rua = filter_input(INPUT_POST, 'rua');
$numero = filter_input(INPUT_POST, 'numero');
$estado = filter_input(INPUT_POST, 'estado');
$cnpj = filter_input(INPUT_POST, 'cnpj');
$nomePropriedade = filter_input(INPUT_POST, 'nomeProriedade');

if ($nomePropriedade && $cnpj) {
    $sql = $pdo->prepare("SELECT * FROM tb_propriedade WHERE cnpj = :cnpj");
    $sql->bindValue(':cnpj', $cnpj);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO tb_propriedade (cidade, bairro, rua, numero, estado, cnpj) VALUES (:cidade,:bairro,:rua, :numero, :estado, :cnpj)");
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':numero', $estado);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->bindValue(':nomePropriedade', $nomePropriedade);
        $sql->execute();
        header('Location: pulverizacao.php'); //corrigir essa linha (estava antes Location: index.php)
        exit;
     } else {
        header('Location: cadastroPropriedade.php');
        exit;
    }
} else {
    header('Location: cadastroPropriedade.php');
    exit;
}








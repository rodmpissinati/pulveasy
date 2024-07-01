<?php
// require 'conexao.php';

// $nome = filter_input(INPUT_POST, 'nome');
// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $cpf = filter_input(INPUT_POST, 'cpf');
// $senha = filter_input(INPUT_POST, 'senha');

// if ($nome && $email) {
//     $sql = $pdo->prepare("SELECT * FROM tb_usuario WHERE email = :email");
//     $sql->bindValue(':email', $email);
//     $sql->execute();
    
//     if ($sql->rowCount() === 0) {
//         $sql = $pdo->prepare("INSERT INTO tb_usuario (nome, cpf, email, senha) VALUES (:nome,:cpf,:email, :senha)");
//         $sql->bindValue(':nome', $nome);
//         $sql->bindValue(':cpf', $cpf);
//         $sql->bindValue(':email', $email);
//         $sql->bindValue(':senha', $senha);
//         $sql->execute();
//         header('Location: login.php'); //corrigir essa linha (estava antes Location: index.php)
//         exit;
//     } else {
//         header('Location: cadastro.php');
//         exit;
//     }
// } else {
//     header('Location: cadastro.php');
//     exit;
// }

require 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf');
$senha = filter_input(INPUT_POST, 'senha');

if ($nome && $email) {
    $conexao = new mysqli("localhost", "usuario", "senha", "banco_de_dados");
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    $stmt = $conexao->prepare("SELECT * FROM tb_usuario WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $stmt = $conexao->prepare("INSERT INTO tb_usuario (nome, cpf, email, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $nome, $cpf, $email, $senha);
        $stmt->execute();
        $stmt->close();
        $conexao->close();
        header('Location: login.php'); //corrigir essa linha (estava antes Location: index.php)
        exit;
    } else {
        $conexao->close();
        header('Location: cadastro.php');
        exit;
    }
} else {
    header('Location: cadastro.php');
    exit;
}
?>

?>
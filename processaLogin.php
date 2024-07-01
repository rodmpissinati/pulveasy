<?php
include ('conexao.php');

if(isset($_POST['user']) || isset($_POST['password'])){

    if (strlen($_POST['user'])== 0){
        echo"Prencha seu Email";
    }else if(strlen($_POST['password'])== 0){
        echo"Prencha sua Senha";
    }else{

    $email = $mysqli->real_escape_string($_POST['user']);
    $senha = $mysqli->real_escape_string($_POST['password']);

    $sql_sel = "SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_sel) OR die ("Falha na execução " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)){
                session_start();

            }

                $_SESSION['user'] = $usuario['cpf']; // os dados que ficaram salvos na sesion
                $_SESSION['name'] = $usuario['nome']; //echo $_SESSION['nome'] para exibir o nome do usuário

                header("Location: index.php"); //para onde será redirecionado
                
            }else{
            echo"Falha, usuário ou senha INCORRETOS";
        }
    }

}
?>
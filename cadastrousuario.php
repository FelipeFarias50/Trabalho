<?php
    session_start();
    include_once("conexao.php");
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $dataDeNascimento = filter_input(INPUT_POST, 'dataDeNascimento', FILTER_SANITIZE_EMAIL);
    $salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_EMAIL);
    //echo "Nome: $nome <br>";
    //echo "E-mail: $email <br>";
    $result_usuario = "INSERT INTO exemplo1 (nome, dataDeNascimento, salario) VALUES ('$nome', '$dataDeNascimento', '$salario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
        echo ("<script language= 'JavaScript'>
                alert('Usuario cadastrado com sucesso');
                setTimeout(document.location = 'index.php',5000);
        </script>");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
        header("Location: cadastrarUsuario.php");
    }
<?php
	session_start();
	include_once("conexao.php");
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
	$dataDeNascimento = filter_input(INPUT_GET, 'dataDeNascimento', FILTER_SANITIZE_NUMBER_INT);
	$salario = filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_NUMBER_INT);
	//echo "Nome: $nome <br>";
	//echo "E-mail: $idade <br>";
	$result_usuario = "UPDATE exemplo1 SET nome='$nome', dataDeNascimento='$dataDeNascimento', salario ='$salario' WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
		echo ("<script language= 'JavaScript'>
			alert('Usuario editado com sucesso');
			setTimeout(document.location = 'index.php',5000);
		</script>");
		
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
		header("Location: editar.php?id=$id");
	}
?>
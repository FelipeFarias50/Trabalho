<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM exemplo1 WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
        <center>
		<a href="cadastrarUsuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
        <h1>Editar Usuário</h1>
        
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="GET" action="editandoUsuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" id="nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>Data de Nascimento: </label>
			<input type="date" name="dataDeNascimento" placeholder="Digite a sua data de nascimento" id="dataDeNascimento" value="<?php echo $row_usuario['dataDeNascimento']; ?>"><br><br>

			<label>Salario: </label>
			<input type="number" name="salario" placeholder="Digite seu salario" id="salario" value="<?php echo $row_usuario['salario']; ?>"><br><br>
			
			<input type="submit" value="Editar">
        </form>
        </center>
	</body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
        <center>
            <a href="cad_usuario.php">Cadastrar</a><br>
            <a href="index.php">Listar</a><br>
            <h1>Cadastrar Usuário</h1>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <form method="POST" action="cadastrandoUsuario.php">
                <label>Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome completo"><br><br>
                
                <label>Data de Nascimento: </label>
                <input type="date" name="dataDeNascimento" id="dataDeNascimento" placeholder="Digite sua Data de nascimento"><br><br>

                <label>Salario: </label>
                <input type="number" name="salario" id="salario" placeholder="Digite seu salario"><br><br>
                
                <input type="submit" value="Cadastrar">
            </form>
        </center>
	</body>
</html>
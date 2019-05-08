<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Página de consulta</title>
        

    </head>
    <body>
      

        <?php
            session_start();
            include_once("conexao.php");
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            //echo "Nome: $nome <br>";
            //echo "E-mail: $email <br>";
            $result_usuario = "DELETE FROM exemplo1 where id=$id";
            $resultado_usuario = mysqli_query($conn, $result_usuario);
            if($resultado_usuario){
                $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
                echo ("<script language= 'JavaScript'>
                alert('Usuario Excluido com sucesso')
                setTimeout(document.location = 'index.php',5000);
                </script>");
                
            }else{
                $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
                
                header("Location: cadastrarUsuario.php");
            }
        ?>
    </body>
</html>
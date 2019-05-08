<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Página de consulta</title>
        <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        
        <script type="text/javascript" charset="utf8" 
            src="https://code.jquery.com/jquery-3.3.1.js"></script>
        
        <script type="text/javascript" charset="utf8" 
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

        <script>
            $(document).ready(function() {
                $('#table_id').DataTable();
            } );
        </script>

    </head>
    <body>
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Salário</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
        <?php
        session_start();
        include_once("conexao.php");
            $sql = 'SELECT * FROM exemplo1';
            foreach ($conn -> query ($sql) as $row) {
                echo"<tr>";
                echo "<td>". $row['id'], "</td>";
                echo "<td>". $row['nome'], "</td>";
                echo "<td>". $row['dataDeNascimento'], "</td>";
                echo "<td>". $row['salario'], "</td>";
                echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
                
                echo "<td> <a href=excluirUsuario.php?id=".$row['id'].">Excluir</a></td>";
            }
            ?>
           
        </tbody>
    </table> 
    <a href="cadastrarUsuário.php">Cadastrar</a>   
</body>
</html>
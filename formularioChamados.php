<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar chamados</title>
</head>
<body>
    <center>
        <h1>Abrir chamados</h1>
        <form method="POST" action="cadastrarChamados.php">
                    RA: <input type="number" name="ra" required><br><br>
                    Nome: <input type="text" name="nome" required><br><br>
                    Sala: <input type="text" name="sala" required><br><br>
                    <?php
                        require("conectar.php");

                        $dados_select = mysqli_query($conn, "SELECT id_problema, tipo_problema FROM problemas_chamados");

                        echo "Problema: <select name='problemaChamado'>";
                        while($dado = mysqli_fetch_array($dados_select)) {
                            echo '<option   value='.$dado[0].'>'.$dado[1].'</option>';
                        }
                        echo "</select>";
                    ?>
                    <br><br>
                    Descrição: <textarea name="descricao" required></textarea><br>
                    <br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            <a href="index.html"><input type="button" value="Voltar"></a> 
        </form>
    </center>
</body>
</html>
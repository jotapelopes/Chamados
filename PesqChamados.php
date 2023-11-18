<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver chamados</title>
</head>
<body>
    <center>
        <h1>Chamados abertos e fechados</h1>

        <form method="post" action="PesqChamados.php">
            <label for="ra">RA do aluno:</label>
            <input type="text" name="ra" id="ra" required>
            <input type="submit" value="Pesquisar">
            <br><br>
        </form>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Hora de cadastro</td>
                <td>RA</td>
                <td>Nome</td>
                <td>Sala</td>
                <td>Tipo do problema</td>
                <td>Descrição</td>
                <td>Status</td>
                <td>Hora de resolução</td>
            </tr>
            <?php
                require("conectar.php");

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($conn)) {
                        $raPesquisa = mysqli_real_escape_string($conn, $_POST['ra']);

                        $dados_select = mysqli_query($conn, "SELECT id_chamado, hora_cadastro, ra, nome, sala, descricao, situacao, hora_resolvidos, problemas_chamados.tipo_problema FROM chamados_cadastrados INNER JOIN problemas_chamados ON problemas_chamados.id_problema = chamados_cadastrados.problema WHERE ra = '$raPesquisa' ORDER BY id_chamado DESC");

                        while ($dado = mysqli_fetch_array($dados_select)) {
                            echo '<tr>';
                            echo '<td>'.$dado[0].'</td>';
                            echo '<td>'.$dado[1].'</td>';
                            echo '<td>'.$dado[2].'</td>';
                            echo '<td>'.$dado[3].'</td>';
                            echo '<td>'.$dado[4].'</td>';
                            echo '<td>'.$dado[8].'</td>';
                            echo '<td>'.$dado[5].'</td>';
                            echo '<td>'.$dado[6].'</td>';
                            echo '<td>'.$dado[7].'</td>';
                            echo '</tr>';
                        }
                    }
                }
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>
</html>

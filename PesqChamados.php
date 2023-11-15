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
        <h1>Chamados registrados</h1>
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

                $dados_select = mysqli_query($conn, "SELECT id_chamado, hora_cadastro, ra, nome, sala, descricao, situacao, hora_resolvidos, problemas_chamados.tipo_problema FROM chamados_cadastrados INNER JOIN problemas_chamados ON problemas_chamados.id_problema = chamados_cadastrados.problema ORDER BY id_chamado DESC");
                echo "<form>";
                while($dado = mysqli_fetch_array($dados_select)) {
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
                echo "</form>";
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>
</html>


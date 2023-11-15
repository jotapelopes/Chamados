<?php
    require("conectar.php");

    date_default_timezone_set('America/Sao_Paulo');

    $ra = $_POST['ra'];
    $nome = $_POST['nome'];
    $sala = $_POST['sala'];
    $problemaChamado = $_POST['problemaChamado'];
    $descricao = $_POST['descricao'];
    $hora = date("Y-m-d H:i:s");
    $situacao = 'Não resolvido';
    
    $sql = "INSERT INTO chamados_cadastrados (ra, nome, sala, hora_cadastro, problema, descricao, situacao)
    VALUES ('$ra', '$nome', '$sala','$hora','$problemaChamado', '$descricao', '$situacao')";

    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Chamado cadsatrado com sucesso!</h1>";
        echo "<center><p>Aguarde que o Xibiu está a caminho</p>";
        echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
      } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
      }

?>
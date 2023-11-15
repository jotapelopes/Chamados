<?php
    require("conectar.php");
    
    date_default_timezone_set('America/Sao_Paulo');


    foreach ($_POST['enviar'] as $id => $value) {
      $sql = "UPDATE chamados_cadastrados SET situacao = 'Resolvido' WHERE id_chamado = '$id'";
      
      $hora_resolvido = date("Y-m-d H:i:s");
    
      $sql_resolvido = "UPDATE chamados_cadastrados SET hora_resolvidos = '$hora_resolvido' WHERE id_chamado = '$id'";

      if ($conn->query($sql) !== TRUE || $conn->query($sql_resolvido) !== TRUE) {
          echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
      }

      echo "<br><br><br><br>";
      echo "<center><h1>Chamado alterado com sucesso</h1>";
      echo "<center><p>Parabéns pelo bom trabalho Xibiu.</p>";
      echo "<a href='VisualizarChamados.php'><input type='button' value='Voltar'></a></center>";
  }

?>
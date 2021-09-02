
<link rel="stylesheet" href="style.css">
<?php

require("./alunos.php");
require("./funcoes-alunos.php");



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notas dos Alunos </title>
</head>
<body>
    <section>
    <h1>Tabela de Notas</h1>
    <table>
      <tr>
          <th>Nome</th>
          <th>Nota</th>
          <th>Idade</th>
          <th>Situação</th>
      </tr>

        <?php
        foreach($alunos as $aluno ){
          ?> 
            <tr>
                <th><?= $aluno["nome"] ?></th>
                <td><?=  $aluno["nota"]?></td>
                <td><?=  $aluno["idade"] ?></td>
                <?php
                if( $aluno["situacaoAluno"] == "Aprovado" ){?> 
                <td class="aprovado"><?php echo strtoupper ($aluno["situacaoAluno"]) ?></td>
                 <?php
                }else if( $aluno["situacaoAluno"] == "Reprovado"){
                  ?>
                  <td class="reprovado"><?php echo strtoupper($aluno["situacaoAluno"]) ?></td>
                <?php
                }
               ?>
               
            </tr>
                <?php
                }
               ?>
        
        
    </table> 
    </section>
</body>
</html>
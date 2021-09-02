
<link rel="stylesheet" href="style.css">
<?php

require("./alunos.php");
require("./funcoes-alunos.php");

//criar a função(trazer do exercicio)
//verificar se nova nota esta setada
//se sim receber os dados via $_GET
//Chamar a função de alterar nota


if(isset($_GET["novaNota"])){
  $nome = $_GET["nomeAluno"];
  $nota = $_GET["novaNota"]; 
  alterarNotaAluno($alunos, $nota, $nome); 
}

situacaoAlunos($alunos)



?>


       




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./script.js" defer></script>
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
            <tr onclick="showFormNota('<?= $aluno['nome']?>')">
                <td><?= $aluno["nome"] ?></th>
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
    <div class="container-form-nota">
      <form>
        <input type="number" name="novaNota" placeholder="Digite a nova nota">
        <input type="hidden" id="nomeAluno" name="nomeAluno">
        <button>Alterar</button>
      </form>

    </div>
</body>
</html>
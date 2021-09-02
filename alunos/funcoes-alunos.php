<?php
//Função para calcular a média da sala
function calcularMedia( array $turma){
    $soma = 0;
   

    foreach($turma as $aluno){
        $soma = $soma + $aluno["nota"];
        
    }
    
    $media = $soma / count($turma);
    return $media;
 
}

//Função para ver o aluno com a maior nota
function alunoComMaiorNota(array $turma){

   $melhorAluno = null; 
   foreach($turma as $aluno){
        if($melhorAluno == null){
            $melhorAluno = $aluno;
        }elseif($aluno["nota"] > $melhorAluno["nota"]){
        $melhorAluno = $aluno;
        }

   }
        return $melhorAluno;
}

//função para alterar a nota de um aluno
function alterarNotaAluno(array &$turma, $novaNota, $nome ){
    foreach($turma as $chave => $aluno ){
        if($aluno["nome"] == $nome){
         $turma[$chave]["nota"] = $novaNota;
         return $turma;
        }
       
    }

}


function situacaoAlunos(array &$turma){
    foreach($turma as $chave => $aluno ){
        if($aluno["nota"]< 50){
            $turma[$chave]["situacaoAluno"] = "Reprovado";
        }else{
            $turma[$chave]["situacaoAluno"] = "Aprovado";
        }
        
    }
}

situacaoAlunos($alunos);


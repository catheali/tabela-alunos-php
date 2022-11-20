<?php

declare(strict_types=1);
//definindo que nesse arquivo sera trabalhado os tipos de dados]
//function soma (float $n1, float $n2): float //tem que informar o tipo de dado que vai receber e o tipo de dado que vai retornar
//{
//  return $n1+ $n2 ;
//}
//function media (int $n1, int $n2): string
//{
//    return (string) $n1 . (string) $n2;
//}
//function welcome (string $nome): string
//{
//   return "Bem vinde {$nome}";
//}

function inicio (): void //estamos declarando que essa função 'não tem retorno'
{
    renderizar('inicio');
}
function listar (): void 
{
    $alunos = buscarAlunos();
    renderizar('listar', $alunos);
}

function novo (): void 
 {           
        if( false === empty($_POST)){
            $nome = trim($_POST['nome']);
            $cidade = trim($_POST['cidade']);
            $matricula = trim($_POST['matricula']);
        
            if (true === validadeForm($nome, $cidade, $matricula)){
                adicionarAlunos($nome, $cidade, $matricula);
                redirecionar('listar');
            }
        }
    renderizar('novo');
} // na função não precisa terminar com o ;, mas no conteudo é obrigatorio

function editar (): void 
{ 
     $id = $_GET['id'];
     $aluno = buscarUmAluno($id);
          
    renderizar('editar', $aluno);
     if( false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $cidade = trim($_POST['cidade']);
        $matricula = trim($_POST['matricula']);
        if (true === validadeForm($nome, $cidade, $matricula)){
            editarAluno();
            redirecionar('listar');
        }
    }
}

function excluir ( ): void
{
        $id = $_GET['id'];
        excluirAluno($id);
        redirecionar('listar');
}

function renderizar( string $nomeDoArquivo, mixed $dados = null):void
{   
    include "../src/views/head.phtml";
    include "../src/views/{$nomeDoArquivo}.phtml";
    $dados;
    include "../src/views/footer.phtml";

}

function redirecionar(string $onde):void
{
        header("location: /{$onde}");
}
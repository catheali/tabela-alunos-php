<?php 

declare(strict_types=1);

function buscarAlunos(): iterable //elemento pseudotipo iteravel = é percorrivel 
{
    $sql = "SELECT * FROM alunos";

    $alunos = abrirConexao()->query($sql); // essa seta é como se fosse o . do js 
    // tipo o alunos.lenght()

    return $alunos;
}

function adicionarAlunos(string $nome, string $cidade, string $matricula): void 
{ 
    $sql = "INSERT INTO `php-tabela`.`alunos` (`nome`, `cidade`, `matricula`) VALUES ('{$nome}', '{$cidade}', '{$matricula}');";   
    $novoAluno = abrirConexao()->query($sql);
}

function excluirAluno (string $id): void
{
    $sql =  "DELETE FROM `php-tabela`.`alunos` WHERE (`id` = '{$id}')";
    abrirConexao()->query($sql);

}

function buscarUmAluno ($id): iterable
{
    $sql = "SELECT * FROM alunos WHERE  id ='{$id}'";
    $aluno = abrirConexao()->query($sql); 
    return $aluno->fetch(PDO::FETCH_ASSOC);
}

function editarAluno ( ): void
{   
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $matricula = $_POST['matricula'];
        $id = $_POST['id'];

    $sql = "UPDATE `php-tabela`.`alunos` SET `nome` = ?, `cidade` = ?, `matricula` = ? WHERE (`id` = ?)";
    $query =  abrirConexao()->prepare($sql);
    $query->execute([$nome, $cidade, $matricula, $id]);
    }
}


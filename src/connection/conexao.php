<?php 

function abrirConexao(): PDO
{   $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'sua senha';
    $banco = 'php-tabela';

    $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);
    return $conexao;

} 
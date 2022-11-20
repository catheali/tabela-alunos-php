<?php

    declare(strict_types=1);

    function validadeForm(string $nome,string $cidade,string $matricula): bool
    {
        if(strlen($nome)< 3){
            $mensagem ='Nome inválido';
            include'../src/views/components/erro.phtml';
            return false;
        }
        if(strlen($cidade)< 3){
            $mensagem ='Cidade inválida';
            include'../src/views/components/erro.phtml';
            return false;
        }
        if(strlen($matricula)< 6 || strlen($matricula) > 9 ){
            $mensagem ='Matricula inválida';
            include'../src/views/components/erro.phtml';
            return false;
        }
        return true;
    }
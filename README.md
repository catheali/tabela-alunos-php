# tabela-alunos-php

Tabela em php, com modal.

- Para visualizar o projeto, vai ser necessário criar um banco de dados.

- Abra o arquivo meubanco.sql e cole no mysqlshell.

- Depois de colocar o banco no server:

         -- Agora entre na pasta `src/connection` e altere a senha ` $senha = 'sua senha';`.

         -- Após isso,  no terminal digite:
           ` php -S localhost:8000 -t public `

- Entre no link https://localhost:8000/tabela.php . O projeto deve funcionar se os passos forem seguidos corretamente.

Se o erro sqli ou pdo_mysql aparecer:
-entre na pasta onde o php foi instalado e procure pelo arquivo php.ini.developer, renomeei o arquivo para php.ini, abra no vscode e tire o ';' da linha 928 onde tem : `extension=mysqli` ou `pdo_mysql`

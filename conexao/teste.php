<?php
    include "../servico/service.class.php";
$con = new service();
$con -> salvar("INSERT INTO PACIENTE (NOME, LOGIN, SENHA) VALUES ('JHONATAS', 'JHOW', '123' )");



?>
<?php

    $nome = $_POST['txtnome'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];

    include "../servico/service.class.php";
    $con = new Service();
    $con->salvar("INSERT INTO PACIENTE(NOME,LOGIN,SENHA) VALUES('" . $nome . "','" . $login . "','" . $senha . "')");

?>
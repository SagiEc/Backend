<?php

//TESTANDO CRIAÇÃO DE SEGUROS PASSANDO ARRAY SIMPLES
    require_once $_SERVER['DOCUMENT_ROOT'] ."/backend/MODEL/seguros.php";

    $dadosSeguro = [
        "2",
        "José",
        "22233232333",
        "PLN2032",
        "193131",
        "1313131",
        "2026-02-13",
        "A",
    ];     
    
    $novoSeguro = new Seguros($dadosSeguro);
    echo "Id: $novoSeguro->id<br>";
    echo "Nome: $novoSeguro->nome<br>";
    echo "CPF: $novoSeguro->cpf<br>";
    echo "Placa Veículo: $novoSeguro->placaveiculo<br>";
    echo "Apólice: $novoSeguro->apólice<br>";
    echo "Proposta: $novoSeguro->proposta<br>";
    echo "Fim de vigência: $novoSeguro->vigencia<br>";
    echo "Seguro está: $novoSeguro->ativo<br>";

// $_GET["inputID"]

?>
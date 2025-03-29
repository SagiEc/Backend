<?php

//TESTANDO CRIAÇÃO DE SEGUROS PASSANDO ARRAY SIMPLES
require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/conexao.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/SeguroDAO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/MODEL/seguros.php";
    $dadosSeguro = [
        "",
        "zé",
        "27335232333",
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
    echo "Apólice: $novoSeguro->apolice<br>";
    echo "Proposta: $novoSeguro->proposta<br>";
    echo "Fim de vigência: $novoSeguro->vigencia<br>";
    echo "Seguro está: $novoSeguro->ativo<br>";

// $_GET["inputID"]


echo "TESTANDO A INSERÇÃO DE UM OBJETO  NO BANCO<br>";

$dadosSeguro = [
        "",
        "zé",
        "27335232333",
        "PLN2032",
        "193131",
        "1313131",
        "2026-02-13 00:00:00",
        "0",
];

    //$novoSeguro = new Seguros($dadosSeguro);
    //SeguroDAO::inserir($novoSeguro);


    echo "TESTANDO A ATUALIZAÇAO DE UM OBJETO  NO BANCO<br>";

    $dadosSeguro = [
            "4",
            "zé",
            "27335232333",
            "XXX2032",
            "193131",
            "1313131",
            "2026-02-20 00:00:00",
            "0",
    ];

    $seguro = new Seguros($dadosSeguro);
    SeguroDAO::atualizar($seguro);

    echo "TESTANDO A EXCLUSAO DE UM OBJETO  NO BANCO<br>";
    SeguroDAO::excluir(4);


    echo "TESTANDO A BUSCA DE UM OBJETO NO BANCO<br>";
    $seguro = SeguroDAO::buscar(1);
    echo "
        ID: $seguro->id <br>
        Nome: $seguro->nome <br>
        CPF: $seguro->cpf <br>
        Placa: $seguro->placaveiculo <br>
        Proposta: $seguro->proposta <br>
        Apólice: $seguro->apolice <br>
        Vigencia: $seguro->vigencia <br>
        Ativo: $seguro->ativo <br>
    ";

    echo "TESTANDO A BUSCA DE TODOS OS REGISTROS DO OBJETO NO BANCO<br>";
    $seguros = SeguroDAO::buscarTodos();
    foreach($seguros as $seguro){
    
        echo "
            --------------------------------------------------------------------------------<br>
            ID: $seguro->id <br>
            Nome: $seguro->nome <br>
            CPF: $seguro->cpf <br>
            Placa: $seguro->placaveiculo <br>
            Proposta: $seguro->proposta <br>
            Apólice: $seguro->apolice <br>
            Vigencia: $seguro->vigencia <br>
            Ativo: $seguro->ativo <br>
        ";
    }


?>
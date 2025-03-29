<?php

    class Seguros{

        public $id;
        public $nome;
        public $cpf;
        public $placaveiculo;
        public $apolice;
        public $proposta;
        public $vigencia;
        public $ativo;

        public function __construct($arraySeguros){
            if(array_keys($arraySeguros) != range(0,count($arraySeguros)- 1)){
                $this -> id = $arraySeguros["ID"];
                $this -> nome = $arraySeguros["NOME"];
                $this -> cpf = $arraySeguros["CPF"];
                $this -> placaveiculo = $arraySeguros["PLACAVEICULO"];
                $this -> apolice = $arraySeguros["APOLICE"];
                $this -> proposta = $arraySeguros["PROPOSTA"];
                $this -> vigencia = $arraySeguros["VIGENCIA"];
                $this -> ativo = $arraySeguros["ATIVO"];
            } else { 
                $this -> id = $arraySeguros[0];
                $this -> nome = $arraySeguros[1];
                $this -> cpf = $arraySeguros[2];
                $this -> placaveiculo = $arraySeguros[3];
                $this -> apolice = $arraySeguros[4];
                $this -> proposta = $arraySeguros[5];
                $this -> vigencia = $arraySeguros[6];
                $this -> ativo = $arraySeguros[7];

            }
        }

    }
?>      

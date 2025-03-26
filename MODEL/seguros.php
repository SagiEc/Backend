<?php

    class Seguros{

        public $id;
        public $nome;
        public $cpf;
        public $placaveiculo;
        public $apólice;
        public $proposta;
        public $vigencia;
        public $ativo;

        public function __construct($arraySeguros){
            if(array_keys($arraySeguros) != range(0,count($arraySeguros)- 1)){
                $this -> id = $arraySeguros["ID"];
                $this -> nome = $arraySeguros["NOME"];
                $this -> cpf = $arraySeguros["CPF"];
                $this -> placaveiculo = $arraySeguros["PLACAVEÍCULO"];
                $this -> apólice = $arraySeguros["APÓLICE"];
                $this -> proposta = $arraySeguros["PROPOSTA"];
                $this -> vigencia = $arraySeguros["VIGÊNCIA"];
                $this -> ativo = $arraySeguros["ATIVO"];
            } else { 
                $this -> id = $arraySeguros[0];
                $this -> nome = $arraySeguros[1];
                $this -> cpf = $arraySeguros[2];
                $this -> placaveiculo = $arraySeguros[3];
                $this -> apólice = $arraySeguros[4];
                $this -> proposta = $arraySeguros[5];
                $this -> vigencia = $arraySeguros[6];
                $this -> ativo = $arraySeguros[7];

            }
        }

    }
?>      

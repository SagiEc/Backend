<?php

    class SeguroDAO{
    public static function inserir(Seguros $seguros){
        $con = Conexao::Getconexao();
        $sql = $con->prepare("insert into seguros value (null,?,?,?,?,?,?,?)");
        $sql->bindParam(1,$seguros->nome);
        $sql->bindParam(2,$seguros->cpf);
        $sql->bindParam(3,$seguros->placaveiculo);
        $sql->bindParam(4,$seguros->apolice);
        $sql->bindParam(5,$seguros->proposta);
        $sql->bindParam(6,$seguros->vigencia);
        $sql->bindParam(7,$seguros->ativo);
        $sql->execute();
    }

    public static function atualizar(Seguros $seguros){
        $con = Conexao::Getconexao();
        $sql = $con->prepare("update seguros set NOME=?, CPF=?, PLACAVEICULO=?, APOLICE=?, PROPOSTA=?, VIGENCIA=?, ATIVO=? where ID=?");
        $sql->bindParam(1,$seguros->nome);
        $sql->bindParam(2,$seguros->cpf);
        $sql->bindParam(3,$seguros->placaveiculo);
        $sql->bindParam(4,$seguros->apolice);
        $sql->bindParam(5,$seguros->proposta);
        $sql->bindParam(6,$seguros->vigencia);
        $sql->bindParam(7,$seguros->ativo);
        $sql->bindParam(8,$seguros->id);
        $sql->execute();    
    }
    
    public static function excluir($id){
        $con = Conexao::Getconexao();
        $sql = $con->prepare("delete from seguros where id=?");
        $sql->bindParam (1, $id);
        $sql->execute();
    }

    public static function buscar($id){
        $con = Conexao::Getconexao();
        $sql = $con->prepare("select * from seguros where id=?");
        $sql->bindParam(1 ,$id);
        $sql->execute();

        if($registro = $sql->fetch()){
            return new Seguros($registro);

        } else {
            return null;
        }

    }   

   public static function buscarTodos(){
        $con = Conexao::Getconexao();
        $sql = $con->prepare("select * from seguros");
        $sql->execute();
       
       $segurosRetorno = [];

        while($registro = $sql->fetch()){
         $segurosRetorno[] = new Seguros($registro);
        }
        return $segurosRetorno;
    }
 } 
?>
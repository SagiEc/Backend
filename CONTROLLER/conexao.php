<?php 

    class Conexao{

        public static $conexao;

        public static function Getconexao(){
            $usuario ="root";
            $senha = "";
            $base = "dbsegurados";
            $host = "localhost";
            $porta = 3306;
            $stringConexao = "mysql:host=$host;port=$porta;dbname=$base";

            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO($stringConexao, $usuario, $senha);
                   echo "<script> alert('Conectado com sucesso!') </script>";
                } catch(PDOException $e){
                    $erro = $e->getCode();
                    if($erro == 1044){
                        echo "<script> alert('ERRO: usuário não identificado!') </script>";
                    } else if($erro == 1045){
                        echo "<script> alert('ERRO: senha incorreta!') </script>";
                    } else if($erro == 1049){
                        echo "<script> alert('ERRO: base de dados não encontrada!') </script>";
                    } else if($erro == 2002){
                        echo "<script> alert('ERRO: host não encontrado!') </script>";
                    } else {
                        echo "<script> alert('CÓDIGO DO ERRO: $erro') </script>";
                    }
                }
            }

            return self :: $conexao;
        }
    

    }


?>
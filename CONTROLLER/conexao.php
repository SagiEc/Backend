<?php 

    class Conexao{

        public static $conexao;

        public static function Getconexao(){
            $usuario ="root";
            $senha = "";
            $base = "dbsegurados";
            $host = "localhost";
            $porta = 3306;
            $stringConexao = "mysql:host=$host;port=$porta;dbmame=$base";

            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new PDO($stringConexao, $usuario, $senha);
                    echo "<script> alert('Conectado com sucesso!') </script>";
                } catch(PDOException $e){
                    $erro = $e->getCode();
                    echo "<script> alert($erro)</script>";
                }
            }

            return self :: $conexao;
        }
    

    }


?>
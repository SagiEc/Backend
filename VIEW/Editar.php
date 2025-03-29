<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/conexao.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/SeguroDAO.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/MODEL/seguros.php";
    $con = Conexao::Getconexao();

    if(isset($_GET["acaoEditar"])){
        $codigo = $_GET["acaoEditar"];
        $seguro = SeguroDAO::buscar($codigo);
        $nome = $seguro->nome;
        $cpf = $seguro->cpf;
        $placaveiculo = $seguro->placaveiculo;
        $apolice = $seguro->apolice;
        $proposta = $seguro->proposta;
        $vigencia = $seguro->vigencia;
        $ativo = $seguro->ativo;
}
    
    if(isset($_GET["acaoGravar"])){
        $codigo = $_GET["acaoGravar"];
        $seguro = SeguroDAO::buscar($codigo);
        $nome = $seguro->nome;
        $cpf = $seguro->cpf;
        $placaveiculo = $seguro->placaveiculo;
        $apolice = $seguro->apolice;
        $Proposta = $seguro->proposta;
        $vigencia = $seguro->vigencia;
        $ativo = $seguro->ativo;


        $dadosSegurosEditado = [
            $codigo,
            $_GET["nome"],
            $_GET["cpf"],
            $_GET["placaveiculo"],
            $_GET["apolice"],
            $_GET["proposta"],
            $_GET["vigencia"],
            $_GET["ativo"]
        ];
        $seguroEditado = new Seguros($dadosSegurosEditado);
        SeguroDAO::atualizar($seguroEditado);
       


        }
        
      
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
<form class="formulario" method="get" action="">
                        <div class="row">                        
                            <div class="col-md-4">
                        Segurado: <br>
                        <input type="text" value="<?php echo $nome?>" name="nome" required
                                oninvalid="this.setCustomValidity('Por favor digite nome de segurado')"
                                oninput="this.setCustomValidity('')"
                                pattern="[a-zA-Z]{4,0}"
                                placeholder="Nome segurado">
                                </div>
                                <div class="col-md-4"> 
                                cpf:<br>
                                    <input type="text" value="<?php echo $cpf?>" name="cpf" required
                                    oninvalid="this.setCustomValidity('Por favor digite cpf do segurado')"
                                    oninput="this.setCustomValidity('')"
                                    pattern="[0-9]{9}[-]?[0-9]{2}"
                                    placeholder="_________-__">
                                        
                                </div>        
                                <div class="col-md-4"> 
                                Placa: <br>
                                <input type="text" value="<?php echo $placaveiculo?>" name="placaveiculo" required
                                oninvalid="this.setCustomValidity('Por favor digite placa de veículo')"
                                    oninput="this.setCustomValidity('')"
                                    pattern="[A-Z]{3}[-]?[0-9]{4}"
                                    placeholder="___-____">
                                </div>            
                                <div class="col-md-4">
                                Proposta: <br>
                                <input type="text" value="<?php echo $proposta?>" name="proposta" required
                                    oninvalid="this.setCustomValidity('Por favor digite a proposta')"
                                    oninput="this.setCustomValidity('')"
                                    pattern="[0-9]{5,100}"
                                    placeholder="Proposta">
                                </div>
                                <div class="col-md-4">
                                Apólice: <br>
                                <input type="text" value="<?php echo $apolice?>" name="apolice"
                                    placeholder="Apólice">
                                </div>
                                <div class="col-md-4">
                                Vigência: <br>
                                <input type="date" value="<?php echo $vigencia?>" name="vigencia" required
                                    oninvalid="this.setCustomValidity('Por favor coloque uma data')"
                                    oninput="this.setCustomValidity('')">
                                
                                    
                                </div>
                                <div class="col-md-4">
                                    Estado do seguro:
                                    <br>
                                    <select name="ativo" value="<?php echo $ativo?>"required>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </div>           
                            <div class="col-md-12">         
                                        
                            </select>
                                            <br><br>
                                            </div>
                    
        </div>
<div class='cold-md-12'>
       
        <button type="submit" class="btn btn-primary btn-sm" name="acaoGravar" value="<?php echo $codigo?>">Salvar</button>

</form>  
<form action='index.php' class='d-inline'>
        <button type='submit' name='' class='btn btn-secondary btn-sm'>Voltar</button>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
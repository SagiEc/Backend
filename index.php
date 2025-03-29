<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/conexao.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/SeguroDAO.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/Backend/MODEL/seguros.php";
    $con = Conexao::Getconexao();
    
   
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header> 
    
    <div class="container">       
        <div class="row">
            <div class="col-md-4">
                <p>test</p>

            </div>
                <div class="col-md-8" >
                    <h1>Corretora de seguros</h1>
                </div>
        </div>
    </div>

</header>
  
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col-xl-1" id="sidebar">
                <p>Corretora</p>
                <br><br><br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Novo seguro</button>
            </div>
            <div class="col-xl-11 " id="area__seguros">
                 <p>Seguros</p>
                 
                <table class="table table-striped" id="">
                <div class="col-md-12">
                    <thead>
                    <tr Class="Fundo_Tabela">
                    <th><b>Editar</b></th>
                    <th><b>id</b></th>
                    <th><b>Pessoa</b></th>
                    <th><b>cpf</b></th>
                    <th><b>Placa Veículo</b></th>
                    <th><b>Vigência</b></th>
                    <th><b>Apólice</b></th>
                    <th><b>Proposta</b></th> 
                    <th><b>Ativo</b></th>
                    </thead>
                </tr>
                </div>
               
                <div class="col-md-12">
                    <tbody>
                        <?php
                            $seguros = SeguroDAO::buscarTodos();
                            foreach($seguros as $seguro){
                                echo "
                                    <tr>
                                        <td><button type='button' class='btn btn-primary' data-toggle='modal'>Atualizar</button></td>
                                        <td>$seguro->id</td>
                                        <td>$seguro->nome</td>
                                        <td>$seguro->cpf</td>
                                        <td>$seguro->placaveiculo</td>
                                        <td>$seguro->vigencia</td>
                                        <td>$seguro->apolice</td>
                                        <td>$seguro->proposta</td>
                                        <td>$seguro->ativo</td>
                                    </tr>
                                ";
                            }
                    
                        
                        
                        ?>
                    </tbody>
                </div>
                </talbe>
            </div>
        </div>
    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="Model_content" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Model_content">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
                    <form class="formulario" method="get" action="">
                        <div class="row">                        
                            <div class="col-md-4">
                        Segurado: <br>
                        <input type="text" value="" name="Segurado" required
                                oninvalid="this.setCustomValidity('Por favor digite nome de segurado')"
                                oninput="this.setCustomValidity('')"
                                pattern="[a-zA-Z]{4,0}"
                                placeholder="Nome segurado">
                                </div>
                                <div class="col-md-4"> 
                                cpf:<br>
                                    <input type="text" value="" name="cpf" required
                                    oninvalid="this.setCustomValidity('Por favor digite cpf do segurado')"
                                    oninput="this.setCustomValidity('')"
                                    pattern="[0-9]{9}[-]?[0-9]{2}"
                                    placeholder="_________-__">
                                        
                                </div>        
                                <div class="col-md-4"> 
                                Placa: <br>
                                <input type="text" value="" name="Placa" required
                                oninvalid="this.setCustomValidity('Por favor digite placa de veículo')"
                                    oninput="this.setCustomValidity('')"
                                    pattern="[A-Z]{3}[-]?[0-9]{4}"
                                    placeholder="___-____">
                                </div>            
                                <div class="col-md-4">
                                Proposta: <br>
                                <input type="text" value="" name="Proposta" required
                                    oninvalid="this.setCustomValidity('Por favor digite nome de segurado')"
                                    oninput="this.setCustomValidity('')"
                                    pattern="[0-9]{5,100}"
                                    placeholder="Proposta">
                                </div>
                                <div class="col-md-4">
                                Apólice: <br>
                                <input type="text" value="" name="Apólice"
                                    placeholder="Apólice">
                                </div>
                                <div class="col-md-4">
                                Vigência: <br>
                                <input type="date" value="" name="Vigência" required
                                    oninvalid="this.setCustomValidity('Por favor coloque uma data')"
                                    oninput="this.setCustomValidity('')">
                                
                                    
                                </div>
                                <div class="col-md-4">
                                    Estado do seguro:
                                    <br>
                                    <select name="estado_seguro" required>
                                </div>                    
                                        <option value="A">Ativo</option>
                                        <option value="I">Inativo</option>
                                    </select>
                                            <br><br>
                                    
                    
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" value="Enviar os dados">Salvar</button>
            </form>  
    </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


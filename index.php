<?php 
    require $_SERVER['DOCUMENT_ROOT'] . "/Backend/CONTROLLER/conexao.php";

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
    <div class="janela-registro">


    </div>
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
  
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-xl-1 h-100" id="sidebar">
                <p>Corretora</p>
                <br><br><br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Novo seguro</button>
            </div>
            <div class="col-xl-11 h-100" id="area__seguros">
                 <p>Seguros</p>
                <table class="Tabelaseguros">
                    <tr Class="Fundo_Tabela">
                    
                    <td class="_Editar_"><b>Editar</b></td>
                    <td class="_Pessoa"><b>Pessoa</b></td>
                    <td class="Placa_veiculo"><b>Placa Veículo</b></td>
                    <td class="Vigencia"><b>Vigência</b></td>
                    <td class="apolice"><b>Apólice</b></td>
                    <td class="proposta"><b>Proposta</b></td> 
                    <td class="ativo"><b>Ativo</b></td>
                    
                </tr>
                <tr>
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr Class="Fundo_Tabela">
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr>
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr Class="Fundo_Tabela">
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr>
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr Class="Fundo_Tabela">
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr>
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
                <tr Class="Fundo_Tabela">
                    
                    <td class="_Editar_">Editar</td>
                    <td class="_Pessoa">Pessoa</td>
                    <td class="Placa_veiculo">Placa Veículo</td>
                    <td class="Vigencia">Vigência</td>
                    <td class="apolice">Apólice</td>
                    <td class="proposta">Proposta</td> 
                    <td class="ativo">Ativo</td>
                </tr>
               
                </talbe>
            </div>
        </div>
    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form action="">
                <input type="text" value="" name="pessoa" required>
            </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


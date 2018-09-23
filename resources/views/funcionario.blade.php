@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funcionario</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Cadastro de Funcionario</h2><br/>
      <form method="POST" action="{{route('funcionarios.store')}}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nome:</label>
            <input type="text" class="form-control" name="fun_nome">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Salário:</label>
              <input type="text" class="form-control" name="salario">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Data de Nascimento: </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="data_nas">   
         </div>
         </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Data da Contratação: </strong>  
            <input class="date form-control"  type="text" id="datepicker1" name="data_cont">   
         </div>
         </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <strong>Cargo: </strong> 
               {{ Form::select('cargo_id', $cargos->pluck('car_nome','cargo_id'), null, ['class'=>'form-control']) }}
          </div>
         </div>
           

         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <strong>Setor: </strong>
               {{ Form::select('setor_id', $setores->pluck('set_nome','setor_id'), null, ['class'=>'form-control']) }}
          </div>
         </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>

      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         }); 
          $('#datepicker1').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>
@endsection
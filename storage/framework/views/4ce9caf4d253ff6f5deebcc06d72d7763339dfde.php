<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
  
  <body>
    <div class="container">
      <h2>Cadastro de Funcionario</h2><br/>
      <form method="POST" action="<?php echo e(route('funcionarios.store')); ?>">
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
               <?php echo e(Form::select('cargo_id', $cargos->pluck('car_nome','cargo_id'), null, ['class'=>'form-control'])); ?>

          </div>
         </div>
           

         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <strong>Setor: </strong>
               <?php echo e(Form::select('setor_id', $setores->pluck('set_nome','setor_id'), null, ['class'=>'form-control'])); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
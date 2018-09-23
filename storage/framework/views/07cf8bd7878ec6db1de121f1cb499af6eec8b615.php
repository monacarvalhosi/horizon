<!DOCTYPE html>
<html>
<head>
	<title>Funcionarios - PDF</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<a href="<?php echo e(route('generate-pdf',['download'=>'pdf'])); ?>" Onclick="this.display=none;">Download PDF </a>
	<table class="table table-bordered">
		<thead>
			<th>Nome</th>
			<th>Data de Contratacao</th>
			<th>Salario</th>
		</thead>
		<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($value->fun_nome); ?></td>
				<td><?php echo e($value->fun_data_contratacao); ?></td>
				<td><?php echo e($value->fun_salario); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
</body>
</html>
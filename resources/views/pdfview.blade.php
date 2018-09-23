<!DOCTYPE html>
<html>
<head>
	<title>Funcionarios - PDF</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<a href="{{ route('generate-pdf',['download'=>'pdf']) }}">Download PDF </a>
	<table class="table table-bordered">
		<thead>
			<th>Nome</th>
			<th>Data de Contratacao</th>
			<th>Salario</th>
		</thead>
		<tbody>
			@foreach ($users as $key => $value)
			<tr>
				<td>{{ $value->fun_nome }}</td>
				<td>{{ $value->fun_data_contratacao }}</td>
				<td>{{ $value->fun_salario }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</body>
</html>
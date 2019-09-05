@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome"
				   id="nome" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="notas">Notas</label>
			<textarea name="notas" id="notas" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado" required>
				<option value="Em curso">Em curso</option>
				<option value="Terminado">Terminado</option>
			</select>

		</div>

	<button type="submit" class="btn btn-primary">Guardar Novo Produto</button>

	<a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>

	</form>



	<h3> Características do Produto </h3>
	<form method="POST" action="{{route('pontosdados.create')}}">
		@csrf()
		<div class="form-group">
			<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td></td>
				<td></td>
			</tr>
			
		</tbody>
			</table>

			<button type="submit" class="btn btn-primary">Adicionar Característica</button>
			
		</div>
	</form>

	

</div>

@endsection
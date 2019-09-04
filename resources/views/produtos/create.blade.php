@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome"
				   id="nome" class="form-control">
		</div>
		<div class="form-group">
			<label for="notas">Notas</label>
			<textarea name="notas" id="nots" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado" required>
				<option value="Em curso" selected='selected'>Em curso</option>
				<option value="Terminado">Terminado</option>
			</select>

		</div>

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

	<button type="submit" class="btn btn-primary">Guardar</button>

</div>

@endsection
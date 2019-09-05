@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Produto</h1>

	<form method="POST" >
		@method('PUT')
	
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" 
				   id="nome" class="form-control" value="{{$produto['nome']}}">
		</div>
		<div class="form-group">
			<label for="notas">Notas</label>
			<textarea name="notas" id="notas" class="form-control"  >{{$produto['notas']}}</textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado">
				<option value="Em curso">Em curso</option>
				<option value="Terminado">Terminado</option>
			</select>

		</div>

	<button type="submit" class="btn btn-primary">Atualizar</button>

	
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

			<a href="{{route('produtos.create')}}" class="btn btn-primary">Novo Produto</a>
			<button type="submit" class="btn btn-primary">Adicionar Característica</button>
			
		</div>
	</form>

	

</div>


@endsection

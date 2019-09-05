@extends('layouts.app')

@section('content')

<div class="container">

<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>N.º Opções</th>
				<th>Data</th>
				<th>Estado</th>
				<th colspan="3">Acções</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
			<tr>
				<td>{{ $produto['nome'] }}</td>
				<td>
					0
				</td>
				<td>{{ $produto['created_at'] }}</td>
				<td>
					{{ $produto['estado'] }}
				</td>
				<td>
					<a href="{{route('produtos.show',$produto)}}">Ver</a>	
				</td>
				<td>
					<a href="{{route('produtos.edit',$produto)}}">Editar</a>	
				</td>
				<td>
					<form method="POST" action="{{route('produtos.destroy',$produto)}}">
					@method('DELETE')
						@csrf()
						<button type="submit" 
								onclick="return confirm('Tem a certeza que pretende apagar este produto?')" class="btn btn-link">Apagar</button>	
					</form>
						
				</td>
			</tr>
			@endforeach
		</tbody>
</table>

</div>

<div class="container">
	<a href="{{route('produtos.create')}}" class="btn btn-primary">Novo Produto</a>
</div>
<p>
	
</p>

<div class="container">

	<button class="btn btn-primary" id="button-create-produto">Criar Novo Produto</button>
<!-- Este id está definido em javascript.js-->

	
	<form method="POST" id="form-create-produto">
		<h1> Novo Produto </h1>
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" 
				   id="nome" class="form-control" placeholder="Este campo é obrigatório" required>
		</div>
		<div class="form-group">
			<label for="notas">Notas</label>
			<textarea name="notas" id="notas" class="form-control" placeholder="Insira uma descrição para este produto"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado" required>
				<option value="Em curso">Em curso</option>
				<option value="Terminado">Terminado</option>
			</select>

		</div>

	
	<button type="submit" class="btn btn-primary">Guardar e Criar Características</button>

	
	</form>

</div>




@endsection

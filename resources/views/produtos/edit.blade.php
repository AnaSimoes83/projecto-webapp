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

	<br>
	<br>
    <h2> Características do Produto </h2>
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
			@foreach($produto->pontos_dados as $pontodados)
			<tr onclick="goToPontoDados({{ $pontodados['id'] }} );">
				<td>{{ $pontodados['nome'] }}</td>
				<td>{{ $pontodados['tipo'] }}</td>
			</tr>
			@endforeach
		</tbody>
		</table>

			
		</div>
	</form>

<br>

<h3>Adicionar Característica</h3>

	<form method="POST" id="form-create-caract">
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" 
				   id="nome" class="form-control" placeholder="Insira a característica">
		</div>
		
		<div class="form-group">
			<label for="tipo">Tipo</label>
			<select name="tipo" id="tipo" required>
						<option value="1">Texto</option>
						<option value="2">Data</option>
						<option value="3">Numérico superior</option>
						<option value="4">Numérico inferior</option>
					</select>

		</div>

	<button type="submit" class="btn btn-primary">Gravar</button>
	
	</form>	



<br>
<button type="submit" class="btn btn-primary">Adicionar Opção</button> 
<!--abrir a página show dos produtos para adicionar as opções-->
</div>




@endsection

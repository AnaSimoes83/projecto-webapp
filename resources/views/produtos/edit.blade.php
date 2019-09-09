@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Produto</h1>

	<form method="POST" action="{{route('produtos.update', $produto)}}">
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
			<tr onclick="goToPontoDados( {{ $pontodados['id'] }} )">
				<td>{{ $pontodados['nome'] }}</td>
				<td>{{ $pontodados['tipo'] }}</td>
				<td>{{ $pontodados['produto_id'] }}</td>
			</tr>
			@endforeach
		</tbody>
		</table>

			
		</div>
	</form>

<br>

<h3>Adicionar Característica</h3>

	<form method="POST" action="{{route('pontosdados.store', $produto)}}" >
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" 
				   id="nome" class="form-control" placeholder="Insira a característica">
		</div>

		<div class="form-group">
			<label for="tipo">Tipo</label>
			<select name="tipo" id="tipo" required>
						<option value="texto">Texto</option>
						<option value="data">Data</option>
						<option value="numérico superior">Numérico superior</option>
						<option value="numérico inferior">Numérico inferior</option>
					</select>

		</div>

		<div class="form-group">
			<input type="hidden" name="produto_id" 
				   id="produto_id" class="form-control" value="{{ $produto['produto_id'] }}">
		</div>
		

	<button type="submit" class="btn btn-primary">Gravar</button>
	
	</form>	



<br>
	<button type="submit" class="btn btn-primary">Adicionar Opção</button> 
<!--abrir a página show dos produtos para adicionar as opções-->
</div>

<br>

<div class="container">
	
	<a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>
</div>

@endsection

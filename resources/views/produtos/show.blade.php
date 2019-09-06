@extends('layouts.app')

@section('content')

<div class="container">
	
<h1> Produto {{$produto['nome']}} </h1>
	<form method="POST" >
		@method('PUT')
	
		@csrf()
		
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
<!--não faz sentido ter este botão-->
	<button type="submit" class="btn btn-primary">Atualizar</button>

	</form>

    <h2> Tabela com as Opções </h2>
	<form method="POST" action="{{route('pontosdados.create')}}">
		@csrf()
		<div class="form-group">
		<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Preço</th>
				<th>Links</th>
				<th>Imagem</th>
			</tr>
		</thead>
			<tr>
			</tr>
		</table>
	
		</div>
	</form>

<h3>Adicionar Opção</h3>

	<form method="POST" action="{{route('pontosdados.create')}}">
	@method('PUT')

		@csrf()
		<div class="form-group">
			<label for="nome">{{ $pontodados['nome'] }}</label>
			<input type="text" name="nome" 
				   id="nome" class="form-control" placeholder="Insira a opção">
		</div>
		
		<div class="form-group">
			<label for="nome">{{ $pontodados['nome'] }}</label>
			<input type="text" name="nome" 
				   id="nome" class="form-control" placeholder="Insira a opção">

		</div>

	<button type="submit" class="btn btn-primary">Gravar</button>
	
	</form>		
<br>
<button type="submit" class="btn btn-primary">Adicionar Opção</button> 

</div>




@endsection

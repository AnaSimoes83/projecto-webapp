@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" placeholder="Este campo é obrigatório" required>
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

	<button type="submit" class="btn-orange">Guardar e Adicionar Características</button>
	<!-- Este id está definido em javascript.js-->

	<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Nova Característica </h1>
	<form method="POST" action="{{route('pontosdados.store')}}">
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome"
				   id="nome" class="form-control">
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
		
		<button type="submit" class="btn btn-primary">Adicionar Característica</button>

	</form>
</div>

@endsection
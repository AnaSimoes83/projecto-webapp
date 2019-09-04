@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Novo Produto </h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="nome"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes" id="notes" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado" required>
				<option value="Em curso" selected='selected'>Em curso</option>
				<option value="Terminado">Terminado</option>

		</div>

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>



<div class="container">

	<h1> Características do Produto </h1>
	<form method="POST" action="{{route('produtos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="nome"
				   id="name" class="form-control">
		</div>
	</form>


</div>

@endsection
@extends('layouts.app')

@section('content')

<!--<div class="container">
	<h1> Novo Emprego </h1>
	<form method="POST" action="{{route('jobs.store')}}">
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name"
				   id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes" id="notes" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="link">Link</label>
			<input type="text" name="link"
				   id="link" class="form-control">
		</div>

		<div class="form-group">
			<select name="carreer_id" class="form-control">
				@foreach($carreers as $carreer)
				<option value="{{$carreer['id']}}">{{$carreer['name']}}</option>
				@endforeach
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>

</div>
-->
@endsection
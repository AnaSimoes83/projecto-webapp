@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Nova Opção </h1>

	@foreach($pontosdados as $pontodados)
	<form method="POST" action="{{route('opcaos.store')}}">
		@csrf()
		<div class="form-group">
			<label for="nome">{{ $pontodados['nome'] }}</label>
			<input type="text" name="valor" 
			id="valor" class="form-control">
		</div>
	@endforeach

<!--<button type="submit" class="btn-orange">Guardar</button>-->
	<!-- Este id está definido em javascript.js-->
	</form>

	a aparecer o botão guardar
	<br>
	<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>

@endsection
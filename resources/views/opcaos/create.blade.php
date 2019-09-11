@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Nova Opção </h1>

	<form method="POST" action="{{route('opcaos.store', $produto)}}">
		@csrf()
		@foreach($pontosdados as $pontodados)
		<div class="form-group">
			<label for="nome">{{ $pontodados['nome'] }}</label>
			<input type="text" name="{{ $pontodados->id }}" id="{{ $pontodados->id }}" class="form-control" @if($pontodados->nome=='Nome' || $pontodados->nome=="Preço" || $pontodados->nome=="Referência") required @endif>
		</div>
	@endforeach

	<button type="submit" class="btn-orange">Guardar</button>
</form>
<br>
<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>

@endsection
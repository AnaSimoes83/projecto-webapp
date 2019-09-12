@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Nova Opção do Produto: {{$produto['nome']}}</h1>

	@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
	        <strong>{{ $message }}</strong>
	</div>
	@endif

	<form method="POST" action="{{route('opcaos.store', $produto)}}">
		@csrf()
		@foreach($pontosdados as $pontodados)
		<div class="form-group">
			<label for="nome">{{ $pontodados['nome'] }}</label>
			<input type="text" name="{{ $pontodados->id }}" id="{{ $pontodados->id }}" class="form-control" @if($pontodados->nome=='Nome' || $pontodados->nome=="Preço" || $pontodados->nome=="Referência") required @endif>
		</div>
		@endforeach

	<button type="submit" class="btn-orange">Guardar</button>
<n>
<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>

</form>

@endsection
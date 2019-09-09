@extends('layouts.app')

@section('content')

<div class="container">
	
<h1> Produto: {{$produto['nome']}} </h1>
	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="notas">Notas</label>
			<textarea name="notas" id="notas" class="form-control">{{$produto['notas']}}</textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado: {{$produto['estado']}}</label>
		</div>
	</form>

    <h2> Tabela com as Opções </h2>

<a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>	
</div>

@endsection

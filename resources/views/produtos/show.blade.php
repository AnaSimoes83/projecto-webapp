@extends('layouts.app')

@section('content')

<div class="container">
	
<h1>Produto: {{$produto['nome']}} </h1>
	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="notas"><b>Notas:</b> {{$produto['notas']}}</label>
		</div>
		<div class="form-group">
			<label for="estado"><b>Estado:</b> {{$produto['estado']}}</label>
		</div>
	</form>

    <h2>Opções </h2>

    a aparecer a tabela da view create das opcaos

<br>
<br>
<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>	
</div>

@endsection

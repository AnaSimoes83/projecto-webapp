@extends('layouts.app')

@section('content')

<div class="container">
	
	<h1> Produto: {{$produto['nome']}} </h1>
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

	<h2> Opções </h2>

	@php $a = $produto->opcaos[0]['referencia'] @endphp

	<div class="form-group">
		<table class="table">		
			<thead>
				<tr>
					@foreach($produto->pontos_dados as $pontodados)
					<th>{{ $pontodados['nome'] }}</th>
					@endforeach
					<th>Última atualização</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					@foreach($produto->opcaos as $opcao)

					@if($opcao->referencia != $a)
						</tr><tr>
					@endif

					<td>{{ $opcao['valor'] }}</td>

					@php $a = $opcao['referencia'] @endphp

					@endforeach
					<td>{{ $pontodados['updated_at'] }}</td>
				</tr>
			</tbody>

		</table>
	</div>

	<br>
	<br>
	<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>
	<n>
		<a href="{{route('opcaos.create', $produto)}}" class="btn-orange">Adicionar Opção</a> 	
	</div>

	@endsection



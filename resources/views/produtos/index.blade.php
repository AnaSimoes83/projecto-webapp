@extends('layouts.app')

@section('content')

<div class="container">

<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>N.º Opções</th>
				<th>Data</th>
				<th>Estado</th>
				<th colspan="2">Acções</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
			<tr>
				<td>{{ $produto['nome'] }}</td>
				<td>
					0
				</td>
				<td>{{ $produto['created_at'] }}</td>
				<td>
					em curso
				</td>
				<td>
					<a href="{{route('produtos.show',$produto)}}">Ver</a>
						
				</td>
			</tr>
			@endforeach
		</tbody>
</table>

</div>

<div class="container">
	<a href="{{route('produtos.create')}}" class="btn btn-primary">Novo Produto</a>
</div>


@endsection

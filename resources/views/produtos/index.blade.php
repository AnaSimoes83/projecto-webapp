@extends('layouts.app')

@section('content')

<div class="container">

<table class="table table-borderless"> 	
	<tr> 		
		<td><h1>Lista dos seus Produtos </h1></td>
		<td> 			
			<form action="produtos" method="get" class="pagination justify-content-end"> 				
				<input type="text" name="nome" id="idNome" placeholder=" Produto a pesquisar" value=""> 				
				<input type="submit" value="Pesquisar" class="btn-orange"> 			
			</form> 		
		</td> 	
	</tr> 
</table>

<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>N.º Opções</th>
				<th>Data</th>
				<th>Estado</th>
				<th td style="text-align: center;" colspan="3">Acções</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $produto)
			<tr>
				<td>{{ $produto['nome'] }}</td>
				<td>{{ count( collect( $produto['opcaos'] )->groupBy('referencia') ) }}</td>
				<td>{{ $produto['created_at'] }}</td>
				<td>{{ $produto['estado'] }}</td>
				<td style="text-align: center;">
					<a href="{{route('produtos.show',$produto)}}">Ver</a>	
				</td>
				<td style="text-align: center;">
					<a href="{{route('produtos.edit',$produto)}}">Editar</a>	
				</td>
				<td style="text-align: center;">
					<form method="POST" action="{{route('produtos.destroy',$produto)}}">
						@method('DELETE')
						@csrf()
						<button type="submit" onclick="return confirm('Tem a certeza que pretende apagar este produto?')" class="btn btn-link">Apagar</button>	
					</form>						
				</td>
			</tr>
			@endforeach
		</tbody>
</table>

{{ $produtos->links() }}

</div>

<div class="container">
	<a href="{{route('produtos.create')}}" class="btn-orange">Novo Produto</a>

	<a href="/produtos?ver=todos" class="btn-orange" id="ver" value="todos">Ver Todos</a>
</div>

@endsection

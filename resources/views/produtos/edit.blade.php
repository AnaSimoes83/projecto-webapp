@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Produto</h1>

	<form method="POST" action="{{route('produtos.update', $produto)}}">
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" 
			id="nome" class="form-control" value="{{$produto['nome']}}">
		</div>
		<div class="form-group">
			<label for="notas">Notas</label>
			<textarea name="notas" id="notas" class="form-control" >{{$produto['notas']}}</textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado">
				<option @if( $produto['estado'] == 'Em curso') selected @endif value="Em curso">Em curso</option>
				<option @if( $produto['estado'] == 'Terminado') selected @endif value="Terminado">Terminado</option>
			</select>
		</div>
		<button type="submit" class="btn-orange">Atualizar Produto</button>
	</form>

	<br>
	<br>
	<h2> Características do Produto </h2>
	
	<div class="form-group">
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Tipo</th>
					<th td style="text-align: center;" colspan="2">Acções</th>
				</tr>
			</thead>
			<tbody>
				@foreach($produto->pontos_dados as $pontodados)
				<tr>
					<td>{{ $pontodados['nome'] }}</td>
					<td>{{ $pontodados['tipo'] }}</td>
					<td style="text-align: center;">
						@if($pontodados['nome'] != "Referência" && $pontodados['nome'] != "Nome" && $pontodados['nome'] != "Preço" && $pontodados['nome'] != "Imagens" && $pontodados['nome'] != "Notas" && $pontodados['nome'] != "Link compra" && $pontodados['nome'] != "Link informação")
							<a href="{{route('pontosdados.edit',$pontodados)}}" class="btn btn-link">Editar</a>
						@endif
					</td>
					<td style="text-align: center;">
						@if($pontodados['nome'] != "Referência" && $pontodados['nome'] != "Nome" && $pontodados['nome'] != "Preço")
						<form method="POST" action="{{route('pontosdados.destroy', $pontodados)}}">
							@method('DELETE')
							@csrf()
							<button type="submit" onclick="return confirm('Tem a certeza que pretende apagar esta característica?')" class="btn btn-link">Apagar</button>	
						</form>
						@endif
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

	<br>
	<h3>Adicionar Característica</h3>

	<form method="POST" action="{{route('pontosdados.store', $produto)}}" >
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" class="form-control" placeholder="Insira a característica a adicionar">
		</div>

		<div class="form-group">
			<label for="tipo">Tipo</label>
			<select name="tipo" id="tipo" required>
				<option value="Texto">Texto</option>
				<option value="Data">Data</option>
				<option value="Numérico superior">Numérico superior</option>
				<option value="Numérico inferior">Numérico inferior</option>
			</select>
		</div>

		<div class="form-group">
			<input type="hidden" name="produto_id" 
			id="produto_id" class="form-control" value="{{ $produto['id'] }}">
		</div>
		
		<button type="submit" class="btn-orange">Gravar característica</button>

	</form>	

	<br>
	<br>
	
	<h2> Opções </h2>

	@if( sizeof($produto->opcaos) )                    	<!-- quando ainda não há opções -->
	@php $a = $produto->opcaos[0]['referencia'] @endphp
	@endif

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
					@foreach($produto->opcaos as $key => $opcao)
						@if($opcao->referencia != $a)
							<td>{{ $produto->opcaos[$key-1]['updated_at'] }}</td>
							</tr>
							<tr>
						@endif

						<td>{{ $opcao['valor'] }}</td>
						@php $a = $opcao['referencia'] @endphp
					@endforeach
					@if (!empty ($opcao))                  <!-- permite ver o produto que ainda não tem opções -->
					<td>{{ $opcao['updated_at'] }}</td>
					@endif
				</tr>
			</tbody>
		</table>
	</div>

	<br>
	<a href="{{route('opcaos.create', $produto)}}" class="btn-orange">Adicionar Opção</a> 
	<!--abrir a página show dos produtos para adicionar as opções-->

<n>
	<a href="{{route('produtos.index')}}" class="btn-orange">Voltar</a>
</div>

@endsection

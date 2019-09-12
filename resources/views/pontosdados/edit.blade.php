@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Característica</h1>

	<form method="POST" action="{{route('pontosdados.update', $pontosdados)}}">
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" 
			id="nome" class="form-control" value="{{$pontosdados['nome']}}">
		</div>
		<div class="form-group">
			<label for="tipo">Tipo</label>
			<select name="tipo" id="tipo" >
				<option @if( $pontosdados['tipo'] == 'Texto') selected @endif value="Texto">Texto</option>
				<option @if( $pontosdados['tipo'] == 'Data') selected @endif value="Data">Data</option>
				<option @if( $pontosdados['tipo'] == 'Numérico superior') selected @endif value="Numérico superior">Numérico superior</option>
				<option @if( $pontosdados['tipo'] == 'Numérico inferior') selected @endif value="Numérico inferior">Numérico inferior</option>
			</select>
		</div>
		<button type="submit" class="btn-orange">Atualizar Característica</button>
	</form>
</div>

@endsection
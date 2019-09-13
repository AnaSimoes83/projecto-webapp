@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Editar Utilizador</h1>

	<form method="POST" action="{{route('users.update', $user)}}">
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" 
			id="nome" class="form-control" value="{{$user['name']}}">
		</div>
		<div class="form-group">
			<label for="email">email</label>
			<input name="email" id="email" class="form-control" value="{{$user['email']}}">
		</div>
		<div class="form-group">
			<label for="foto">Foto</label>
			<input name="foto" id="foto" class="form-control" value="{{$user['foto']}}">
		</div>
		<div class="form-group">
			<label for="estado">Estado</label>
			<select name="estado" id="estado">
				<option @if( $user['estado'] == 'Ativo') selected @endif value="Ativo">Ativo</option>
				<option @if( $user['estado'] == 'Inativo') selected @endif value="Inativo">Inativo</option>
			</select>
		</div>
		<div class="form-group">
			<label for="admin">Administrador</label>
			<select name="admin" id="admin">
				<option @if( $user['admin'] == '0') selected @endif value="0">não</option>
				<option @if( $user['admin'] == '1') selected @endif value="1">sim</option>
			</select>
		</div>
		<button type="submit" class="btn-orange">Atualizar Utilizador</button>
	</form>

@endsection
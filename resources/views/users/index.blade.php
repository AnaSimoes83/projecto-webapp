@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Lista de Utilizadores </h1>
	<h3> Administrador: {{ Auth::user()->name }} </h3>

	<div class="form-group">
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>e-mail</th>
					<th>Foto</th>
					<th>Estado</th>
					<th>Administrador</th>
					<th td style="text-align: center;" colspan="2">Acções</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{ $user['name'] }}</td>
					<td>{{ $user['email'] }}</td>
					<td>{{ $user['foto'] }}</td>
					<td style="text-align: center;">
						<div class="form-group">
							<label for="estado">Estado</label>
							<select name="estado" id="estado">
								<option @if( $user['estado'] == 'Ativo') selected @endif value="Ativo">Ativo</option>
								<option @if( $user['estado'] == 'Inativo') selected @endif value="Inativo">Inativo</option>
							</select>
						</div>
							<a href="{{route('users.edit',$users)}}" class="btn btn-link">Editar</a>
					</td>
					<td style="text-align: center;">
						<form method="POST" action="{{route('users.destroy',$user)}}">
							@method('DELETE')
							@csrf()
							<button type="submit" onclick="return confirm('Tem a certeza que pretende apagar este utilizador?')" class="btn btn-link">Apagar</button>	
						</form>						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>


</div>

@endsection


	<h3>Adicionar Utilizador</h3>

	

@extends('layouts.app')

@section('content')

<!--<div class="container">
	<h1>{{ $job['name'] }}</h1>

	<form method="POST" >
		@method('PUT')
		@csrf()
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" 
				   class="form-control"
				   id="name" value="{{$job['name']}}">
		</div>
		<div class="form-group">
			<label for="notes">Notas</label>
			<textarea name="notes"
				   id="notes" class="form-control">{{$job['notes']}}</textarea>
		</div>
		<div class="form-group">
			<label for="link">Link</label>
			<input type="text" name="link" 
				   class="form-control"
				   id="link" value="{{$job['link']}}">
		</div>
		<div class="form-group">
			<select name="job_id" class="form-control" value="{{$job['carreer_id']}}">
				@foreach($carreers as $carreer)
				<option value="{{$carreer['id']}}"
						{{($carreer['id'] == $job['carreer_id'])?'selected':''}} >{{$carreer['name']}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<button type="submit" 
					class="btn btn-primary">Atualizar</button>
		</div>
	</form>
</div>
-->
@endsection
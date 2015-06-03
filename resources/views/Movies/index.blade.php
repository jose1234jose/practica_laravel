<h2>Vista de Movies:</h2>
@extends('app')
@section('content')
	

<div class='container'>
	<h1>Movies</h1>
	
	<table class='table table-striped'>
		<thead>
			<tr>
				<th>name</th>
				<th>show</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach ($movies as $movie)
					<tr>
					<td><p>{{$movie->name}}</p></td>
					<td><a href="/movies/{{$movie->id}}">show</a></td>	
					<td><a href="/movies/{{$movie->id}}/edit">edit</a></td>
					{!! Form::open(array('route' => array('movies.destroy', $movie->id), 'method' => 'delete')) !!}
					<td><button type="submit" class="btn btn-danger btn-mini">Borrar</button></td>
					{!! Form::close() !!}
					</tr>
				@endforeach
			</tr>
		</tbody>
	</table>
	<a href="/movies/create">New Movie</a>
</div>

@stop
@extends('app')
@section('content')
	<h2>{{$movie->name}}</h2>
	<p>{{$movie->description}}</p>



		{!! Form::open(['url'=>'reviews']) !!}
		<br>
		{!! Form::label('name','Comentario:') !!}
		{!! Form::text('content') !!}
		{!! Form::hidden('movies_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar') !!}
		{!! Form::close() !!}




@stop
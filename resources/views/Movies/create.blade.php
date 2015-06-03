@extends('layout')
@section('content')
{!! Form::open(['url'=>'movies']) !!}
{!! Form::label('name','name:') !!}
{!! Form::text('name') !!}
<br>
{!! Form::label('name','description:') !!}
{!! Form::text('description') !!}
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@if ($errors->any())
	@foreach($errors -> all() as $error)
		{{$error}}
	@endforeach
@endif
@stop
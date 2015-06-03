@extends('app')
@section('content')
{!! Form::model($movie, ['method'=>'PATCH', 'action' => ['MoviesController@update', $movie->id]]) !!}
{!! Form::label('name','name:') !!}
{!! Form::text('name') !!}
<br>
{!! Form::label('name','description:') !!}
{!! Form::text('description') !!}
<br><br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}
@stop
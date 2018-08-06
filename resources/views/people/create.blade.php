@extends('layouts.app')

@section('content')
<h1>Add People</h1>
    {!! Form::open(['action' => 'PeoplesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('num_op', 'People Number')}}
        {{Form::text('num_op', '', ['class' => 'form-control', 'placeholder' => 'Number'])}}
    </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
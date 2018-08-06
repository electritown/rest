@extends('layouts.app')

@section('content')
<h1>Create Table</h1>
    {!! Form::open(['action' => 'TablesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('num_ot', 'Table Number')}}
        {{Form::text('num_ot', '', ['class' => 'form-control', 'placeholder' => 'Number'])}}
    </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
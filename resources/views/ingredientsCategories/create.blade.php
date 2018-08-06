@extends('layouts.app')

@section('content')
    <h1>Create Ingredient Category</h1>
    {!! Form::open(['action' => 'IngCategoriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
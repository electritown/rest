@extends('layouts.app')

@section('content')
    <h1>Create Category</h1>
    {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('categories', 'Select Super Category', ['style' => 'margin-right:80px;'])}}
            {{Form::select('supCat', $supCatName, $supCatId, ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
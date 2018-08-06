@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    <a href="/categories" class="btn btn-default" role="button">Back</a> <br><br>
    {!! Form::open(['action' => ['IngCategoriesController@update', $ingCat->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $ingCat->ingcat_name, ['class' => 'form-control', 'value' => $ingCat->ingcat_name, 'autocomplete' => 'off'])}}
            <br />
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
@endsection
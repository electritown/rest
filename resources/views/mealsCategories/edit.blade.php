@extends('layouts.app')

@section('content')
    <h1>Edit Categories</h1>
    <a href="/categories" class="btn btn-default" role="button">Back</a> <br><br>
    {!! Form::open(['action' => ['CategoriesController@update', $cat->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $cat->cat_name, ['class' => 'form-control', 'value' => $cat->cat_name, 'autocomplete' => 'off'])}}
            <br />
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
    {!! Form::close() !!}
@endsection
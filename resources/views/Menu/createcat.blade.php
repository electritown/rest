@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>
    {!! Form::open(['action' => 'MenuController@storecat', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
        <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category', 'autocomplete' => 'off'])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
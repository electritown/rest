@extends('layouts.app')

@section('content')
    <h1>Create Ingredient</h1>
    {!! Form::open(['action' => 'IngredientsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
                {{Form::label('quantity', 'Quantity (KG)')}}
                {{Form::number('quantity', '', ['class' => 'form-control', 'min' => '1', 'placeholder' => 'Quantity'])}}    
        </div>
        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
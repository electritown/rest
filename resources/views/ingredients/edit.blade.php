@extends('layouts.app')

@section('content')
    <h1>Edit Ingredient</h1>
    <a href="/ingredients" class="btn btn-default" role="button">Back</a> <br><br>
    {!! Form::open(['action' => ['IngredientsController@update', $ing->ing_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $ing->ing_name, ['class' => 'form-control', 'value' => $ing->ing_name, 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
                {{Form::label('describtion', 'Describtion')}}
                {{Form::textarea('describtion', $ing->ing_desc, ['class' => 'form-control', 'value' => $ing->ing_desc])}}
        </div>
        <div class="form-group">
                {{Form::label('quantity', 'Quantity (KG)')}}
                {{Form::number('quantity', $ing->ing_quantity, ['class' => 'form-control', 'min' => '1', 'value' => $ing->ing_quantity])}}
        </div>

        {{-- <div class="form-group">
                {{Form::file('cover_image')}}
        </div> --}}

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
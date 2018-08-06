@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>
    {!! Form::open(['action' => 'MealsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
            {{Form::label('item_name', 'Item Name')}}
            {{Form::text('item_name', '', ['class' => 'form-control', 'placeholder' => 'Item Name', 'autocomplete' => 'off'])}}
    </div>
    <div class="form-group">
        {{Form::label('item describtion', 'Item Describtion')}}
        {{Form::textarea('item_describtion', '', ['class' => 'form-control', 'placeholder' => 'Item Describtion'])}}
    </div>
    <div class="form-group">
        {{Form::label('item ingredients', 'Item Ingredients :')}} <br>
        @if(count($ingredients) >= 1)
            @foreach($ingredients as $ing)
                <div>
                    {{Form::label('item ingredients', $ing->ing_name, ['style' => 'margin-right:80px;'])}}
                    {{Form::checkbox('ing_id[]', $ing->ing_id, ['class' => 'pull-right'])}}
                    {{Form::label('amount', 'Amount', ['style' => 'margin-left: 150px; padding:20px'])}}
                    {{Form::number('amount', '', ['style' => 'margin-left: 200px;', 'min' => '1', 'placeholder' => 'Amount'])}}
                    <br />
                </div>
            @endforeach
        @else
            <h4>No Ingredients Found</h4>
        @endif
    </div>
    <div class="form-group">
        {{Form::label('categories', 'Select Category', ['style' => 'margin-right:80px;'])}}
        {{Form::select('categories', $catName, $catId, ['class' => 'form-control'])}}
    </div>
        {{-- <div class="form-group">
            {{  }}Form::file('cover_image')}}
        </div> --}}

        {{Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'margin-bottom: 150px'])}}
    {!! Form::close() !!}
@endsection
@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>
    { !! Form::open(['action' => 'MenuController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
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
                    {{Form::label('item ingredients', $ing)}}
                    {{Form::checkbox('item_ingredients', $ing)}}
                @endforeach
            @else
                <h4>No Ingredients Found</h4>
            @endif
        </div>

        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() ! !}
@endsection
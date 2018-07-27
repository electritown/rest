@extends('layouts.app')

@section('content')
    <h1>Update Item</h1>
    {!! Form::open(['action' => ['MealsController@update',$item->item_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('item_name', 'Item Name')}}
            {{Form::text('item_name', $item->item_name, ['class' => 'form-control', 'value' => $item->item_name, 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('item description', 'Item Description')}}
            {{Form::textarea('item_describtion', $item->item_describtion, ['class' => 'form-control', 'value' => $item->item_describtion])}}
        </div>
        
        <div class="form-group">
            {{Form::label('item ingredients', 'Item Ingredients :')}} <br>
            @if(count($ingredients) >= 1)
                @foreach($ingredients as $ing)
                    {{Form::label('item ingredients', $ing->ing_name)}}
                    {{Form::checkbox('ing_id', $ing->ing_id)}}
                @endforeach
            @else
                <h4>No Ingredients Found</h4>
            @endif
        </div>

        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
@extends('layouts.app')

@section('content')
    <h1>Ingredients</h1>
    <a href="/ingredients/create" class="btn btn-default pull-right">Create New</a> <br><br>
    @if(count($ingredients) > 0)
        @foreach($ingredients as $ing)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">

                    <!--
                         <img style="width:100%;" src="/storage/cover_images/{{$ing->cover_image}}"> 
                        For imgs    
                    -->
                    
                </div>
                    <div class="col-md-8 col-sm-4">
                        <h3>{{$ing->ing_name}}</h3>
                       
                            <div class="col-md-3 col-sm-3" >
                                    <h4>Quantity : {{$ing->ing_quantity}} Kg</h4>
                             
                                <div class="form-group ">
                                    {{Form::label('Amount', 'Amount')}}
                                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Amount', 'autocomplete' => 'off'])}}
                                </div>
                            </div>
                        <!-- Deleting -->
                        {!!Form::open(['action' => ['IngredientsController@destroy', $ing->ing_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}            
                        <a href="/ingredients/{{$ing->ing_id}}/edit" class="btn btn-primary pull-right" role="button" style="margin-right:8px;">Edit</a>            
                    </div>  
                </div>
            </div>
        @endforeach
        {{$ingredients->links()}}
    @else
        <p>No Ingredients Found</p>
    @endif
@endsection
@extends('layouts.app')

@section('content')
    <h1>Menu</h1>
    <a href="/menu/create" class="btn btn-default pull-right">Create Item</a> <br><br>
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">

                    <!--
                         <img style="width:100%;" src="/storage/cover_images/{{$item->item_cover_image}}"> 
                        For imgs    
                    -->
                    
                </div>
                    <div class="col-md-8 col-sm-4">
                        <h3>{{$item->item_name}}</h3>
                        <h4>Describtion :<br> {{$item->item_description}}</h4>
                        <small>Last Updated on {{$item->updated_at}}</small>
                        
                        <!-- Deleting -->
                        {!!Form::open(['action' => ['MenuController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}            
                        <a href="/menu/{{$item->id}}/edit" class="btn btn-primary pull-right" role="button" style="margin-right:8px;">Edit</a>            
                    </div>
                </div>
            </div>
        @endforeach
        {{$items->links()}}
    @else
        <p>No Items Found</p>
    @endif
@endsection
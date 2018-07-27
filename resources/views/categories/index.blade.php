@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <a href="/categories/create" class="btn btn-default pull-right">Create New</a> <br><br>
    @if(count($categories) > 0)
        @foreach($categories as $cat)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">

                    <!--
                         <img style="width:100%;" src="/storage/cover_images/{{$cat->cover_image}}"> 
                        For imgs    
                    -->
                    
                </div>
                    <div class="col-md-8 col-sm-4">
                        <h3>{{$cat->cat_name}}</h3>
                        <small>Created At <br /> {{$cat->created_at}}</small>
                        
                        <!-- Deleting -->
                        {!!Form::open(['action' => ['CategoriesController@destroy', $cat->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}            
                        <a href="/categories/{{$cat->id}}/edit" class="btn btn-primary pull-right" role="button" style="margin-right:8px;">Edit</a>            
                    </div>
                </div>
            </div>
        @endforeach
        {{$categories->links()}}
    @else
        <p>No categories Found</p>
    @endif
@endsection
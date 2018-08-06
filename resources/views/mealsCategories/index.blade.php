@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <div class="nav nav-pills-rounded">
        <div class="container">
            <div class="navbar-header">
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li style="margin-right:5px;" class="btn btn-info" href="#">Meals Categories</li>
                    <li style="margin-right:5px;" class="btn btn-info" href="#">Ingredients Categories</li>
                </ul>
                <ul class="ml-auto">
                    <a href="/categories/create" class="btn btn-default pull-right">Create Meal Category</a>
                    <a style="margin-right:3px"href="/ingCategories/create" class="btn btn-default pull-right">Create Ingredient Category</a>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <hr />
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
    @if(count($ingCats) > 0)
        @foreach($ingCats as $ingCat)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">

                    <!--
                         <img style="width:100%;" src="/storage/cover_images/{{$ingCat->cover_image}}"> 
                        For imgs    
                    -->
                    
                </div>
                    <div class="col-md-8 col-sm-4">
                        <h3>{{$ingCat->ingcat_name}}</h3>
                        <small>Created At <br /> {{$ingCat->created_at}}</small>
                        
                        <!-- Deleting -->
                        {!!Form::open(['action' => ['IngCategoriesController@destroy', $ingCat->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}            
                        <a href="/ingCategories/{{$ingCat->id}}/edit" class="btn btn-primary pull-right" role="button" style="margin-right:8px;">Edit</a>            
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No Ingredient categories Found</p>
    @endif
@endsection
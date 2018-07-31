@extends('layouts.app')
@section('content')
    <h1>Meals</h1>
        <div class="nav nav-pills-rounded">
            <div class="container">
            <div class="navbar-header">
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @foreach($supCategories as $supCat)
                        <li style="margin-right:5px;" class="btn btn-info" href="#">{{$supCat->supcat_name}}</li>
                    @endforeach
                </ul>
                <ul class="ml-auto">
                    <li><a href="/meals/create" class="btn btn-default pull-right">Create Item</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            </div>
        </div>

    <hr />
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="well">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <!-- for pics -->
                    </div>
                      <div id="accordion col-md-8 col-sm-4">
                        <div class="card">
                            <div class="card-header" id="heading{{$item->item_id}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link col-md-6 col-sm-2" data-toggle="collapse" data-target="#{{$item->item_id}}" aria-expanded="true" aria-controls="collapseOne">
                                        {{$item->item_name}}
                                    </button>
                                </h5>
                            </div>
                            <div class="col-md-6 col-sm-2">
                                <!-- Deleting -->
                                {!!Form::open(['action' => ['MealsController@destroy', $item->item_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                
                                {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}             
                                <a href="/meals/{{$item->item_id}}/edit" class="btn btn-primary pull-right" role="button" style="margin-right:8px;">Edit</a>
                                {{-- make order to the cart --}}
                                <a href="/cart/{{$item->item_id}}/edit" class="btn btn-success btn pull-right" role="button" style="margin-right:8px;">Order</a>


                                {{-- <form action="/cart" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="id" value="{{ $item->item_id }}">
                                    <input type="hidden" name="name" value="{{ $item->item_name }}">
                                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                                </form>                  --}}

                            </div>                   
                        </div>
                        <div id="{{$item->item_id}}" class="collapse" aria-labelledby="heading{{$item->item_id}}" data-parent="#accordion">
                            <div class="card card-body">
                                <h4>Describtion : {{$item->item_describtion}}</h4>
                                <small>Last Updated on {{$item->updated_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$items->links()}}
    @else
        <p>No Items Found</p>
    @endif
    
@endsection
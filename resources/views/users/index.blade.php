@extends('layouts.app')

@section('content')
    <h1>User</h1>
    <a href="/users/create" class="btn btn-default pull-right">Create User</a> <br><br>
    @if(count($users) > 0)
        @foreach($users as $user)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                    
                </div>
                    <div class="col-md-8 col-sm-4">
                        <h3>{{$user->name}}</h3>
                        <small>Last Updated on {{$user->updated_at}}</small>
                        
                        <!-- Deleting -->
                        {!!Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}            
                        <a href="/users/{{$user->id}}/edit" class="btn btn-primary pull-right" role="button" style="margin-right:8px;">Edit</a>            
                    </div>
                </div>
            </div>
        @endforeach  
    @else
        <p>No Users Found</p>
    @endif
@endsection
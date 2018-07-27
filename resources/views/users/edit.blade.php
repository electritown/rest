@extends('layouts.app')

@section('content')
    <h1>Update User</h1>
    {!! Form::open(['action' => ['UserController@update',$user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Full Name')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'value' => $user->name, 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::email('email', $user->email, ['class' => 'form-control', 'value' => $user->email])}}
        </div>
        
        <div class="form-group">
            {{Form::label('password', 'Password :')}}
            {{Form::password('password', ['class' => 'form-control'])}}
        </div>

        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
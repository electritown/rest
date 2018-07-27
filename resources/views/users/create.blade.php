@extends('layouts.app')

@section('content')
    <h1>Create User</h1>
    {!! Form::open(['action' => 'UserController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Full Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => ' FullName', 'autocomplete' => 'off'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('password', 'Password :')}}
            {{Form::password('password', ['class' => 'form-control'])}}
        </div>

       

        {{-- <div class="form-group">
            {{Form::file('cover_image')}}
        </div> --}}

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
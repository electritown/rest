@extends('layouts.app')

@section('content')
<h1>Tables</h1>
<a href="/table/create" class="btn btn-success pull-right" style="margin-left: 500px; margin-bottom: 20px;">Create</a> <br><br>
    @if(count($tables) > 0)
        @foreach($tables as $table)
            <div class="col-md-4 col-sm-4" style="width:25%;display: inline-block">
                <a href="/people/create"><img  width="100" height="100" src="/storage/cover_images/{{$table->image}}" style="margin-left: 135px;"></a>
                <h3><a style="margin-left: 175px; color: cornflowerblue" >{{$table->num_ot}}</a></h3> <br><br>
                
                @if($table->status == true)
                <form id="status-form-{{ $table->id }}" action="{{ route('table.edit',$table->id) }}" style="display: none;" method="PUT">
                    @csrf
                    </form>
                    <button type="button" class="btn btn-success btn-sm"
                    style="margin-left: 145px; margin-bottom: 20px;" onclick="if(confirm('Are you verify this request?')){
                          event.preventDefault();
                          document.getElementById('status-form-{{ $table->id }}').submit();
                }else {
                      event.preventDefault();
                    }"><h5><span>Available</span></h5></button>
                    
                @else
                <form id="status-form-{{ $table->id }}" action="{{ route('table.show',$table->id) }}" style="display: none;" method="PUT">
                    @csrf
                    </form>
                    <button type="button" class="btn btn-danger btn-sm" style="margin-left: 135px;" onclick="if(confirm('Are you verify this request by phone?')){
                        event.preventDefault();
                        document.getElementById('status-form-{{ $table->id }}').submit();
                }else {
                    event.preventDefault();
                    }"><h5><span>Reserved</span></h5></button>
                    
                @endif
                
            </div>
            
            
        @endforeach
        {{$tables->links()}} 
    @else
        <h5>No Tables found</h5>
    @endif

@endsection
    

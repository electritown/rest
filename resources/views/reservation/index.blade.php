@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Reservations</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table id="table" class="table"  cellspacing="0" width="100%">
                            <thead class="text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Time and Date</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                              @if(count($reservations) > 0)
                                @foreach($reservations as $key=>$reservation)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->phone }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->date_and_time }}</td>
                                        <th>{{ $reservation->message }}</th>
                                        <th>
                                            @if($reservation->status == true)
                                                <span class="label label-info">Confirmed</span>
                                            @else
                                                <span class="label label-danger">not Confirmed yet</span>
                                            @endif

                                        </th>
                                        <td>{{ $reservation->created_at }}</td>
                                        <td>
                                            @if($reservation->status == false)
                                                <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.index',$reservation->id) }}" style="display: none;" method="POST">
                                                    
                                                </form>
                                                {!! Form::open(['action' => ['ReservationsController@edit', $reservation->id], 'method'=>'PUT', 'style' => 'display: inline-block']) !!}
                                                {{Form::submit('Ok', ['class' => 'btn btn-success'])}}
                                                <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Are you verifying this request by phone?')){
                                                    event.preventDefault();
                                                    document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }"><i class="material-icons">done</i></button>
                                                {!! Form::close() !!}
                                            @endif
                                            {!!Form::open(['action' => ['ReservationsController@destroy',$reservation->id], 'method' => 'POST', 'style' => 'display: inline-block'])!!}
                                             {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                             @else
                                      <p>No Reservations Found</p>
                             @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
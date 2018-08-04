@extends('layouts.app')
@section('content')

    <h3>Cart Items</h3>
    
    @if(count($cartItems)>0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>quantity</th>      
            </tr>
        </thead>
        <tbody>
                @foreach($cartItems as $cartItem)
                    <tr>
                        <td>{{$cartItem->name}}</td>
                        <td>{{$cartItem->price}}</td>
                        <td>

                            

                            {!! Form::open(['action' => ['CartsController@update', $cartItem->rowId], 'method'=>'PUT', 'style' => 'display: inline-block']) !!}
                                <input name="qty" type="number" min= "1" value="{{$cartItem->qty}}">
                                {{Form::submit('Ok', ['class' => 'btn btn-success'])}}
                            {!! Form::close() !!}
                               
                            <!-- Deleting -->
                            {!!Form::open(['action' => ['CartsController@destroy', $cartItem->rowId], 'method' => 'POST', 'style' => 'display: inline-block'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                          
                        
                    </tr>
                        <tr >
                            {{Cart::setTax($cartItem->rowId,'0.0')}}
                        </tr>
                @endforeach
                <tr>
                
                        <td>Tax: ${{Cart::tax()}}</td>
                        <td>Grand Total: ${{Cart::total()}}</td>
                        <td>Items: {{Cart::count()}}</td>
                        
                    </tr>
           
        </tbody>

    </table>
    
    @else
        <h1>There is No Orders in the Cart</h1>
    @endif
@endsection
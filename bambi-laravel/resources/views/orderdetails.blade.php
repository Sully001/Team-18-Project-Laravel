@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="">
@endsection

@section('content')
  <h1>Your Order Details</h1> 
    <table>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Size</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td><img src="/images/{{ $item['image']}}" height="80px" width="80px"></td>
            <td>{{ $item['name']}}</td>
            <td>£{{ $item['price']}}</td>
            <td>{{ $item['size']}}</td>
            <td>{{ $item['quantity']}}</td>
            <td>£{{$item['itemTotal']}}</td>
        </tr>
        @endforeach
        <tr>
            <th scope="row" colspan="5">SubTotal</th>
            <td><strong>£{{ $orderTotal }}</strong></td>
        </tr>
    </table>






@endsection
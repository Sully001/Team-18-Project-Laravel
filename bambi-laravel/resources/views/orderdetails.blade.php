@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="/css/orderdetails.css">
@endsection

@section('content')
<div class="od-contain">

<div id="od-heading">
  <h1>Order Details</h1> 
</div>

    <!-- <table>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Size</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr> -->
        <!-- @foreach ($items as $item) -->

        <!-- <tr>
            <td><img src="/images/{{ $item['image']}}" height="80px" width="80px"></td>
            <td>{{ $item['name']}}</td>
            <td>£{{ $item['price']}}</td>
            <td>{{ $item['size']}}</td>
            <td>{{ $item['quantity']}}</td>
            <td>£{{$item['itemTotal']}}</td>
        </tr> -->
    
    <div class="container-fluid my-5  d-flex  justify-content-center">
        <div class="card card-1" style="width: 65%;">
            <div class="card-header bg-white">
                <div class="media flex-sm-row flex-column-reverse justify-content-between">
                    <div class="col my-auto"> <h4 class="mb-0">Thanks for your Order, <span class="change-color">{{ auth()->user()->first_name }}</span> !</h4> </div>
                    <div class="col-auto text-center" id="bambi-logo"><img class="img-fluid my-auto align-items-center mb-0 pt-3"  src="/images/Bambi_Shoes_Logo_no-bg.png" width="115" height="115"> <p class="mb-4 pt-0 Bambi"></p></div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-between mb-3">
                    <div class="col-auto"> <h6 class="color-1 mb-0 change-color">Order Details</h6></div>
                    <div class="col-auto"> <small>Order No : {{ $loop->index + 1 }}</small></div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card card-2">
                            @foreach ($items as $item)
                            <div class="card-body">
                                <div class="media">
                                    <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="/images/{{ $item['image']}}" width="135" height="135" /> </div>
                                    <div class="media-body my-auto text-right">
                                        <div class="row  my-auto flex-column flex-md-row">
                                            <div class="col my-auto"> <h6 class="mb-0">{{ $item['name']}}</h6></div>
                                            <div class="col my-auto"> <small>Size: {{ $item['size']}}</small></div>
                                            <div class="col my-auto"> <small>Qty: {{ $item['quantity']}}</small></div>
                                            <div class="col my-auto"><h6 class="mb-0">£{{ $item['price']}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-3 ">
                                <div class="row">
                                    <div class="col-md-3 mb-3"><small>Order Status<span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                    <div class="col mt-auto">
                                        <div class="progress my-auto"> <div class="progress-bar progress-bar  rounded" style="width: 62%" role="progressbar" aria-valuenow="25" aria-valuemin="0"  aria-valuemax="100"></div> </div>
                                        <div class="media row justify-content-end ">
                                            <div class="col-auto text-right"><span> <small  class="text-right mr-sm-2"></small><i class="fa fa-circle active"></i> </span></div>
                                            <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivery</small><i class="fa fa-circle active"></i></span></div>
                                            <div class="col-auto flex-col-auto"><small  class="text-right mr-sm-2">Delivered</small><span><i class="fa fa-circle"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col">
                        <div class="row justify-content-between">
                            <div class="col-auto"><p class="mb-1 text-dark"><b>Order Details</b></p></div>
                            <div class="flex-sm-col text-right col" id="total"> <p class="mb-1"><b>Total</b></p> </div>
                            <div class="flex-sm-col col-auto"> <p class="mb-1">£{{$item['itemTotal']}}</p> </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="flex-sm-col text-right col" id="delivery"><p class="mb-1"><b>Delivery</b></p></div>
                            <div class="flex-sm-col col-auto"><p class="mb-1">Free (Standard)</p></div>
                        </div>
                    </div>
                </div>
                <div class="row invoice">
                    <div class="col" id="od-row"><p class="mb-1">Order Number: {{ $loop->index + 1 }}</p><p class="mb-1">Order Date & Time: 16th March 2023</p></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="jumbotron-fluid">
                    <div class="row justify-content-around ">
                        <div class="col-sm-auto col-auto my-auto"><img class="img-fluid my-auto align-self-center " src="/images/Bambi-Shoes-Logo-Text-only-1.png"></div>
                        <div class="col-auto my-auto" style="margin-left: 21%"><h2 class="mb-0 font-weight-bold">Subtotal:</h2></div>
                        <div class="col-auto my-auto ml-auto"><h1 class="display-3" style="font-size: 3rem;">£{{ $orderTotal }}</h1></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- @endforeach -->
        <!-- <tr>
            <th scope="row" colspan="5">SubTotal</th>
            <td><strong>£{{ $orderTotal }}</strong></td>
        </tr>
    </table> -->




</div>
@endsection
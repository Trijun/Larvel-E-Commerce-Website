@extends('navbar')

@section('banner')
<div class="flex-box w-100 py-5 my-5">

    <div class="w-75 flex-row bottom-border mb-5">
        <div class="w-75">
            <h2>My Orders</h2>
        </div>
    </div>

    <div class="order-card w-75 flex-row" >
        <div class="w-75 flex-row">
            <div class="me-5 w-25 flex-column align-middle justify-center">
                <h5>Order Id</h5>
            </div>
            <div class="flex-column w-75  justify-center">
                <h5>Content</h5>
            </div>
            
        </div>
        <div class="w-25 flex-row">
            <div class="flex-column w-50 justify-center">
                <h5>Status</h5>
            </div>
            <div class="flex-column align-middle w-50 justify-center">
                <h5>Total</h5>
            </div>
        </div>
    </div>

    @foreach ($orders as $order)
    <div class="order-card w-75 flex-row ">
        <div class="w-75 flex-row">
            <div class="me-5 w-25 flex-column align-end justify-center">
                <h6>{{$order->order_id}}</h6>
            </div>
            <div class="flex-column w-75 justify-center">
                <div class="flex-column">
                    <p class="mb-3"><strong>{{$order->name}}</strong></p>
                    <div class="flex-row align-between w-75 pe-5 me-5">
                        <p><strong>Price: </strong>{{$order->price}}</p>
                        <p><strong>Quantity: </strong>:  {{$order->quantity}}</p>
                        <p><strong>Color: </strong>:{{$order->color}}</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="w-25 flex-row">
            <div class="flex-column w-50  justify-center">
                <h6>{{$order->status}}</h6>
            </div>
            <div class="flex-column w-50 align-middle justify-center">
                <h6>{{$order->total_price}}</h6>
            </div>
        </div>
       
    </div>
    @endforeach
    
</div>
@endsection
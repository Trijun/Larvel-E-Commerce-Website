@extends('navbar')

@section('banner')

<div class="flex-box w-100 py-5 my-5">

    <div class="w-75 flex-row border-bottom mb-5">
        <div class="w-75">
            <h2>Cart Items</h2>
        </div>

        <div class="w-25 flex-box">
            <h2>Amount</h2>
        </div>
    </div>

    
    @foreach ($items as $item)
        <div class="cart-card w-75 flex-row mb-5" >
            <div class="me-5 w-25">
                <img class="cart-image" src="{{$item->gallery}}" alt="">
            </div>
            <div class="flex-column w-50">
                <h3 class="mb-3">{{$item->name}}</h3>
                <p>{{$item->description}}</p>
                <div class="flex-row mt-2">
                    <div class="w-50 flex-row">
                        <h5 class="me-3">Size :</h5> 
                        <h5> {{$item->size}} </h5>
                    </div>
                    <div class="w-50 flex-row">
                        <h5 class="me-3">Color :</h5> 
                        <h5> {{$item->color}} </h5>
                    </div>
                </div>
                <h5 class="mt-4"> Quantity : </h5>
                <div class="cart-quantity flex-row mt-2">
                    <button class="cart-buttons flex-box me-3" id="decrement">-</button>
                    <div class="quantity">
                    <h5 id="#qty">1</h5>
                    </div>
                    <button class="cart-buttons flex-box ms-3" id="increment">+</button>
                </div>
            </div>
            <div class="w-25 flex-box">
                <h4>$ {{$item->price}}</h4>
            </div>
        </div>

    @endforeach
    
    
    <div class="w-75 flex-row mt-5 border-top">
        <div class="w-75 flex-box">
            <h2>Bill</h2>
        </div>

        <div class="w-25 flex-box">
            <h2>$ 15.00</h2>
        </div>
    </div>
        
</div>


@endsection

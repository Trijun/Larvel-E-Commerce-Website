@extends('banner')

@section('product')
    <div class="hero-conatiner">
        <div class="hero">
            <div class="hero-content">
                <img class="hero-image" src="{{$products->gallery}}" alt="">
            </div>
            <div class="hero-content">
                <div class="product-content">
                    <div>
                        <h1 class="hero-title">{{$products->name}}</h1>
                        <h4 class="mt-4">{{$products->price}}<h4>
                    </div>
                  
                    <p>{{$products->description}}</p>
                    <button class="hero-button">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>
    
    @yield('advertisement')
@endsection
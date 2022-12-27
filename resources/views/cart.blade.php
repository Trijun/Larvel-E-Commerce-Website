@extends('navbar')

@section('banner')

@php
    use App\Http\Controllers\ProductController;

    $total = ProductController::totalBill();

@endphp

<div class="flex-box w-100 py-5 my-5">

    <div class="w-75 flex-row bottom-border mb-5">
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
                <form action="/updateItem" method="POST">
                    @csrf
                    <input type="hidden" name="cart_id" value="{{$item->cart_id}}">
                    <h3 class="mb-3">{{$item->name}}</h3>
                    <p>{{$item->description}}</p>
                    <div class="flex-row mt-2">
                    
                        <div class="flex-column w-25">
                            <h5 class="me-3">Size :</h5> 
                            <div class="flex-column me-4">
                                <select name="size" class="form-select mt-2" id="size">
                                    <option value="{{$item->size}}" selected  hidden>{{$item->size}}</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex-column w-25">
                            <h5 class="me-3">Color :</h5> 
                            <div class="flex-column me-4">
                                <select name="color" class=" form-select mt-2" id="color">
                                    <option value="{{$item->color}}" selected  hidden>{{$item->color}}</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="flex-column w-50">
                            <h5 class="me-3"> Quantity : </h5>
                            <select name="quantity" class="form-select mt-2 w-75" id="size">
                                <option value="{{$item->quantity}}" selected  hidden>{{$item->quantity}}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-row mt-2">
                        <div class="w-50 me-2">
                            <input type="submit" class="cart-button-confirm mt-4" value="Update Item">
                        </div>
                        <div class="w-50 me-2">
                            <a class="remove-decorations" href="/removeItem/{{$item->cart_id}}">
                                <div class="cart-button-remove mt-4 flex-box">Remove Item</div>
                            </a>
                        </div>                    
                    </div>
                </form>
            </div>
            <div class="w-25 flex-box">
                <h4>$ {{($item->price*$item->quantity)}}</h4>
            </div>
        </div>

    @endforeach
    
    
    <div class="w-75 flex-row mt-5 top-border">
        <div class="w-75 flex-row align-justify">
            <div class="pe-5">
                <a class="remove-decorations" href="/product">
                    <div class="hero-button-outlined flex-box">Continue Shopping</div>
                </a>
            </div>
            <div class="pe-5">
                <a class="remove-decorations" href="/order">
                    <div class="hero-button flex-box">Place Order</div>
                </a>
            </div>                    
        </div>
        <div class="w-25 flex-row align-center">
            <div class="w-25">
                <h3>Bill</h3>
            </div>
    
            <div class="w-25">
                <h3>$ {{$total}}</h3>
            </div>
        </div>
        
    </div>
        
</div>


<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
        ></a>
    </section>
    <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="">AZUNDI</a>
    </div>
    <!-- Copyright -->
</footer>

@endsection

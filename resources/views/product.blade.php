@extends('banner')

@section('product')

    @foreach ($products as $product)
    <div class="hero-conatiner">
        <div class="hero">
            <div class="hero-content">
                <img class="hero-image" src="{{$product->gallery}}" alt="">
            </div>
            <div class="hero-content">
                <div class="product-content">
                    <div class="mb-3">
                        <h1 class="hero-title">{{$product->name}}</h1>
                        <h4 class="mt-4">$ {{$product->price}}<h4>
                    </div>
                
                    <p>{{$product->description}}</p>
                    <div class="w-100">
                        <form action="/product" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <div class="flex-row">
                                <div class="w-60 flex-column me-4">
                                    <label for="size"><strong>Size</strong></label>
                                    <select name="size" class="form-select form-select-lg mt-3" id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div class="w-40 flex-column ">
                                    <label for="color"><strong>Color</strong></label>
                                    <select name="color" class=" form-select form-select-lg mt-3" id="color">
                                        <option value="Black">Black</option>
                                        <option value="White">White</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" class="hero-button mt-4" value="ADD TO CART">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    @yield('advertisement')
@endsection
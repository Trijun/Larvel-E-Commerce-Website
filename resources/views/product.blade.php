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
                    <div class="w-100">
                        <form action="">
                            <div class="cartForm">
                                <div class="w-60 flex-column me-4">
                                    <label for="size"><strong>Size</strong></label>
                                    <select name="size" class="form-select form-select-lg mt-3" id="size">
                                        <option value="XS">S</option>
                                        <option value="XS">M</option>
                                        <option value="XS">L</option>
                                    </select>
                                </div>
                                <div class="w-40 flex-column ">
                                    <label for="color"><strong>Color</strong></label>
                                    <select name="color" class=" form-select form-select-lg mt-3" id="color">
                                        <option value="black">black</option>
                                        <option value="white">white</option>
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
    
    @yield('advertisement')
@endsection
@extends('product')

@section('advertisement')

    <div class="ad-container">
        <div class="ad-40">
            <div class="mb-5">
                <img  class="ad-img" src="https://cdn.shopify.com/s/files/1/0518/8249/2088/files/8005847_750x.jpg?v=1642724056" alt="">
            </div>
            <div class="content content-border">
                <h1 class="content-title">
                    UNBOX.
                    WEAR.
                    LOVE.
                </h1>
            </div>
        </div>
        <div class="ad-60">
            <div class="content mb-5">
                <h1>
                    OUR MISSION IS YOU.
                </h1>
                <p class="w-75">Delivering a distinguished and dignified underwear option. Subtle yet enough to achieve a distinctive style.</p>
            </div>
            <div>
                <img class="ad-img"src="https://cdn.shopify.com/s/files/1/0518/8249/2088/files/8001262_750x.jpg?v=1642724085" alt="">        
            </div>
        </div>
    </div>

    <div class="ad-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0518/8249/2088/articles/FRESH_1500x.jpg?v=1621974563" alt="Third slide">          
            </div>
            <div class="carousel-item active">
            <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0518/8249/2088/articles/2_1500x.jpg?v=1623731124" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100"  src="https://cdn.shopify.com/s/files/1/0518/8249/2088/files/IMG_1984_1500x.jpg?v=1642727139"alt="First slide">         
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <div class="content mb-5">
        <h1 class="m-3">
            AZUNDI Boxer-Briefs
        </h1>
        <p class="w-75 mb-5">An ode to classic men’s boxer-briefs. Crafted with the finest fabric for the most pleasurable wearing experience, featuring a supportive yet silky waistband with our logo hand-pressed on each pair. 95% Modal 5% Elastane. </p>
        <button class="hero-button">SHOP</button>
    </div>

    @yield('features')

@endsection
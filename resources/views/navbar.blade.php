@extends('layout')
@section('content')

    <nav class="navbar bg-dark">
        <div class="w-100">
            <ul class="navigation space-between nav-top ">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Collection</a>
                </li>
                <li>
                    <a class="navbar-brand" href="#">
                        <img src="https://cdn.shopify.com/s/files/1/0518/8249/2088/files/logo_140x.png?v=1613713768" alt="Logo" width="auto" height="24" class="d-inline-block align-text-top">
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" >About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Blog</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="w-100">
        <div class="navigation space-between">
            <h3><strong>#AZUNDI,</strong></h3>
            <div class="space-between nav-bottom">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-lg btn-outline" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <button class="btn btn-lg btn-outline" ><i class="fa-solid fa-cart-shopping"></i></button>    
            </div>
        </div>
    </div>
    @yield('product')    
@endsection
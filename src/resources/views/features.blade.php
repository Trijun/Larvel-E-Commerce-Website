@extends('advertisement')

@section('features')
    <div class="feature-container">

        <div class="w-50 feature-left">
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/feather-icon.png" alt="feather icon">
                </div>
                <p class="feature-content">Ultrasoft and durable waistband</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/doublelayer-icon.png" alt="double layer icon">
                </div>
                <p class="feature-content">Double layered contoured pouch</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/shipping-icon.png" alt="shipping icon">
                </div>
                <p class="feature-content">Complimentary Shipping </p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/credit-icon.png" alt="credit icon">
                </div>
                <p class="feature-content">Credit card checkout</p>
            </div>
            
        </div>
        <div class="w-50 feature-right">
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/antibacterial-icon.png" alt="antibacterial icon">
                </div>
                <p class="feature-content">Anti bacterial properties</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/handpressed-icon.png" alt="handpressed icon">
                </div>
                <p class="feature-content">Hand Pressed logo</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/easyreturn-icon.png" alt="easy return icon">
                </div>
                <p class="feature-content">7 day Easy return</p>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img class="f-icon" src="/icons/membership-icon.png" alt="membership icon">
                </div>
                <p class="feature-content">Membership rewards</p>
            </div>
        </div>

    </div>

    @yield('reviews')
@endsection
@extends('navbar')

@section('banner')
<div class="flex-box w-100 py-5 my-5">

    
    <div class="order-card w-75 px-5" >
        <div class="card text-center">
            <div class="card-header">
              AZUNDI
            </div>
            <div class="card-body mt-4">
              <h3 class="card-title my-4">Your Order is Completed</h3>
              <div class="flex-box">
                <h5 class="card-text mb-4"><i>The Order ID for your purchase is {{$order_id}}.</i> </h5>
                <div class="w-75">
                    <p class="content"> We'll make sure to keep you updated. You can check out your order status by pressing the button down below.</p>
                </div>
                <a class="remove-decorations" href="/my-orders"><div class="cart-button-remove flex-box">My Orders</div></a>
              </div>
            </div>
            <div class="card-footer text-muted">
                DEFINED BY DESIGN
            </div>
          </div>
    </div>
    
</div>



@endsection
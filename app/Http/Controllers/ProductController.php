<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    
    function index()
    {
        $products = Product::all();
        return view('footer',['products'=>$products]);
      
    }

    function store(Request $req)
    {
        error_log($req->session()->get('user'));
        if($req->session()->has('user')){

            $cart = new Cart;

            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->get('product_id');
            $cart->size = $req->get('size');
            $cart->color = $req->get('color');
            $cart->save();
            return redirect('/product');
        }
        else{
            return redirect('/login');
        }        
    }

    function showCart(){
        $user_id=Session::get('user')['id'];

        if(Cart::where('user_id',$user_id)->count()==0){
            return view('/product');
        }
        else{
            $items = Cart::join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user_id)
            ->select('*')
            ->get();
    
            return view('cart',['items'=>$items]);
        }
    }

    static function cartItem()
    {
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
}

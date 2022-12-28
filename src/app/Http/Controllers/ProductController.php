<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderContent;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{

    function index()
    {
        $products = Product::all();
        return view('footer',['products'=>$products]);
      
    }

    function store(Request $req)
    {
        if($req->session()->has('user'))
        {

            $cart = new Cart;

            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->get('product_id');
            $cart->size = $req->get('size');
            $cart->color = $req->get('color');
            $cart->quantity = $req->get('quantity');
            $cart->save();
            return redirect('/product');
        }
        else
        {
            return redirect('/login');
        }        
    }

    static function cartItem()
    {
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }
   
    static function totalBill()
    {
        $user_id = Session::get('user')['id'];
        $total=0;
        $items = Cart::where('user_id',$user_id)->get();
        foreach($items as $item){
            $product=Product::find($item->product_id);
            $total+=($item->quantity*$product->price);
        }
        return $total;
    }

    function showCart()
    {   
        if(Session::has('user')){
            $total = ProductController::cartItem();
            if($total==0){
                return redirect("/product")->with('status',"No items");
            }
            else{
                $user_id=Session::get('user')['id'];
                $items = Cart::join('products','carts.product_id','=','products.id')
                ->where('carts.user_id',$user_id)
                ->select('*','carts.id as cart_id')
                ->get();
        
                return view('cart',['items'=>$items]);
            }
        }
        else{
            return redirect('/login');
        }
       
    }

    
    function removeCartItem($id)
    {
        Cart::destroy($id);
        return redirect('/cart');

    }

    function updateCartItem(Request $req)
    {
        $items = Cart::find($req->get('cart_id'));
        $items->size = $req->get('size');
        $items->color = $req->get('color');
        $items->quantity = $req->get('quantity');

        $items->update();
        return redirect('/cart');
    }

    function order()
    {       
        $user_id=Session::get('user')['id'];
        if(ProductController::cartItem() == 0){
            return redirect('/product');
        }
        else
        {
            
            $items = Cart::where('user_id',$user_id)->get();

            $order = new Order;
            $order->user_id = $user_id;
            $order->total_items =  ProductController::cartItem();
            $order->total_price = ProductController::totalBill();
            $order->status = "Order Placed";
            $order->save();
    
            foreach($items as $item)
            {
                $orderContent = new OrderContent;
                $orderContent->order_id = $order->id;
                $orderContent->product_id = $item->product_id;
                $orderContent->size = $item->size;
                $orderContent->color = $item->color;
                $orderContent->quantity = $item->quantity;
                $orderContent->save();
                Cart::where('user_id',$user_id)->delete();
            }

            return view('purchased',['order_id'=>$order->id]);
        }            
    }

    function showorders()
    {
        $user_id=Session::get('user')['id'];
        $orders = Order::join('order_contents','orders.id','=','order_contents.order_id')
            ->join('products','order_contents.product_id','=','products.id')
            ->where('orders.user_id',$user_id)
            ->select('*')
            ->get();

        return view('order',['orders'=>$orders]);
    }
}
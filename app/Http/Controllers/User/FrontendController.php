<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function home(){
        $products = product::all();
        return view('user.home', [
            'products' => $products
        ]);
    }

    public function product_detail(Request $request){
        $products = product::find($request -> id);
        return view('user.product.product_detail', [
            'product' => $products
        ]);
    }

    public function cart_add(Request $request){
        $product_id = $request -> product_id;
        $product_qty =$request -> product_qty;
        if(is_null(Session::get('cart')))
        {
            Session::put('cart', [
                $product_id => $product_qty
            ]);
            return redirect('/cart');
        }else{
            $cart = Session::get('cart');
            if(Arr::exists($cart, $product_id)){
                $cart[$product_id] = $cart[$product_id] + $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');

            }else{
                $cart[$product_id] = $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');   
            }
        }
    }

    public function show_cart(Request $request){
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = product::whereIn('id', $product_id) -> get();
        return view('user.cart.cart', [
            'products' => $products
        ]);
    }
}

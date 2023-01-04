<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cart_items = Cart::all();
//         dd($cart_items);
        return response()->json($cart_items);
    }

    public function addToCart(Request $request)
    {
        $cart_items = Cart::create($request->all());
        return response()->json($cart_items);
    }

    public function updateCart(Request $request, $id)
    {
        $cart_item = Cart::find($id);
        if($cart_item) {
            $cart_item->quantity =  $request->quantity;
            $cart_item->price =  $request->price;
            $cart_item->update();
            return response()->json($cart_item);
        }
        return response()->json(["message" => "Item Not Found"]);
    }

    public function removeCart($id) {
        $cart_item = Cart::find($id);
        if($cart_item) {
        $cart_item->delete();
        return response()->json(Cart::all());
        }
        return response()->json(["message" => "Item Not Found"]);
    }
}

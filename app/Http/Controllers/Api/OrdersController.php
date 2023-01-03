<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index() {
        $orders = Orders::all();
        return response()->json($orders);
    }

    public function view($id){
        $orders = Orders::where('id', $id)->first();
        if($orders) {
        return response()->json($orders);
        }
        return response()->json(["message" => "Order Not Found"]);
    }

    public function update(Request $request, $id)
    {
        $order = Orders::find($id);
        if($order) {
            $order->status = $request->status;
            $order->update();
            return response()->json($order);
        }
        return response()->json(["message" => "Order Not Found"]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrdersController extends Controller
{
    //
    public function insert($item_code)
    {
        //
        $order = new Order;
        $order->id_user = Auth::user()->name;
        $order->item_code = $item_code;
        $order->save();
    }

    public function show()
    {
        //
        $orders = Order::all()->where('name', Auth::user()->name)->pluck('item_code');
        $address = User::all()->where('name', Auth::user()->name)->pluck('address')->first();
        $max = sizeof($orders);
        $products = array();
        $prices = array();
        for ($i = 0; $i < $max; $i++) {
            $products[] = Product::all()->where('item_code', $orders[$i])->first();
            $prices[] = Product::all()->where('item_code', $orders[$i])->pluck('price')->first();
        };

        $total = array_sum($prices);
        return view('pages/cart', compact("products", "total", "address"));
    }
}

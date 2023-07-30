<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getCart()
    {
        $cartItems = DB::table('carts')
            ->select('id', 'quantity', 'name', 'price', 'image', 'color', 'size', 'total')
            ->get();
        $totalCart = DB::table('carts')->sum('total');
        return view('client.pages.cart', compact(['cartItems', 'totalCart']));
    }

    public function addCart(Request $request)
    {
        DB::table('carts')->insert([
            'quantity' => $request->input('quantity'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'total' => $request->input('price') * $request->input('quantity')
        ]);
        return redirect()->route('cart');
    }

    public function removeCart($id)
    {
        DB::table('carts')->where('id', $id)->delete();
        return redirect()->route('cart');
    }
}

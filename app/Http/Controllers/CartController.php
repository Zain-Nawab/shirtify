<?php

namespace App\Http\Controllers;

use App\Models\Shirt;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function index(){
        
        $cart = session()->get('cart', []);

        return view('cart.index');
    }

    public function add(Request $request, $id){
        
        $product = Shirt::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image_path,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Successfully Added To Cart');

    }

    public function remove(Request $request, $id){

        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('remove', "Cart Removed Successfully");
    }

    public function clear(){
        $cart = [];
        session()->put('cart', $cart);
        return redirect()->back()->with('clear', " All Cart Clear Successfully");
    }
}

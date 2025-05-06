<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shirt;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public function index(Request $request ) {

        $category_name = $request->query('category');

        if ($category_name) {
            $category = Category::where('name', $category_name)->first();
            $products = Shirt::where("category_id", $category->id)->latest()->get();
        } else {
            $products = Shirt::latest()->get();
        }
        return view('blog.index' , ['products' => $products , 'category' =>$category_name]);
    }
}

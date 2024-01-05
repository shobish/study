<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        
        $products=Product::all();
       
        return response()->json($products);
        
    }
   

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        $attributes=$request->all();
        $products=Product::create($attributes);
      
        return response()->json($products);

       
    }
    
    public function destroy(Product $product ,Request $request )
    {
        $product->delete();
        return response()->json('deleted successfully');
    }

    public function update(Product $product, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
        ]);
        $attributes = $request->all();
      
       
        
        $product->update($attributes);

        return response()->json(['message'=>'updated successfully', 'product'=>$product]);
    }
}
   

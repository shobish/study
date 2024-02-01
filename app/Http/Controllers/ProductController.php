<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        
        $products=Product::all();

        return view('product.product', compact('products'));
        
    }
   

    public function create(Request $request)
    {
      
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'description' => 'required',
        ]);
        $attributes=$request->all();
        $products=Product::create($attributes);

        return redirect()->back();

       
    }
    
    public function destroy(Product $product ,Request $request )
    {
        
        $product->delete();
        return response()->json('deleted successfully');
    }
    public function show(Product $product)
    {
        return response()->json([
            'status' => 200,
            'product' => $product,
        ]);
    }


    public function update(Product $product, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'description' => 'required',
        ]);
        $attributes = $request->all();
        $product->update($attributes);

        return response()->json(['message' => 'updated successfully', 'product' => $product]);
    }

    public function searchProduct(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%' .  $request->input('q') . '%')->get();
        return view('dashboard', compact('products'));
    }
}
   

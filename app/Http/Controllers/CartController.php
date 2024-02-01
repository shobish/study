<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id ,Request $request){

        $attribute = $request->all();        
        $cart_product=new CartProduct;
        $cart_product->product_id=$attribute['product_id'];
        $cart_product->cart_id=$id;
        $cart_product->qty = $attribute['qty'];
        $cart_product->save();

        return response()->json(['message' => 'product list added',
           
        ]);
    }

    public function cartListPrice($id){
        $cart_products = CartProduct::where('cart_id', $id)->with('product')->get();
        $total_price = 0;
        $products = [];

        foreach ($cart_products as $cart_product) {
            // Check if the product exists
            if ($cart_product->product) {
                $product_price = $cart_product->product->price;
                $product_qty = $cart_product->qty;
                $total_product_price = $product_price * $product_qty;
                $total_price += $total_product_price;

                // Include product information in the response
                $products[] = [
                    'product_id' => $cart_product->product->id,
                    'product_name' => $cart_product->product->name,
                    'product_price' => $cart_product->product->price,
                    'quantity' => $product_qty,
                    'total_product_price' => $total_product_price,
                ];
            }
        }
        $discount_percentage = 10;
        $discount = ($total_price * $discount_percentage) / 100;
        $final_price = $total_price - $discount;
        // return response()->json([
        //     'message' => 'product list',
        //     'totalPrice' => $total_price,
        //     'products' => $cart_products
        // ]);
        return view('cart.cart', compact('cart_products',  'products'));
    }

    public function viewBill($id)
    {
        $cart_products = CartProduct::where('cart_id', $id)->get();
        $total_price = 0;

        foreach ($cart_products as $cart_product) {
            $product_price = $cart_product->product->price;           
            $product_qty = $cart_product->qty;
            $total_product_price = $product_price * $product_qty;
            $total_price += $total_product_price;            
        }

        $discount_percentage = 10;
        $discount = ($total_price * $discount_percentage) / 100;
        $final_price = $total_price - $discount;
        return response()->json([
            'message' => 'product list',
            'totalPrice' => $total_price,
            'products' => $cart_products
        ]);
        // return view('cart.cart', compact('cart_products', 'total_price', 'final_price', 'discount_percentage'));
       
    }
    public function distroyCart($id)
    {
        dd('asdsadas');
        $cart_products = CartProduct::where('cart_id', $id)->get();
        $cart_products->each->delete();

        return response()->json([
            'message' => 'delete successfully',
            
        ]);
    }
        
    
}

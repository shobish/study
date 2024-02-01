<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
  public function index(){
    $products = Product::all();
    
    if(Auth::check()){
      return view('dashboard', compact('products'));
    }
    
    return redirect()->to('/login');
    
  }
}

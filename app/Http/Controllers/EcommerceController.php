<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class EcommerceController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        return view('welcome', compact('category', 'product'));
    }


    
    public function createOrder(Request $request){
       try {
        // Masih Kosong
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error','Error' . $e->getMessage());
        }
    }

    public function myOrders(){

    }

    public function orderDetail($id){

    }

    public function updateQuantity(Request $request){

    }

    public function removeItem(Request $request){
        
    }

    public function checkOut(Request $request){

    }
}

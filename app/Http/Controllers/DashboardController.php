<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'totalProducts' => Product::count(),
            'totalCategories' => Category::count(),
            'totalUsers' => User::count(),
            'totalOrders' => 100
        ];
        return view('admin.index', compact('data'));
    }
}

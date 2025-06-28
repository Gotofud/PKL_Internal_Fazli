<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class EcommerceController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $product = Product::all();
        return view('welcome', compact('category', 'product'));
    }

    public function createOrder(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $existingPendingOrder = Order::where('user_id', Auth::id())
                    ->where('status', 'pending')
                    ->latest()
                    ->first();

                    // Jika tidak ada order pending, buat order baru
                    // jika ada, gunakan order yang sudah ada

                    if (!$existingPendingOrder) {
                        $order = Order::create([
                            'user_id' => Auth::id(),
                            'total_harga' => 0,
                            'status' => 'pending',
                        ]);
                    } else {
                        $order = $existingPendingOrder;
                    }

                    $totalHarga = 0;

                    if ($existingPendingOrder) {
                        $totalHarga = $existingPendingOrder->total_harga;
                    }

                    foreach ($request->items as $item){
                        $product = Product::findOrFail($item['product_id']);
                        $subtotal = $product->harga * $item['quantity'];

                        $existingItem = OrderProduct::where('order_id',$order->id)
                        ->where('product_id', $product->id)
                        ->first();

                        if ($existingItem) {
                            $newQuantity = $existingItem->quantity + $item['quantity'];
                            $newSubTotal = $product->harga * $newQuantity;

                            $existingItem->quantity = $newQuantity;
                            $existingItem->subtotal = $newSubTotal;
                            $existingItem->save();

                            $totalHarga = $totalHarga - $existingItem->subtotal + $newSubTotal;
                            // 18.000 - 18.000 + 21.000
                        } else {
                            OrderProduct::create([
                                'order_id' => $order->id,
                                'product_id' => $product->id,
                                'quantity' => $item['quantity'],
                                'subtotal' => $subtotal,
                            ]);

                            // 4.000 = 20.000 Le mineral = 5 od=2  
                            // 5.000 = 30.000 pop = 6 od=2
                            // 10.000 = 80.000 Baygon = 8 od=2
                            // 130.000 -> kondisi else
                            // 40.000 Softex 1 pack od=2
                            // 170.000 -> kondisi if

                            $totalHarga += $subtotal;
                        }
                    }

                    $order->total_harga = $totalHarga;
                    $order->save();
            });

                $productName = Product::findOrFail($request->items[0]['product_id'])->name;
                $quantity = $request->items[0]['quantity'];
            return redirect()->route('home')->with('success','Berhasil ditambahkan ke keranjang');
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Error' . $e->getMessage());
        }
    }

    public function myOrders()
    {

    }

    public function orderDetail($id)
    {

    }

    public function updateQuantity(Request $request)
    {

    }

    public function removeItem(Request $request)
    {

    }

    public function checkOut(Request $request)
    {

    }
}

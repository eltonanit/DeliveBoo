<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function createOrder(Request $request)
    {
        
        $request->validate([
            'nonce' => 'required|string', 
            'amount' => 'required|numeric', 
            'cart' => 'required|array',
            'customer_name' => 'required|string|max:120',
            'customer_surname' => 'required|string|max:120',
            'shipping_address' => 'required|string|max:120',
            'total_items' => 'required|integer',
        ]);

     
        $order = new Order();
        $order->customer_name = $request->input('customer_name');
        $order->customer_surname = $request->input('customer_surname');
        $order->shipping_address = $request->input('shipping_address');
        $order->total_price = $request->input('amount');
        $order->total_items = $request->input('total_items');
        $order->save();

        foreach ($request->input('cart') as $dish) {
            OrderDish::create([
                'order_id' => $order->id,
                'dish_id' => $dish['id'], 
                'quantity' => $dish['quantity'], 
            ]);
        }

        return response()->json([
            'success' => true,
            'orderId' => $order->id,
        ]);
    }

    // Metodo per ottenere gli ordini
    public function getOrders()
    {
        $orders = Order::with('orderDishes.dish')->get();

        $totalOrders = $orders->count();
        $totalRevenue = $orders->sum('total_price');

        return response()->json([
            'orders' => $orders,
            'totalOrders' => $totalOrders,
            'totalRevenue' => $totalRevenue,
        ]);
    }

    public function showOrders($restaurantId)
    {
        
        $restaurant = Restaurant::findOrFail($restaurantId);
    
        
        $orders = Order::whereHas('orderDishes.dish.restaurant', function($query) use ($restaurantId) {
            $query->where('restaurant_id', $restaurantId);
        })
        ->with('orderDishes.dish')  
        ->get();
    
       
        return view('admin.orders.index', compact('restaurant', 'orders'));
    }
}
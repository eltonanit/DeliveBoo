<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Metodo per creare un ordine
    public function createOrder(Request $request)
    {
        // Valida la richiesta
        $request->validate([
            'nonce' => 'required|string', 
            'amount' => 'required|numeric', 
            'cart' => 'required|array',
            'customer_name' => 'required|string|max:120',
            'customer_surname' => 'required|string|max:120',
            'shipping_address' => 'required|string|max:120',
            'total_items' => 'required|integer',
        ]);

        // Crea un nuovo ordine
        $order = new Order();
        $order->customer_name = $request->input('customer_name');
        $order->customer_surname = $request->input('customer_surname');
        $order->shipping_address = $request->input('shipping_address');
        $order->total_price = $request->input('amount');
        $order->total_items = $request->input('total_items');
        $order->save();

        // Aggiungi i piatti all'ordine
        foreach ($request->input('cart') as $dish) {
            // Verifica la presenza della quantità, se non c'è imposta a 1
            $quantity = isset($dish['quantity']) ? $dish['quantity'] : 1;
        
            // Inserisci il piatto nella tabella order_dishes
            OrderDish::create([
                'order_id' => $order->id,  // ID dell'ordine
                'dish_id' => $dish['id'],  // ID del piatto
                'quantity' => $quantity,   // Quantità
            ]);
        }

        return response()->json([
            'success' => true,
            'orderId' => $order->id,
        ]);
    }

    // Nuovo metodo saveOrder
    public function saveOrder(Request $request)
    {
        // Valida la richiesta
        $request->validate([
            'customer_name' => 'required|string|max:120',
            'customer_surname' => 'required|string|max:120',
            'shipping_address' => 'required|string|max:120',
            'amount' => 'required|numeric', 
            'cart' => 'required|array', // Assicurati che la richiesta contenga i piatti
            'total_items' => 'required|integer',
        ]);

        // Crea l'ordine
        $order = new Order();
        $order->customer_name = $request->input('customer_name');
        $order->customer_surname = $request->input('customer_surname');
        $order->shipping_address = $request->input('shipping_address');
        $order->total_price = $request->input('amount');
        $order->total_items = $request->input('total_items');
        $order->save();

        // Aggiungi i piatti all'ordine
        foreach ($request->input('cart') as $dish) {
            OrderDish::create([
                'order_id' => $order->id,
                'dish_id' => $dish['id'],
                'quantity' => $dish['quantity'], 
            ]);
        }

        // Restituisci la risposta con l'ID dell'ordine
        return response()->json([
            'success' => true,
            'orderId' => $order->id,
        ], 201);
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

    // Metodo per visualizzare gli ordini di un ristorante
    public function showOrders($restaurantId)
{
    // Assicurati che il ristoratore abbia accesso agli ordini di questo ristorante
    $restaurant = Restaurant::findOrFail($restaurantId);
    
    // Ottieni gli ordini relativi ai piatti di questo ristorante
    $orders = Order::whereHas('orderDishes.dish.restaurant', function($query) use ($restaurantId) {
        $query->where('restaurant_id', $restaurantId);
    })
    ->with('orderDishes.dish')  // Include i piatti associati agli ordini
    ->get();

    // Raggruppa gli ordini per data (senza orario)
    $ordersGroupedByDate = $orders->groupBy(function($date) {
        return \Carbon\Carbon::parse($date->created_at)->format('M Y'); // Solo la data, senza orario
    });

    // Calcola il totale per ogni data (somma dei 'total_price' per ogni gruppo)
    $totalsByDate = $ordersGroupedByDate->map(function($group) {
        return $group->sum('total_price'); // Somma totale per ogni data
    });

    // Calcola il numero di ordini per ogni data
    $ordersCountByDate = $ordersGroupedByDate->map(function($group) {
        return $group->count(); // Numero di ordini per ogni data
    });

    // Calcola la distribuzione degli ordini per piatto (per quantità)
    $dishesCount = $orders->flatMap(function($order) {
        return $order->orderDishes; // Estrai tutti i piatti da ogni ordine
    })->groupBy('dish.name')->map(function($group) {
        return $group->count(); // Conta la quantità di ogni piatto ordinato
    });

    // Calcola la distribuzione degli ordini per piatto (per prezzo)
    $dishesTotalPrice = $orders->flatMap(function($order) {
        return $order->orderDishes; // Estrai tutti i piatti da ogni ordine
    })->groupBy('dish.name')->map(function($group) {
        return $group->sum('total_price'); // Somma il totale degli ordini per piatto
    });

    // Restituisci la vista con gli ordini e le statistiche
    return view('admin.orders.index', compact('restaurant', 'orders', 'ordersGroupedByDate', 'totalsByDate', 'ordersCountByDate', 'dishesCount', 'dishesTotalPrice'));
}

    
}
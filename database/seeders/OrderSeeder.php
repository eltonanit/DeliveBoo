<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = config('db_deliveboo.orders');
        foreach ($orders as $order) {
            $new_order = new Order();
            $new_order->customer_name = $order['customer_name'];
            $new_order->customer_surname = $order['customer_surname'];
            $new_order->shipping_address = $order['shipping_address'];
            $new_order->total_price = $order['total_price'];
            $new_order->total_items = $order['total_items'];

            $new_order->save();
        }
    }
}

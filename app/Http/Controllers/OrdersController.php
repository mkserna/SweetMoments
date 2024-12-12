<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Order::with('products', 'user', 'status')->get();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('products', 'user', 'status')->findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        foreach ($request->productos as $producto) {
            $order->products()->attach($producto['id'], ['quantity' => $producto['quantity']]);
        }
        return redirect()->route('orders.index')->with('success', 'Pedido creado exitosamente');
    }

    public function edit($id)
    {
        $order = Order::with('products')->findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        $order->products()->detach();
        foreach ($request->productos as $producto) {
            $order->products()->attach($producto['id'], ['quantity' => $producto['quantity']]);
        }
        return redirect()->route('orders.index')->with('success', 'Pedido actualizado exitosamente');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->products()->detach();
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pedido eliminado exitosamente');
    }
}

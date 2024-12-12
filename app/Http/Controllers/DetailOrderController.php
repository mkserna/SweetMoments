<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailOrderController extends Controller
{
    // Ver el carrito
    public function index(Request $request)
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Agregar un producto al carrito
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        // Si el carrito ya tiene el producto, aumenta la cantidad
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto agregado al carrito!');
    }

    // Eliminar un producto del carrito
    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Producto eliminado del carrito!');
    }

    // Actualizar la cantidad de un producto en el carrito
    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Cantidad de producto actualizada!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart()
    {
        // Retrieve cart from session, default to empty array if it doesn't exist
        $cart = session()->get('cart', []);
        return view('cart.view', compact('cart'));
    }

    // Add Product to Cart
    public function addToCart(Request $request)
    {
        // Retrieve the product details using the product ID
        $product = Product::find($request->product_id);

        // Get the cart from the session (or an empty array if no cart exists)
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$product->id])) {
            // If the product is already in the cart, increase its quantity
            $cart[$product->id]['quantity']++;
        } else {
            // If the product is not in the cart, add it with quantity 1
            $cart[$product->id] = [
                'name' => $product->pname,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }

        // Store the updated cart back into the session
        session()->put('cart', $cart);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Remove Product from Cart
    public function removeFromCart($id)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // If the product exists in the cart, remove it
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart); // Update session data
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    // Update Product Quantity in Cart
    public function updateCart(Request $request, $id)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Check if the product is in the cart and update the quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart); // Update session data
        }

        return redirect()->back()->with('success', 'Cart updated!');
    }
}

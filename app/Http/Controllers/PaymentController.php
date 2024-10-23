<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('payments.show', compact('order')); // Show payment options
    }

    public function store(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        // If the user selects online payment, handle the payment gateway logic here
        $paymentMethod = $request->method == 'online' ? 'online' : 'COD';

        // Create a payment record
        Payment::create([
            'order_id' => $order->id,
            'user_id' => auth()->id(),
            'amount' => $order->total_amount,
            'method' => $paymentMethod,
            'status' => $paymentMethod == 'online' ? 'paid' : 'pending',  // Mark as paid for online or pending for COD
        ]);

        // Update order status based on payment
        $order->update([
            'status' => $paymentMethod == 'online' ? 'confirmed' : 'pending_payment'
        ]);

        if ($paymentMethod == 'online') {
            // Implement your payment gateway logic here
            // Example: redirect to payment gateway
        }
        if ($paymentMethod == 'COD') {
            // Mark the payment as 'pending'
            $order->update(['status' => 'pending_delivery']);
        }


        return redirect()->route('orders.show', $order->id)->with('success', 'Payment completed successfully.');
    }
}

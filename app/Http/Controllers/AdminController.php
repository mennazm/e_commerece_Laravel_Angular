<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function viewUsersWithOrders()
    {
        $users = User::with('orders')->get();
        return view('admin.usersWithOrders', compact('users'));
    }

    public function viewOrders()
    {
        $orders = Order::with('user', 'products')->get();
        return view('admin.orderAdmin', compact('orders'));
    }


        public function updateOrderStatus(Request $request, Order $order)
        {
            $request->validate([
                'State' => 'required|in:Pending,Accepted,Rejected',
            ]);
    
            $order->State = $request->State;
            $order->save();
    
            return redirect()->route('admin.orders.index')->with('success', 'Order status updated successfully.');
        }
    
    }

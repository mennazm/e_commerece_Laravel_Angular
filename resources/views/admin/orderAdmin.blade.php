@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Orders</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Total Price</th>
                <th>Products</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->Date }}</td>
                <td>{{ $order->Total_price }}</td>
                <td>
                    <ul>
                    @foreach($order->products as $product)
                        <li>
                            {{ $product->Title }} - ${{ $product->pivot->Price }} - Quantity: {{ $product->pivot->Quantity }}
                        </li>
                    @endforeach
                    </ul>
                </td>
                <td>{{ $order->State }}</td>
                <td>
                    <form action="{{ route('admin.orders.update', $order->Id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <select name="State" onchange="this.form.submit()">
                            <option value="Pending" {{ $order->State == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Accepted" {{ $order->State == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                            <option value="Rejected" {{ $order->State == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

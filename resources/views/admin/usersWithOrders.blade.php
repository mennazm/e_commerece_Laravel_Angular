<!DOCTYPE html>
<html>
<head>
    <title>Users and Their Orders</title>
</head>
<body>
    <h1>Users and Their Orders</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Orders</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->Id }}</td>
                    <td>{{ $user->Username }}</td>
                    <td>{{ $user->Email }}</td>
                    <td>
                        <ul>
                            @foreach ($user->orders as $order)
                                <li>
                                    Order ID: {{ $order->id }} <br>
                                    Date: {{ $order->Date }} <br>
                                    Total Price: {{ $order->Total_price }} <br>
                                    State: {{ $order->State }}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

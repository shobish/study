@extends('layout.default')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        div {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
        }
    </style>
<div>
        <h2>Invoice</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price per Unit</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart_products as $index => $cart_product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $cart_product->product->name }}</td>
                         <td>{{ $cart_product->product->price }}</td>
                        <td>{{ $cart_product->qty }}</td>
                        <td>{{ $cart_product->product->price * $cart_product->qty }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total Price: {{ $total_price }}</p>
        <p>Discount: {{ $discount_percentage }}%</p>
        <p>Total Payable Amount: {{ $final_price }}</p>
    </div>
    
    <a href="'distroy/'{{$cart_product->cart_id}}">clear Cart</a>
@stop
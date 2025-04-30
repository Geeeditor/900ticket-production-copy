<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        .total-cost {
            font-weight: bold;
            color: #d9534f; /* Bootstrap danger color */
        }
    </style>
</head>
<body>
    <h4>Party Ticket Payment Confirmation</h4>

    <p>Hello {{$first_name}},</p>
    <p>Thank you for your payment. Below are the details of your transaction:</p>

    <h4>Order Information</h4>
    <ul>
        <li><strong>Receipt Number:</strong> {{ $receipt }}</li>
        <li><strong>Transaction status:</strong> {{ $status }}</li>
        <li><strong>Mode of Payment:</strong>
            <span style="text-transform: uppercase;">
                {{ $mode_of_payment }}
            </span>
        </li>
        <li><strong>Party Ticket Title:</strong> {{ $product_name }}</li>
        <li><strong>Purchased Ticket:</strong>
           <li style="font-size: 70%; ">
            @if (isset($product_price[0]) && $product_price[0] !== 0 && $product_price[0] !== "")
                <ul>
                    Regular Ticket: {{ number_format($product_price[0], 2) }} (unit: {{ $product_quantity[0] ?? 0 }})
                </ul>
            @endif

            @if (isset($product_price[1]) && $product_price[1] !== 0 && $product_price[1] !== "")
                <ul>
                    VIP Ticket: {{ number_format($product_price[1], 2) }} (unit: {{ $product_quantity[1] ?? 0 }})
                </ul>
            @endif

            @if (isset($product_price[2]) && $product_price[2] !== 0 && $product_price[2] !== "")
                <ul>
                    VVIP Ticket: {{ number_format($product_price[2], 2) }} (unit: {{ $product_quantity[2] ?? 0 }})
                </ul>
            @endif
            </li>
        </li>

        </li>
        {{-- <li><strong>Product Quantity:</strong>
            @foreach ($product_quantity as $quantity)
                <li>x {{ $quantity }}</li>
             @endforeach</li> --}}
        <li><strong>Total Ticket Quantity:</strong> {{ $product_total_quantity }}</li>
        <li class="total-cost"><strong>Total Cost:</strong> NGN {{ number_format($product_total_cost, 2) }}</li>
        <li><strong>Category:</strong> {{ $category }}</li>
        <li><strong>Order Date:</strong> {{ \Carbon\Carbon::parse($product_order_date)->format('d M Y, H:i') }}</li>
    </ul>

    <p>We appreciate your business and look forward to serving you again!</p>
</body>
</html>
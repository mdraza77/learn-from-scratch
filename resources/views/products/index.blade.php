<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background: #0d6efd;
            color: #fff;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background: #f8f9fa;
        }

        tr:hover {
            background: #e9ecef;
        }

        td {
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Created At</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ucfirst($product->name) ?? 'N/A' }}</td>
                <td>{{ $product->price ?? 'N/A' }}</td>
                <td>{{ Carbon\Carbon::parse($product->created_at)->format('d M, Y h:i:s A') }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

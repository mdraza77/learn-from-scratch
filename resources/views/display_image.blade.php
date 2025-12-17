<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image List</title>
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
            <th>Image</th>
            <th>Path</th>
            <th>Created At</th>
        </tr>
        @foreach ($images as $image)
            <tr>
                <td>
                    <img src="{{ asset('storage/uploads/' . $image->path) }}" alt="Image" width="80">
                </td>
                <td>{{ $image->path ?? 'N/A' }}</td>
                <td>{{ Carbon\Carbon::parse($image->created_at)->format('d M, Y H:i A') }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

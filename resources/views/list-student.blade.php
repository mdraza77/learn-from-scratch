<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Students</title>
    <style>
        .actions {
            display: flex;
            padding: 5px;
            margin: 2px;
            margin-right: 4px;
            gap: 5px;
        }

        .btn {
            margin-top: 10px;
            margin-bottom: 10px;
            width: 50px;
            border: 1px solid black;
            padding: 5px;
            text-align: center;
            background-color: green;
        }

        .btn-link {
            text-decoration: none;
            color: white;

        }

        button {
            outline: none;
            background: none;
            border: none;
        }
    </style>
</head>

<body>
    <form action="{{ route('students.search') }}" method="get">
        <input type="text" value="{{ $searchValue ?? '' }}" name="search" id="" placeholder="Search...">
        <button class="btn btn-link">Search</button>
    </form>
    <div class="btn">
        <a class="btn-link" href="{{ route('students.createForm') }}">Create</a>
    </div>
    <table border="3">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ Carbon\Carbon::parse($student->created_at)->format('d M Y h:i A') }}</td>
                <td class="actions">
                    <div class="btn">
                        <a class="btn-link" href="{{ route('students.edit', $student->id) }}">Edit</a>
                    </div>

                    <form action="{{ route('students.delete', $student->id) }}" method="post">
                        @csrf
                        <div class="btn">
                            <button class="btn-link" onclick="return confirm('Are you sure?');">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>

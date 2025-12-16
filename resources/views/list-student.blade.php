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
        }
    </style>
</head>

<body>
    <a href="{{ route('students.createForm') }}">Create</a>
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
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                    <form action="{{ route('students.delete', $student->id) }}" method="post">
                        @csrf
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>

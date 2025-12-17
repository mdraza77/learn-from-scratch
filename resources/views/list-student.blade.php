@extends('layouts.main')
@section('title', 'Students List')
@section('content')
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



            .w-5 {
                width: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            {{-- <div id="heading">Heading</div>
        <button class="" onclick="changeColor()">Change</button> --}}
            <form action="{{ route('students.search') }}" method="get">
                <input type="text" class="" value="{{ $searchValue ?? '' }}" name="search" id=""
                    placeholder="Search...">
                <button class="btn btn-success">Search</button>
            </form>
            <div class="">
                <a class="btn btn-primary" href="{{ route('students.createForm') }}">Create</a>
            </div>
            <form action="{{ route('students.deleteMultiple') }}" method="post">
                @csrf
                <button class="btn btn-danger">Delete</button>
                <table class="table" border="3">
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $student->id }}" id=""></td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ Carbon\Carbon::parse($student->created_at)->format('d M Y h:i A') }}</td>
                            <td class="actions">
                                <div class="btn btn-primary">
                                    <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                                </div>

                                <form action="{{ route('students.delete', $student->id) }}" method="post">
                                    @csrf
                                    <div class="btn btn-danger">
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?');">Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </form>
            <div>
                {{ $students->links() }}
            </div>
        </div>
    </body>

    <script>
        function changeColor() {
            let heading = document.getElementById('heading')
            heading.style.color = 'red';
            heading.style.fontSize = '20px';
        }
    </script>

    </html>
@endsection

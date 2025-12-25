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
                <button type="button" class="btn btn-success">Search</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">View
                    Students</button>
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

        <!-- Modal -->
        <div class="modal fade" id="studentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script>
        function changeColor() {
            let heading = document.getElementById('heading')
            heading.style.color = 'blue';
            heading.style.fontSize = '25px';
        }
    </script>

    </html>
@endsection

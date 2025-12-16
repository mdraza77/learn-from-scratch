<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>

<body>
    <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="" placeholder="Name" value="{{ old('name', $student->name) }}">
        <input type="email" name="email" id="" placeholder="Email"
            value="{{ old('email', $student->email) }}">
        <input type="submit" value="Save" name="" id="">
    </form>
</body>

</html>

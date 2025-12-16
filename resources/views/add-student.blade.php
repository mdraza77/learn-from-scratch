<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>
<body>
    <form action="{{ route('students.create') }}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="Name">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="submit" value="Save" name="" id="">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div>
        @if (session('success'))
            <span class="">{{ session('success') }}</span>
        @endif

        @if (session('error'))
            <span class="">{{ session('error') }}</span>
        @endif

        {{ session()->keep('error') }}

        {{-- keeps the session message --}}
        {{-- {{ session()->reflash() }} --}}

        <h1>Login</h1>
        <form action="client" method="post">
            @csrf
            <input type="text" name="name" id="" placeholder="Name">
            <input type="email" name="email" id="" placeholder="Email">
            <input type="number" name="number" id="" placeholder="Phone Number">
            <input type="submit" name="" id="">
        </form>
    </div>
</body>

</html>

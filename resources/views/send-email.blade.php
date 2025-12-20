<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-4 shadow" style="width: 400px;">
            <h4 class="text-center mb-3">Send Email</h4>
            <form action="{{ route('mail.send') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="text" name="to" placeholder="Enter Receiver's Email Address">
                    @error('to')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="subject" placeholder="Enter Email Subject">
                    @error('subject')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-control" type="text" name="message" placeholder="Enter Email Message">
                    @error('message')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Send Email</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

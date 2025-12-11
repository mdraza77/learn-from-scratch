<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
</head>

<body>
    @includeIf('common.header')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 shadow" style="width:350px;">
            <div class="container">
                <H2 class="text-center">Add</H2>
                <form class="row g-3" action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="name" name="name" class="form-control" id="floatingName" placeholder="Name">
                        <label for="floatingName">Name</label>
                        @error('name')
                            <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Email">
                        <label for="floatingEmail">Email</label>
                        @error('email')
                            <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <small class="text-danger"> {{ $message }} </small>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

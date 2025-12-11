<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
    {{-- Bootstrap Css CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4 shadow" style="width: 500px;">
            <h3 class="text-center">
                <form class="row g-3 needs-validation" action="{{ route('user.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" name="firstName" class="form-control" id="validationCustom01"
                            value="Mark" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" name="lastName" class="form-control" id="validationCustom02"
                            value="Otto" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="userName" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" name="email" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Password</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="password" name="password" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a strong password.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">City</label>
                        <select class="form-select" name="city" id="validationCustom04" required>
                            <option selected disabled value="">Choose city</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Noida">Noida</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom05" class="form-label">Zip</label>
                        <input type="text" name="zip" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="skills[]" value="laravel"
                                id="laravel" required>
                            <label class="form-check-label" for="laravel">
                                Laravel
                            </label>
                            <br>
                            <input class="form-check-input" type="checkbox" name="skills[]" value="react" id="react"
                                required>
                            <label class="form-check-label" for="react">
                                React
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="male" id="male"
                                required>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                            <br>
                            <input class="form-check-input" type="radio" name="gender" value="female"
                                id="female" required>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Skills Range</label>
                        <input type="range" name="skillsRange" class="form-control" id="validationCustom02"
                            min="30" max="100" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </h3>
        </div>
    </div>
</body>

</html>

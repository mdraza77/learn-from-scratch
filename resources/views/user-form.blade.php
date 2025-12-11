<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- ===== Center Container (Full Height Layout) ===== -->
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

        <!-- ===== Card (Form Wrapper) ===== -->
        <div class="card p-4 shadow" style="width: 700px;">

            <h3 class="text-center mb-4">User Registration Form</h3>

            <!-- ========================= FORM START ========================= -->
            <form class="row g-3" action="{{ route('user.store') }}" method="POST" novalidate>
                @csrf

                <!-- ===================== First Name ===================== -->
                <div class="col-md-4">
                    <label class="form-label">First Name</label>
                    <input type="text" name="firstName" class="form-control" value="{{ old('firstName') }}" required>

                    <!-- Laravel Validation -->
                    @error('firstName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Last Name ===================== -->
                <div class="col-md-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="{{ old('lastName') }}" required>

                    @error('lastName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Username ===================== -->
                <div class="col-md-4">
                    <label class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>

                        <input type="text" name="userName" class="form-control" value="{{ old('userName') }}"
                            required>
                    </div>

                    @error('userName')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Email ===================== -->
                <div class="col-md-6">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Password ===================== -->
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>

                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== State (Textbox) ===================== -->
                <div class="col-md-4">
                    <label class="form-label">State (Text Input)</label>
                    <input type="text" name="state" class="form-control" value="{{ old('state') }}" required>

                    @error('state')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== City Dropdown ===================== -->
                <div class="col-md-4">
                    <label class="form-label">City (Dropdown)</label>

                    <select name="city_dropdown" class="form-select" required>
                        <option value="">Choose city</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Noida">Noida</option>
                    </select>

                    @error('city_dropdown')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Zip Code ===================== -->
                <div class="col-md-4">
                    <label class="form-label">Zip / Pincode</label>
                    <input type="text" name="zip" class="form-control" required>

                    @error('zip')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Skills (Checkbox Group) ===================== -->
                <div class="col-md-6">
                    <label class="form-label">Skills</label> <br>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="laravel" id="laravel">
                        <label class="form-check-label" for="laravel">Laravel</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="react" id="react">
                        <label class="form-check-label" for="react">React</label>
                    </div>

                    @error('skills')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Gender (Radio Group) ===================== -->
                <div class="col-md-6">
                    <label class="form-label">Gender</label> <br>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female"
                            id="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>

                    @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Skill Range ===================== -->
                <div class="col-md-12">
                    <label class="form-label">Skill Range (30–100)</label>
                    <input type="range" min="30" max="100" name="skillsRange" class="form-range">

                    @error('skillsRange')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- ===================== Submit Button ===================== -->
                <div class="col-12 mt-2">
                    <button class="btn btn-primary w-100" type="submit">Submit Form</button>
                </div>

            </form>
            <!-- ========================= FORM END ========================= -->

        </div>
    </div>

</body>

</html>

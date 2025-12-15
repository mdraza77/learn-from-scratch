<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <h1>My Profile</h1>
    @if (session('name'))
        <h1>Welcone, {{ session('name') }}</h1>
    @else
        <h1>No user found in session <a href="login">Login</a></h1>
    @endif

    <a href="logout">Logout</a>
    <p>Name From Session: {{ session('allData')['name'] }}</p>
    <p>Password From Session: {{ session('allData')['password'] }}</p>
</div>

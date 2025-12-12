<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h1>Home Page</h1>
    <a href="{{ route('about') }}">About</a>
    @foreach ($arr as $array)
        <p>{{ $array }}</p>
    @endforeach
</div>

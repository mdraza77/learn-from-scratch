<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    @includeIf('common.header')
    <h1 class="text-center">Home Page Form</h1>
</body>
{{-- <x-message-banner msg="Login Success" class="success" />
<x-message-banner msg="Registration Success" class="success" /> --}}
<div class="container">
    <x-inputs />
</div>
<style>
    .success {
        color: green;
    }
</style>

</html>

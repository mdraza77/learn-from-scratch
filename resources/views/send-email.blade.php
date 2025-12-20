<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Email</title>
</head>

<body>
    <form action="{{ route('mail.send') }}" method="post">
        @csrf
        <input type="text" name="to" placeholder="Enter Email Address">
        <input type="text" name="subject" placeholder="Enter Email Subject">
        <input type="text" name="message" placeholder="Enter Email Address">
        <button>Send Email</button>
    </form>
</body>

</html>

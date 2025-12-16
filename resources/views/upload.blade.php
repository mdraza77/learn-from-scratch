<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sub-container {
            border: 2px solid black;
            padding: 10px;
        }

        .heading {
            text-align: center;
            margin-top: 10px
        }
    </style>
</head>

<body class="container">
    <div class="sub-container">
        <h1 class="heading">Upload File</h1>
        <form action="upload" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <input type="submit" name="" id="">
        </form>
    </div>
</body>

</html>

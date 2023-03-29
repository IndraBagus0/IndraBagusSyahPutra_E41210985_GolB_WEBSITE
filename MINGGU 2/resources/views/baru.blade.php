<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    //CRSF protection merupakan semacam proteksi yang digunakan pada web yang dibuat, fungsinya agar tidak request dari luar yang bersifat berbahaya
<form method="POST" action="/profile">
    @csrf
    ...
</form>
</body>
</html>
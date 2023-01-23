<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Photos</h3>
    <form action="/photo" method="POST" enctype="multipart/form-data">
       @csrf
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
 <hr>
    <h3>Images</h3>
    <form action="/images" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image1"> <br>
        <input type="file" name="image2">
        <button type="submit">Enviar 2</button>
    </form>
<hr>
    <h3>Documents</h3>
    <form action="/document" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Enviar 3</button>
    </form>
</body>
</html>
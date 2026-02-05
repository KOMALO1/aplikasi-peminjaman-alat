<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="/kategori/{{ $kategori->id }}" method="post">

@csrf
@method("put")

<label>Nama Kategori</label>
<input type="text" name="nama" value="{{ $kategori->nama }}">

<button type="submit">Simpan</button>
</form>

</body>
</html>
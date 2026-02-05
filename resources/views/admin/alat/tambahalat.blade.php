<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="/alat" method="post">

@csrf

<label>Nama Alat</label>
<input type="text" name="nama">

<label>Kategori</label>
<select name="kategori_id">

<option value="" selected disabled>Pilih Kategori</option>

@foreach ($kategori as $k)
    
<option value="{{ $k->id }}">{{ $k->nama }}</option>

@endforeach

</select>


<button type="submit">Simpan</button>

</form>


</body>
</html>
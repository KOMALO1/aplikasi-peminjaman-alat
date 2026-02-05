<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<table>

<th>Nama Alat</th>
<th>Kategori</th>
<th colspan="2">Action</th>
@foreach ($alat as $a)
    
<tr>

<td>{{ $a->nama }}</td>
<td>{{ $a->kategori->nama }}</td>
<td>
    <form action="alat/{{ $a->id }}/edit" method="get">

    @csrf

    <button type="submit">Edit</button>

</form>

</td>

<td>

    <form action="alat/{{ $a->id }}" method="post">
@csrf
@method("delete")

<button type="submit">Delete</button>

</form>

</td>

</tr>

@endforeach

</table>

<form action="alat/create" method="get">

    @csrf

    <button type="submit">Tambah Alat</button>

</form>

</body>
</html>
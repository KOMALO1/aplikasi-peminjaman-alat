<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<table border="1">
<?php $no=1 ?>
    @foreach ($kategori as $k )
        
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $k->nama }}</td>

    <td>

        <form action="kategori/{{ $k->id }}/edit">
    
        @csrf

        <button type="submit">Edit</button>
    
    </form>

    </td>

    <td>
        
        <form action="kategori/{{ $k->id }}" method="post">
        @csrf
@method("delete")

            <button type="submit">Delete</button>
        
        </form>
    
    </td>

</tr>

    @endforeach

</table>

<form action="kategori/create" method="get">

    @csrf

    <button type="submit">Tambah Kategori</button>

</form>

</body>
</html>
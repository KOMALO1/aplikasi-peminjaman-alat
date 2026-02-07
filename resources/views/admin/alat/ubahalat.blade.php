<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/alat/{{ $alat->id }}" method="post">

        @csrf
        @method('put')

        <label>Nama Alat</label>
        <input type="text" name="nama" value="{{ $alat->nama }}">

        <label>Kategori</label>
        <select name="kategori_id">

            {{-- <option value="{{ $alat->kategori->id }}" selected >{{ $alat->kategori->nama }}</option> --}}

            @foreach ($kategori as $k)
                <option value="{{ $k->id }}" {{ $k->id == $alat->kategori->id ? 'selected' : '' }}>
                    {{ $k->nama }}</option>
            @endforeach

        </select>

        <button type="submit">Simpan</button>

    </form>

</body>

</html>

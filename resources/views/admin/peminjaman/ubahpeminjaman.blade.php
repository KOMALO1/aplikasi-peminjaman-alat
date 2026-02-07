<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    hello
    <form action="/peminjaman/{{ $peminjaman->id }}" method="post">

        @csrf

        @method('put')


        <label>Nama Alat</label>
        <select name="alat_id">


            @foreach ($peminjamanalat as $p)
                <option value="{{ $p->id }}" {{ $p->id == $peminjaman->alat->id ? 'selected' : '' }}>
                    {{ $p->nama }}</option>
            @endforeach

        </select>

        <label>Tanggal Pengembalian</label>
        <input type="date" name="tanggal_pengembalian" value="{{ $peminjaman->tanggal_pengembalian }}">

        <label>Persetujuan</label>
        <select name="persetujuan">

            <option value="menunggu">Menunggu</option>
            <option value="diterima">Diterima</option>
            <option value="ditolak">Ditolak</option>

        </select>

        <button type="submit">Simpan</button>

    </form>
</body>

</html>

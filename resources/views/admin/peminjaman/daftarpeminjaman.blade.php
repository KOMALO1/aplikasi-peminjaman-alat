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
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Kategori</th>
            <th>Nama Peminjam</th>
            <th>Tanngal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th colspan="2">Action</th>
        </tr>

        <?php $no = 1; ?>
        @foreach ($peminjamans as $p)
            <tr>

                <td>{{ $no++ }}</td>
                <td>{{ $p->user->name }}</td>
                <td>{{ $p->alat->nama }}</td>
                <td>{{ $p->alat->kategori->nama }}</td>

            </tr>
        @endforeach

    </table>

    <form action="peminjaman/create" method="get">
        @csrf

        <button type="submit">Tambah Pinjaman</button>

    </form>

</body>

</html>

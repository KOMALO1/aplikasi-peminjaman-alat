<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table border="2">
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Alat</th>
            <th>Kategori</th>

            <th>Tanngal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Persetujuan</th>
            <th colspan="2">Action</th>
        </tr>

        <?php $no = 1; ?>
        @foreach ($peminjamans as $p)
            <tr>

                <td>{{ $no++ }}</td>
                <td>{{ $p->user->name }}</td>
                <td>{{ $p->alat->nama }}</td>
                <td>{{ $p->alat->kategori->nama }}</td>
                <td>{{ $p->tanggal_meminjam }}</td>
                <td>{{ $p->tanggal_pengembalian }}</td>
                <td>{{ $p->persetujuan }}</td>

                <td>
                    <form action="peminjaman/{{ $p->id }}/edit" method="get">
                        @csrf

                        <button type="submit">Edit</button>
                    </form>

                </td>
                <td>
                    <form action="peminjaman/{{ $p->id }}" method="POST">

                        @csrf
                        @method('delete')

                        <button type="submit">Delete</button>

                    </form>
                </td>

            </tr>
        @endforeach

    </table>

    <form action="peminjaman/create" method="get">
        @csrf

        <button type="submit">Tambah Pinjaman</button>

    </form>

</body>

</html>

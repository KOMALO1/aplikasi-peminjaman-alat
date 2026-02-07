<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="3">
        <tr></tr>

        <?php $no = 1; ?>
        @foreach ($user as $u)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->role }}</td>
                <td>
                    <form action="user/{{ $u->id }}/edit" method="get">

                        @csrf

                        <button type="submit">Edit</button>

                    </form>

                </td>

                <td>

                    <form action="user/{{ $u->id }}" method="post">

                        @csrf
                        @method('delete')

                        <button type="submit">Delete</button>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>

    <form action="user/create" method="get">

        @csrf

        <button type="submit">Tambah User</button>

    </form>


</body>

</html>

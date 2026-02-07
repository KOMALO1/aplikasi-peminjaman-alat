<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/user/{{ $user->id }}" method="post">
        @csrf
        @method('put')

        <label>Nama</label>
        <input type="text" name="name" value="{{ $user->name }}">

        <label>Password</label>
        <input type="password" name="password">

        <label>Role</label>
        <select name="role">

            <option>{{ $user->role }}</option>
            <option value="Admin">Admin</option>
            <option value="Petugas">Petugas</option>
            <option value="Peminjam">Peminjam</option>

        </select>

        <button type="submit">Simpan</button>

    </form>


</body>

</html>

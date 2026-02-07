<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="/user" method="post">

        @csrf

        <label>Nama</label>
        <input type="text" name="name">

        <label>Email</label>
        <input type="email" name="email">

        <label>Password</label>
        <input type="text" name="password">

        <label>Role</label>
        <select name="role">



            <option selected disabled>Pilih Role</option>
            <option value="Admin">Admin</option>
            <option value="Petugas">Petugas</option>
            <option value="Peminjam">Peminjam</option>

        </select>

        <button type="submit">Simpan</button>

    </form>

</body>

</html>

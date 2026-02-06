<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <form action="/peminjaman" method="post">

        @csrf
        <div class="form-group">
            <label>Nama Peminjam</label>
            <input type="text" value="{{ auth()->user()->name }}" class="form-control" readonly>
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
        <label>Nama Alat</label>


        <select name="alat_id">


            @foreach ($alat as $a)
                <option value="{{ $a->nama }}">{{ $a->nama }}</option>
            @endforeach

        </select>

        <button type="submit">Simpan</button>


    </form>

</body>

</html>

<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\User;
use App\Models\Alat;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peminjamans = Peminjaman::with(['user', 'alat'])->get();

        return view("admin.peminjaman.daftarpeminjaman", compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        $alat = Alat::with(["kategori"])->get();
        $user = User::all();

        return view("admin.peminjaman.tambahpeminjaman", compact("alat", "user", "kategori"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $alat = Alat::where('id', $request->alat_id)->first();
        Peminjaman::create([


            "user_id" => auth()->id(),
            "alat_id" => $request->alat_id,
            "kategori_id" => $alat->kategori_id,

            "tanggal_pengembalian" => $request->tanggal_pengembalian,
            "persetujuan" => $request->persetujuan
        ]);

        return redirect("/peminjaman");
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
        $peminjamanalat = Alat::all();
        $persetujuan = Peminjaman::all();


        return view("admin.peminjaman.ubahpeminjaman", compact("peminjaman", "peminjamanalat", "persetujuan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //


        $alat = Alat::where('id', $request->alat_id)->first();
        $peminjaman->update([

            "user_id" => auth()->id(),
            "alat_id" => $request->alat_id,
            "kategori_id" => $alat->kategori_id,
            "tanggal_pengembalian" => $request->tanggal_pengembalian,
            "persetujuan" => $request->persetujuan

        ]);

        return redirect("/peminjaman");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
        $peminjaman->delete();

        return redirect("/peminjaman");
    }
}

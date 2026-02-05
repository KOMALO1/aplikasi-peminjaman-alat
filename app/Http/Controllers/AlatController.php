<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $alat = Alat::with(["kategori"])->get();

        return view("admin.alat.daftaralat", compact("alat"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = Kategori::all();

        return view("admin.alat.tambahalat", compact("kategori"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Alat::create([

            "nama" => $request->nama,
            "kategori_id" => $request->kategori_id

        ]);

        return redirect("/alat");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alat $alat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alat $alat)
    {
        //
        $kategori = Kategori::all();

        return view("admin.alat.ubahalat", compact("alat", "kategori"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alat $alat)
    {
        //
        $alat->update([

            "nama" => $request->nama,
            "kategori_id" => $request->kategori_id

        ]);

        return redirect("/alat");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alat $alat)
    {
        //
        $alat->delete();

        return redirect("/alat");
    }
}

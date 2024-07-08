<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\kategori;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.pelanggan.index',[
            'pelanggans' => Pelanggan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pelanggan.create',[
            'kategoris' =>Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'pesanan' => 'required',
            'kategori_id' => 'required',
            'unit' => 'required',
            'harga' => 'required',

        ]);

        Pelanggan::create($validatedData);
        return redirect('/pelanggan-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggan $pelanggan, $id)
    {
        return view('dashboard.pelanggan.edit',[
            'pelanggans'=>Pelanggan::find($id),
            'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggan $pelanggan, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'pesanan' => 'required',
            'kategori_id' => 'required',
            'unit' => 'required',
            'harga' => 'required',

        ]);

        Pelanggan::where('id', $id)->update($validatedData);
        return redirect('/pelanggan-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan, $id)
    {
        Pelanggan::destroy($id);
        return redirect('/pelanggan-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

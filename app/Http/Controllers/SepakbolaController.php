<?php

namespace App\Http\Controllers;

use App\Models\sepakbola;
use Illuminate\Http\Request;

class SepakbolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.sepakbola.index',[
            'sepakbolas' => Sepakbola::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sepakbola.create',
            ['sepakbolas' =>Sepakbola::all() ]);
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
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Sepakbola::create($validatedData);
        return redirect('/sepakbola-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sepakbola  $sepakbola
     * @return \Illuminate\Http\Response
     */
    public function show(sepakbola $sepakbola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sepakbola  $sepakbola
     * @return \Illuminate\Http\Response
     */
    public function edit(sepakbola $sepakbola, $id)
    {
        return view('dashboard.sepakbola.edit', [
            'sepakbolas' => Sepakbola::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sepakbola  $sepakbola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sepakbola $sepakbola, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Sepakbola::where('id', $id)->update($validatedData);
        return redirect('/sepakbola-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sepakbola  $sepakbola
     * @return \Illuminate\Http\Response
     */
    public function destroy(sepakbola $sepakbola, $id)
    {
        Sepakbola::destroy($id);
        return redirect('/sepakbola-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

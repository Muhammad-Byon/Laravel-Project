<?php

namespace App\Http\Controllers;

use App\Models\piano;
use Illuminate\Http\Request;

class PianoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.piano.index',[
            'pianos' => Piano::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.piano.create',[
            'pianos' => Piano::all()
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
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Piano::create($validatedData);
        return redirect('/piano-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function show(piano $piano)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function edit(piano $piano, $id)
    {
        return view('dashboard.piano.edit', [
            'pianos' => Piano::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, piano $piano, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Piano::where('id', $id)->update($validatedData);
        return redirect('/piano-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function destroy(piano $piano, $id)
    {
        Piano::destroy($id);
        return redirect('/piano-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

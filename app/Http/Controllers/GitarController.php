<?php

namespace App\Http\Controllers;

use App\Models\gitar;
use Illuminate\Http\Request;

class GitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.gitar.index',[
            'gitars' => Gitar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.gitar.create',[
            'gitars' => Gitar::all()
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

        Gitar::create($validatedData);
        return redirect('/gitar-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gitar  $gitar
     * @return \Illuminate\Http\Response
     */
    public function show(gitar $gitar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gitar  $gitar
     * @return \Illuminate\Http\Response
     */
    public function edit(gitar $gitar, $id)
    {
        return view('dashboard.gitar.edit', [
            'gitars' => Gitar::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gitar  $gitar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gitar $gitar, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Gitar::where('id', $id)->update($validatedData);
        return redirect('/gitar-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gitar  $gitar
     * @return \Illuminate\Http\Response
     */
    public function destroy(gitar $gitar, $id)
    {
        Gitar::destroy($id);
        return redirect('/gitar-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

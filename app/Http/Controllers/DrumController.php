<?php

namespace App\Http\Controllers;

use App\Models\drum;
use Illuminate\Http\Request;

class DrumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.drum.index',[
            'drums' => Drum::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.drum.create',[
            'drums' => Drum::all()
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

        Drum::create($validatedData);
        return redirect('/drum-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drum  $drum
     * @return \Illuminate\Http\Response
     */
    public function show(drum $drum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drum  $drum
     * @return \Illuminate\Http\Response
     */
    public function edit(drum $drum, $id)
    {
        return view ('dashboard.drum.edit',[
            'drums' => Drum::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drum  $drum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drum $drum, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Drum::where('id', $id)->update($validatedData);
        return redirect('/drum-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drum  $drum
     * @return \Illuminate\Http\Response
     */
    public function destroy(drum $drum, $id)
    {
        Drum::destroy($id);
        return redirect('/drum-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

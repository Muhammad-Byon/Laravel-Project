<?php

namespace App\Http\Controllers;

use App\Models\badminton;
use Illuminate\Http\Request;

class BadmintonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.badminton.index',[
            'badmintons' => Badminton::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.badminton.create',
            ['badmintons' =>Badminton::all() ]);
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

        Badminton::create($validatedData);
        return redirect('/badminton-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function show(badminton $badminton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function edit(badminton $badminton, $id)
    {
        return view('dashboard.badminton.edit', [
            'badmintons' => Badminton::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, badminton $badminton, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Badminton::where('id', $id)->update($validatedData);
        return redirect('/badminton-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function destroy(badminton $badminton, $id)
    {
        Badminton::destroy($id);
        return redirect('/badminton-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

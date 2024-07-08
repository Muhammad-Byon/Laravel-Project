<?php

namespace App\Http\Controllers;

use App\Models\basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.basket.index',[
            'baskets' => Basket::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.basket.create',
            ['baskets' =>Basket::all()
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

        Basket::create($validatedData);
        return redirect('/basket-dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(basket $basket, $id)
    {
        return view('dashboard.basket.edit', [
            'baskets' => Basket::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, basket $basket, $id)
    {
        $validatedData = $request -> validate([
            'nama' => 'required',
            'brand' => 'required',
            'stok' => 'required',
            'harga' => 'required',

        ]);

        Basket::where('id', $id)->update($validatedData);
        return redirect('/basket-dashboard')->with('pesan','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(basket $basket, $id)
    {
        Basket::destroy($id);
        return redirect('/basket-dashboard')->with('pesan','Data berhasil dihapus');
    }
}

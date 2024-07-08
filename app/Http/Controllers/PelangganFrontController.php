<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Models\kategori;
use Illuminate\Http\Request;

class PelangganFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pelanggan.index',[
            'pelanggans' => Pelanggan::all()
        ]);
    }
}
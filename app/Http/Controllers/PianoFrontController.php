<?php

namespace App\Http\Controllers;

use App\Models\piano;
use Illuminate\Http\Request;

class PianoFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('piano.index',[
            'pianos' => Piano::all()
        ]);
    }
}
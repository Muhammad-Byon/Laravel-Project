<?php

namespace App\Http\Controllers;

use App\Models\drum;
use Illuminate\Http\Request;

class DrumFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('drum.index',[
            'drums' => Drum::all()
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\gitar;
use Illuminate\Http\Request;

class GitarFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('gitar.index',[
            'gitars' => Gitar::all()
        ]);
    }
}
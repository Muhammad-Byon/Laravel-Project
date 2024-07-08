<?php

namespace App\Http\Controllers;

use App\Models\sepakbola;
use Illuminate\Http\Request;

class SepakbolaFrontController extends Controller
{
    public function index(){
        return view('sepakbola.index',[
            'sepakbolas' => Sepakbola::all()
        ]);

        
    }
}
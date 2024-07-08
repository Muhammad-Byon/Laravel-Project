<?php

namespace App\Http\Controllers;

use App\Models\badminton;
use Illuminate\Http\Request;

class BadmintonFrontController extends Controller
{
    public function index(){
        return view('badminton.index',[
            'badmintons' => Badminton::all()
        ]);

        
    }
}
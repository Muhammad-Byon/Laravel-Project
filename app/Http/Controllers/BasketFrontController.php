<?php

namespace App\Http\Controllers;

use App\Models\basket;
use Illuminate\Http\Request;

class BasketFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('basket.index',[
            'baskets' => Basket::all()
        ]);
    }
}
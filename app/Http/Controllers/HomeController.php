<?php

namespace App\Http\Controllers;
use App\Models\House;

class HomeController extends Controller
{
    public function index()
    {
        $trains = [];
        return view('home', compact('trains'));
    }
}

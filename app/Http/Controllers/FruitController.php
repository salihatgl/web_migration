<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index()
    {
        // $fruits dizisini tanımla
        $fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Fig'];

        // Bu diziyi bir Blade şablonuna geçirerek görüntüleme işlemi yapılabilir.
        return view('fruits.index', compact('fruits'));
    }
}

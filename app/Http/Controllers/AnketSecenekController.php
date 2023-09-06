<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnketSecenek;

class AnketSecenekController extends Controller
{
    public $anketSecenekler;
    public function index()
    {
        $anketSecenekler = AnketSecenek::all(); // Tüm anketleri al
        // return view('livewire.anket-list', ['anketler' => $anketSecenekler]);
    }
}

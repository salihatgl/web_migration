<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anket;

class AnketController extends Controller
{
    public $anketler;
    public function index()
    {
        $anketler = Anket::all(); // Tüm anketleri al

        // return view('livewire.anket-list', ['anketler' => $anketler]);
    }
}

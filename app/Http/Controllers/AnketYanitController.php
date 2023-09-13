<?php

namespace App\Http\Controllers;

use App\Models\AnketYanit;
use Illuminate\Http\Request;
use App\Models\AnktYanit;

class AnketYanitController extends Controller
{
    public function index()
    {
        $anket_yanit = AnketYanit::all();
        return view('livewire.anket-list', ['anket_yanit' => $anket_yanit]);
    }

   
}
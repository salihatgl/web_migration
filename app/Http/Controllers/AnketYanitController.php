<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\AnketYanit;
use App\Models\User;
use Illuminate\Http\Request;

class AnketYanitController extends Controller
{
    public function index()
    {
        $anket_yanit = AnketYanit::all();
        return view('livewire.anket-list', ['anket_yanit' => $anket_yanit]);
    }

   
}
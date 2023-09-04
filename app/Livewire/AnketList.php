<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Anket;
use App\Models\AnketSecenek;


class AnketList extends Component
{
    public $anketler; // $anketler değişkenini tanımladık
    public $anketsecenek; // $aanketsecenek değişkenini tanımladık

    public function render()
    {
        $this->anketler = Anket::all(); // Verileri $anketler'e atadık
        $this->anketsecenek = AnketSecenek::all(); // Verileri $anketsecenek'e atadık

        return view('livewire.anket-list');
    }
}

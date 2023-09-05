<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Anket;
use App\Models\Post;
use App\Models\AnketSecenek;


class AnketList extends Component
{
    public $anketler; // $anketler değişkenini tanımladık
    public $anketsecenek; // $aanketsecenek değişkenini tanımladık
    public $yanit;


    public function render()
    {
        $this->anketler = Anket::all(); // Verileri $anketler'e atadık
        $this->anketsecenek = AnketSecenek::all(); // Verileri $anketsecenek'e atadık
        $secenekler = AnketSecenek::all(['id']); // Sadece id ve secenek sütunlarını al


        return view('livewire.anket-list',compact('secenekler'));
    }
    public function yanitEkle()
    {
        Post::create([
            'yanit' => $this->yanit,
            // Diğer sütunları burada ekleyebilirsiniz
        ]);
}
}

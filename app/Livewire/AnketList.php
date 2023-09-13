<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Anket;
use App\Models\AnketSecenek;
use App\Models\AnketYanit;
use PhpParser\Node\Stmt\If_;

class AnketList extends Component
{
    public $anketler; // $anketler değişkenini tanımladık
    public $anketsecenek; // $anketsecenek değişkenini tanımladık
    public $anket_id;
    public $secenek_id;
    public $yanit_isletim_sis;
    public $selectedPost;




    public function render()
    {
        $this->anketler = Anket::all(); // Verileri $anketler'e atadık
        $this->anketsecenek = AnketSecenek::all(); // Verileri $anketsecenek'e atadık
        


        return view('livewire.anket-list');
    }
    
    public function yanitEkle()
    {
       
        AnketYanit::create([
            'anket_id' => $this->anket_id,
            'secenek_id' => $this->secenek_id,
          
            // Diğer sütunları burada ekleyebilirsiniz
            
        ]);
    
}
}

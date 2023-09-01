<?php

namespace App\Livewire;

use Livewire\Component;


class Anket extends Component
{
    public $ankets;
    public $selectedCategory;

    public function mount()
    {
        // Veritabanından kullanıcıları çekiyoruz
        $this->ankets = Anket::all();
    }
    
    public function render()
    {
        return view('livewire.anket');
    }
}

<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Anket;
use App\Models\AnketSecenek;
use App\Models\AnketYanit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;


class AnketList extends Component
{
    public $anketler; // $anketler değişkenini tanımladık
    public $anketsecenek; // $anketsecenek değişkenini tanımladık
    public $anket_id;
    public $secenek_id;
    public $kullanici_id;
    public $secenek_anket_yanit_1;
    public $secenek_anket_yanit_2;
    public $secenek_anket_yanit_3;
    public $user;
    public $id;
    public $Mesaj;

    public function render()
    {
        
        $this->user = Auth::user();
        $this->anketler = Anket::all(); // Verileri $anketler'e atadık
        $this->anketsecenek = AnketSecenek::all(); // Verileri $anketsecenek'e atadık
       
        

        return view('livewire.anket-list');
    }


    public function yanitEkle()
    {
        if (Auth::check()) {
            $id = Auth::id();
       

        $yanit = $this->secenek_anket_yanit_1;
        $dizi = explode(';', $yanit);

        $yanit_tarayici = $this->secenek_anket_yanit_2;
        $dizi_tarayici = explode(';', $yanit_tarayici);

        $yanit_isletim = $this->secenek_anket_yanit_3;
        $dizi_isletim = explode(';', $yanit_isletim);

        AnketYanit::create([
            'anket_id' => $dizi_isletim[0],
            'secenek_id' => $dizi_isletim[1],
            'kullanici_id' => $id,
        ]);
        AnketYanit::create([
            'anket_id' => $dizi_tarayici[0],
            'secenek_id' => $dizi_tarayici[1],
            'kullanici_id' => $id,
        ]);
        AnketYanit::create([
            'anket_id' => $dizi[0],
            'secenek_id' => $dizi[1],
            'kullanici_id' => $id,
        ]);
        $Mesaj = 'Ankete katıldığınız için teşekkür ederiz!';
        session()->flash('Mesaj', $Mesaj);
        return $this->redirect('/dashboard');

    }
    else{
        return redirect('/dashboard');
    }
    }
}
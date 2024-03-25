<?php

namespace App\Livewire;

use App\Models\Sepet;
use Livewire\Component;

class SepetController extends Component
{

    public $name;
    public $qty;
    public $price;

    public function render()
    {
        $sepet = Sepet::all();
        return view('livewire.sepet-controller', ['sepet' => $sepet]);
    }

    public function ekle()
    {
        if (!empty($this->name) && !empty($this->price)) {
            Sepet::create([
                'name' => $this->name,
                'price' => $this->price,
                'qty' => 1,
            ]);
    
            $this->name = '';
            $this->price = '';   
        }
    }

    public function arttir($id)
    {
        $urun = Sepet::find($id);
        if ($urun) {
            $urun->qty++;
            $urun->save();
        }
    }

    public function azalt($id)
    {
        $urun = Sepet::find($id);
        if ($urun) {
            if ($urun->qty > 1) {
                $urun->qty--;
                $urun->save();
            } else {
                $urun->delete();
            }
        }
    }

    public function cikar($id)
    {
        $urun = Sepet::find($id);
        $urun->delete();
    }

}

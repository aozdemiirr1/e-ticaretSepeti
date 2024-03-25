<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search', [
            'users' => User::where('email', 'LIKE', '%' . $this->search . '%')->get(),
        ]);
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $count = 1;
    public function render()
    {
        return view('livewire.index');
    }

    public function increment()
    {
        this->count++;
    }
}

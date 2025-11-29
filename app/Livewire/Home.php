<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }

    public $photoIndex = 0;

    public function shufflePhotos()
    {
        $this->photoIndex = ($this->photoIndex + 1) % 5;
    }

}

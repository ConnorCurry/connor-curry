<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $photoIndex = 0;

    public function render()
    {
        return view('livewire.home');
    }

    public function shufflePhotos()
    {
        $this->photoIndex++;
    }

}

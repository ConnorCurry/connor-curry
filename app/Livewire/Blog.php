<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;

class Blog extends Component
{
    public $blogs = [];

    public function mount()
    {
        $this->blogs = ModelsBlog::all();
    }

    public function render()
    {
        return view('livewire.blog');
    }
}

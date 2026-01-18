<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class BlogListItem extends Component
{
    public $blog;
    
    public $currentRoute;

    public function mount($blog)
    {
        $this->blog = $blog;
        $this->currentRoute = str_replace(config('app.url'), '', url()->current());
    }

    public function render()
    {
        return view('livewire.partials.blog-list-item');
    }
}

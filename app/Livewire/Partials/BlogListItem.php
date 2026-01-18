<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class BlogListItem extends Component
{
    public $blog;
    public $thumbnail;
    public $currentRoute;

    public function mount($blog)
    {
        $this->blog = $blog;
        $this->currentRoute = str_replace(config('app.url'), '', url()->current());
        if ($this->blog->thumbnail) {
            $this->thumbnail = Asset('storage/' . $this->blog->thumbnail);
        } else {
            $this->thumbnail = Asset('images/placeholder.svg');
        }
    }

    public function render()
    {
        return view('livewire.partials.blog-list-item');
    }
}

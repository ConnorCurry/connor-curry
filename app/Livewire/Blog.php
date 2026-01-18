<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Attributes\Url;
use App\Models\Project;
use Livewire\Component;

class Blog extends Component
{
    public $blogs = [];
    public $projects = [];

    #[Url(as: 'proj')]
    public $projectFilter = 0;

    public function filterProject($id) {
        if ($this->projectFilter === $id) {
            $this->projectFilter = 0;
        } else {
            $this->projectFilter = $id;
        }
        $this->loadBlogs();
    }

    public function loadBlogs()
    {
        if ($this->projectFilter === 0) {
            $this->blogs = ModelsBlog::all();
        } else {
            $this->blogs = ModelsBlog::whereBelongsTo(Project::find($this->projectFilter))->get();
        }
    }

    public function mount()
    {
        $this->projects = Project::orderBy('title', 'asc')->get();
        $this->loadBlogs();
    }

    public function render()
    {
        return view('livewire.blog');
    }
}

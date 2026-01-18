<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class ProjectListItem extends Component
{

    public $project;
    public $thumbnail;

    public function mount($project)
    {
        $this->project = $project;
        if ($this->project->thumbnail) {
            $this->thumbnail = Asset('storage/' . $this->project->thumbnail);
        } else {
            $this->thumbnail = Asset('images/placeholder.svg');
        }
    }

    public function render()
    {
        return view('livewire.partials.project-list-item');
    }
}

<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;
use App\Models\Blog;
use FastVolt\Helper\Markdown;

class View extends Component
{
    public $projectId = 0;
    public $project;
    public $content = '';
    public $blogs;

    public function mount ($projectId) {
        if (!$projectId) {
            return;
        }
        $this->projectId = $projectId;
        $this->project = Project::find($projectId);
        if ($this->project) {
            $md = Markdown::new();
            $md->setContent($this->project->content);
            $this->content = $md->getHtml();
            $this->blogs = Blog::where('project_id', $projectId)->orderByDesc('created_at')->limit(5)->get();
        }
    }

    public function render()
    {
        return view('livewire.projects.view');
    }
}

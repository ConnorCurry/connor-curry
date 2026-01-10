<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use FastVolt\Helper\Markdown;

class View extends Component
{
    public $blogId = 0;
    public $blog;
    public $content;

    public function mount ($blogId)
    {
        if (!$blogId) {
            return;
        }
        $this->blogId = $blogId;
        $this->blog = Blog::find($blogId);
        if ($this->blog) {
            $md = Markdown::new();
            $md->setContent($this->blog->content);
            $this->content = $md->getHtml();
        }
    }

    public function render()
    {
        return view('livewire.blog.view');
    }
}

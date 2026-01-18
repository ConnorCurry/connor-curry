<div class="rounded-lg bg-slate-800 hover:bg-slate-700/65 transition overflow-hidden flex flex-wrap md:flex-nowrap flex-row">
    <div>
        <img class="w-full md:w-auto md:max-w-80 aspect-video h-full object-cover"
            src={{ asset('images/placeholder.svg') }}>
    </div>
    <div class="p-4 w-full flex flex-col justify-between">
        <div>
            <span>
                <h2 class="font-bold text-xl inline-block mr-2 mb-2 md:mb-0">{{ $blog->title }}</h2>
                @if ($currentRoute === '/projects/' . $blog->project->id)
                    <a class="p-1 px-2 bg-primary/50 hover:bg-primary border-primary hover:border-indigo-400 text-indigo-200 hover:text-white text-sm border rounded inline-block transition">{{ $blog->project->title }}</a>
                @else
                    <a href="/projects/{{ $blog->project->id }}" class="p-1 px-2 bg-primary/50 hover:bg-primary border-primary hover:border-indigo-400 text-indigo-200 hover:text-white text-sm border rounded inline-block transition">{{ $blog->project->title }}</a>
                @endif
            </span>
            <p class="my-2">{{ $blog->subtitle }}</p>
        </div>
        <a href="/blog/{{ $blog->id }}"
            class="text-indigo-400 hover:translate-x-1 hover:text-primary transition inline-block w-fit">Read
            More &#8594</a>
    </div>
</div>

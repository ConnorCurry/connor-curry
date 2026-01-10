<div class="max-w-7xl mx-auto px-3 py-8 md:py-12">
    <div class="w-full">
        <a href="/"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Home</a>
        <span class="text-gray-500 px-1">/</span>
        <a href="/projects"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Projects</a>
        <span class="text-gray-500 px-1">/</span> <a class="text-gray-300"">{{ $project->title }}</a>
    </div>
    <div class="flex flex-row flex-wrap md:flex-nowrap justify-between w-full pt-4 gap-6">
        <div class="w-full md:max-w-120 md:w-1/3 md:order-1">
            <img class="w-full h-auto object-cover rounded-lg" src={{ asset('images/placeholder.svg') }}>
        </div>
        <div class="w-full md:w-auto">
            <h1 class="font-bold text-3xl">{{ $project->title }}</h1>
            <p class="text-lg mt-2 mb-6">{{ $project->subtitle }}</p>
            <div class="prose">{!! $content !!}</div>
        </div>
    </div>
    <div class="pt-12">
        <h3 class="text-2xl font-bold mb-6">Latest Blogs</h3>
        <div class="flex flex-col gap-6">
            @foreach ($blogs as $blog)
                <div wire:key="{{ $blog->id }}"
                    class="rounded-lg bg-slate-800 hover:bg-slate-700/65 transition overflow-hidden flex flex-wrap md:flex-nowrap flex-row">
                    <div>
                        <img class="w-full md:w-auto md:max-w-80 aspect-video h-full object-cover"
                            src={{ asset('images/placeholder.svg') }}>
                    </div>
                    <div class="p-4 w-full flex flex-col justify-between">
                        <div>
                            <span>
                                <h2 class="font-bold text-xl inline-block mr-2 mb-2 md:mb-0">{{ $blog->title }}</h2>
                                <a
                                    class="p-1 px-2 bg-primary/50 hover:bg-primary border-primary hover:border-indigo-400 text-indigo-200 hover:text-white text-sm border rounded inline-block transition">{{ $blog->project->title }}</a>
                            </span>
                            <p class="my-2">{{ $blog->subtitle }}</p>
                        </div>
                        <a href="/blog/{{ $blog->id }}"
                            class="text-indigo-400 hover:translate-x-1 hover:text-primary transition inline-block w-fit">Read
                            More &#8594</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div>
    <div class="relative h-50 sm:h-70 md:h-120 overflow-hidden md:-mt-20 -mt-5">
        <img class="max-w-7xl w-full object-cover object-center md:object-top z-3 absolute left-1/2 -translate-x-1/2"
            src={{ asset('images/code.webp') }}>
        <img class="w-full object-cover z-1 absolute left-0 -translate-y-1/2 blur"
            src={{ asset('images/code.webp') }}>
        <div
            class="bg-slate-900/65 w-full h-full absolute top-0 left-0 z-4 md:pt-20 pt-5 flex justify-center items-center">
            <h1 class="text-3xl md:text-5xl font-bold">Blog</h1>
        </div>
    </div>
    <div class="max-w-7xl px-3 mx-auto w-full pt-4">
        <a href="/"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Home</a>
        <span class="text-gray-500 px-1">/</span> <a class="text-gray-300">Blog</a>
    </div>
    <div class="max-w-7xl px-3 mx-auto w-full">
        <div class="flex flex-row flex-wrap gap-3 pt-4 md:pt-6">
            @foreach ($projects as $project)
                <button wire:key="$project->id" wire:click="filterProject({{ $project->id }})"
                    @class([
                        'p-1 px-2 hover:bg-primary border-primary hover:border-indigo-400  hover:text-white text-sm border rounded inline-block transition cursor-pointer',
                        'bg-primary/50 text-indigo-200' => $projectFilter !== $project->id,
                        'bg-primary text-white' => ($projectFilter === $project->id)
                        ])>
                    {{ $project->title }}
                </button>
            @endforeach
        </div>
        <div class="flex flex-col gap-6 py-4 md:pb-12 md:pt-6">
            @foreach ($blogs as $blog)
                <livewire:partials.blog-list-item :$blog :key="$blog->id">
            @endforeach
        </div>
    </div>
</div>

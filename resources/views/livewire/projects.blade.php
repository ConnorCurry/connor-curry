<div>
    <div class="relative h-50 sm:h-70 md:h-120 overflow-hidden md:-mt-20 -mt-5">
        <img class="max-w-7xl w-full object-cover object-center md:object-top z-3 absolute left-1/2 -translate-x-1/2"
            src={{ asset('images/code.webp') }}>
        <img class="w-full object-cover z-1 absolute left-0 -translate-y-1/2 blur"
            src={{ asset('images/code.webp') }}>
        <div
            class="bg-slate-900/65 w-full h-full absolute top-0 left-0 z-4 md:pt-20 pt-5 flex justify-center items-center">
            <h1 class="text-3xl md:text-5xl font-bold">Projects</h1>
        </div>
    </div>
    <div class="max-w-7xl px-3 mx-auto w-full pt-4">
        <a href="/"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Home</a>
        <span class="text-gray-500 px-1">/</span> <a class="text-gray-300">Projects</a>
    </div>
    <div class="max-w-7xl px-3 mx-auto w-full">
        <div class="flex flex-col gap-6 py-4 md:py-12">
            @foreach ($projects as $project)
               <livewire:partials.project-list-item :$project :key="$project->id">
            @endforeach
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-3 py-8 md:py-12">
    <div class="w-full">
        <a href="/"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Home</a>
        <span class="text-gray-500 px-1">/</span>
        <a href="/blog"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Blog</a>
        <span class="text-gray-500 px-1">/</span> <a class="text-gray-300">{{ $blog->title }}</a>
    </div>
    <div class="flex flex-row flex-wrap md:flex-nowrap justify-between w-full pt-4 gap-6">
        <div class="w-full md:max-w-120 md:w-1/3 md:order-1">
            <img class="w-full h-auto object-cover rounded-lg" src={{ asset('images/placeholder.svg') }}>
        </div>
        <div class="w-full md:w-auto">
            <h1 class="font-bold text-3xl">{{ $blog->title }}</h1>
            <a href="/projects/{{ $blog->project->id }}" class="p-1 px-2 mt-2 bg-primary/50 hover:bg-primary border-primary hover:border-indigo-400 text-indigo-200 hover:text-white text-sm border rounded inline-block transition">{{ $blog->project->title }}</a>
            <p class="text-lg mt-2 mb-6">{{ $blog->subtitle }}</p>
            <div class="prose">{!! $content !!}</div>
        </div>
    </div>
</div>

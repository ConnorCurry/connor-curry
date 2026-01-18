<div class="max-w-7xl mx-auto px-3 py-8 md:py-12">
    <div class="w-full">
        <a href="/"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Home</a>
        <span class="text-gray-500 px-1">/</span>
        <a href="/projects"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Projects</a>
        <span class="text-gray-500 px-1">/</span> <a class="text-gray-300">{{ $project->title }}</a>
    </div>
    <div class="flex flex-row flex-wrap md:flex-nowrap justify-between w-full pt-4 gap-6">
        <div class="w-full md:max-w-120 md:w-1/3 md:order-1">
            <img class="w-full h-auto object-cover rounded-lg" src={{ $thumbnail }}>
        </div>
        <div class="w-full md:w-auto">
            <h1 class="font-bold text-3xl">{{ $project->title }}</h1>
            <p class="text-lg mt-2 mb-6">{{ $project->subtitle }}</p>
            <div class="prose">{!! $content !!}</div>
        </div>
    </div>
    <div class="pt-12">
        <h3 class="text-2xl font-bold mb-6 inline-block">Latest Blogs</h3>
        <a href="{{ '/blog?proj=' . $project->id }}" class="text-indigo-400 hover:translate-x-1 hover:text-primary transition inline-block w-fit ml-3">
            View All Blogs &#8594
        </a>
        <div class="flex flex-col gap-6">
            @foreach ($blogs as $blog)
                <livewire:partials.blog-list-item :$blog :key="$blog->id">
            @endforeach
        </div>
    </div>
</div>

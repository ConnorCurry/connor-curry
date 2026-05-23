<div class="w-full relative z-5" x-data="{ dropdownOpen: false }" x-on:click.outside="dropdownOpen = false">
    <div class="w-full bg-primary flex justify-between relative">
        <a href="/" class="hover:translate-x-1 transition"><h1 class="text-2xl md:text-3xl font-bold text-white pt-2 px-3 md:pt-4">Connor Curry</h1></a>
        <nav class="hidden md:flex gap-5 bottom-0 absolute left-1/2 -translate-x-1/2 text-lg">
            <a class="hover:text-white/80 hover:-translate-y-1 transition-all" href="/about">About Me</a>
            <a class="hover:text-white/80 hover:-translate-y-1 transition-all" href="/projects">Projects</a>
            <a class="hover:text-white/80 hover:-translate-y-1 transition-all" href="/blog">Blog</a>
            <a class="hover:text-white/80 hover:-translate-y-1 transition-all" href="/contact">Get in Touch</a>
        </nav>
        <div class="md:hidden pr-2 pt-2">
            <button x-on:click="dropdownOpen = !dropdownOpen" class="w-6 h-9 rounded-lg cursor-pointer lg:hidden relative" aria-label="Menu dropdown toggle">
                <div class="h-[2px] w-6 bg-white rounded absolute left-1/2 -translate-x-1/2 transition-all duration-300"
                :class="dropdownOpen ? 'top-1/2 -translate-y-1/2 opacity-0' : 'top-1/4 translate-y-0'" ></div>
                <div class="h-[2px] w-6 bg-white rounded absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 transition duration-300" :class="dropdownOpen ? 'rotate-45' : '' "></div>
                <div class="h-[2px] w-6 bg-white rounded absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 transition duration-300" :class="dropdownOpen ? '-rotate-45' : '' "></div>
                <div class="h-[2px] w-6 bg-white rounded absolute bottom-1/4 left-1/2 -translate-x-1/2 transition duration-300" :class="dropdownOpen ? 'top-1/2 -translate-y-1/2 opacity-0' : 'bottom-1/4 translate-y-0'"></div>
            </button>
        </div>

    </div>

    <img class="w-full max-h-16 object-fill object-top" src={{ asset('images/layered-waves-haikei.webp') }}>
    <nav x-show="dropdownOpen" class="bg-primary flex flex-col gap-3 p-4 -z-1 w-full absolute"
        x-transition:enter="transition ease-out duration-800"
        x-transition:enter-start="translate-y-[-150%]"
        x-transition:enter-end="translate-none"
        x-transition:leave="transition ease-out duration-800"
        x-transition:leave-start="translate-none"
        x-transition:leave-end="translate-y-[-150%]">
        <div class="bg-primary absolute bottom-full left-0 w-full h-10"></div>
        <a class="focus:text-white/80 focus:-translate-y-1 transition-all" href="/about">About Me</a>
        <a class="focus:text-white/80 focus:-translate-y-1 transition-all" href="/projects">Projects</a>
        <a class="focus:text-white/80 focus:-translate-y-1 transition-all" href="/blog">Blog</a>
        <a class="focus:text-white/80 focus:-translate-y-1 transition-all" href="/contact">Get in Touch</a>
    </nav>
</div>

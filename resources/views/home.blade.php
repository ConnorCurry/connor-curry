<x-layout>
    <div class="relative">
        <img class="max-h-175 min-h-80 w-full object-cover object-center md:object-[0_60%] -mt-5 md:-mt-20 -z-1 relative" src={{ asset('images/splash-img.webp') }}>
        <div class="absolute top-0 z-2 left-0 w-full h-full bg-black/50 flex flex-col justify-center align-center">
            <div class="mx-auto max-w-7xl w-full p-4">
                <h1 class="text-3xl md:text-5xl font-bold mb-4">
                    Connor Curry
                </h1>
                <h2 class="text-xl md:text-2xl inline-block">
                    <hr class="mb-4">
                    Web Developer,<br class="md:hidden"> Programmer, Musician
                </h2>
            </div>
        </div>
    </div>
    <section>
        <div class="max-w-7xl mx-auto px-4 py-12 flex flex-wrap gap-8 lg:flex-nowrap">
            <div class="w-full lg:w-1/2 flex flex-col justify-center">
                <h1 class="text-3xl mb-4">About Me</h1>
                <p class="mb-4">An Ithaca College graduate, programmer, web designer, musician, snowboarder and more.</p>
                <p class="mb-4">
                    Currently employed at Evolution Marketing as a Senior Frontend Web Developer, I help business both small and large build marketing and SEO friendly websites broaden their reach. 
                    I manage a team of frontend developers in the maintenance of 600+ active sites built on the <a target="_blank" href="https://cmsmax.com" class="text-indigo-400 cursor-pointer hover:underline hover:text-primary transition">CMS Max</a> platform.
                </p>
                <p class="mb-4">
                    Outside of my work at Evolution Marketing, I enjoy working on side projects in several frameworks, languages and environments. I also spend plenty of time playing guitar and singing with friends and family,
                    running, snowboarding and playing games with friends. 
                </p>
                <a class="text-indigo-400 text-lg hover:translate-x-1 hover:text-primary transition inline-block w-fit" href="/about">Learn More About Me &#8594</a>
            </div>
            
            <div class="w-full md:w-1/2">
                <img class="rounded-lg w-full" src={{ asset('images/graduation.webp') }}>
            </div>
        </div>
    </section>
</x-layout>

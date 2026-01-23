<div>
    <div class="relative h-50 sm:h-70 md:h-120 overflow-hidden md:-mt-20 -mt-5">
        <img class="max-w-7xl w-full object-cover object-center md:object-top -bottom-1/4 z-3 absolute left-1/2 -translate-x-1/2"
            src={{ asset('images/contact.webp') }}>
        <img class="w-full object-cover z-1 absolute left-0 -translate-y-1/2 blur"
            src={{ asset('images/contact.webp') }}>
        <div
            class="bg-slate-900/65 w-full h-full absolute top-0 left-0 z-4 md:pt-20 pt-5 flex justify-center items-center">
            <h1 class="text-3xl md:text-5xl font-bold">Get in Touch</h1>
        </div>
    </div>
    <div class="max-w-7xl px-3 mx-auto w-full pt-4">
        <a href="/"
            class="text-indigo-400 cursor-pointer hover:-translate-y-0.5 inline-block hover:text-primary transition">Home</a>
        <span class="text-gray-500 px-1">/</span> <a class="text-gray-300">Get in Touch</a>
    </div>
    <section class="max-w-xl px-3 mx-auto w-full pt-6 pb-12">
        <p class="mb-4 text-center text-lg">If you're looking to get in touch with me directly you can fill out the form below!</p>
        <form class="flex flex-col" method="POST" action="/contact-submission">
            @csrf
            <label class="block mb-2 text-lg" for="name"><strong>Name<span class="text-red-500">&nbsp;*</span></strong></label>
            <input class="mb-4 bg-white focus:inset-shadow-sm focus:inset-shadow-primary focus-visible:outline-primary rounded-lg px-2 py-1 text-black" required name="name" id="name" autocomplete="name" type="text"/>
            <label class="block mb-2 text-lg" for="email"><strong>Email<span class="text-red-500">&nbsp;*</span></strong></label>
            <input class="mb-4 bg-white focus:inset-shadow-sm focus:inset-shadow-primary focus-visible:outline-primary rounded-lg px-2 py-1 text-black" required name="email" id="email" autocomplete="email" type="text"/>
            <label class="block mb-2 text-lg" for="subject"><strong>Subject<span class="text-red-500">&nbsp;*</span></strong></label>
            <input class="mb-4 bg-white focus:inset-shadow-sm focus:inset-shadow-primary focus-visible:outline-primary rounded-lg px-2 py-1 text-black" required name="subject" id="subject" type="text"/>
            <label class="block mb-2 text-lg" for="message"><strong>Message<span class="text-red-500">&nbsp;*</span></strong></label>
            <textarea class="mb-6 h-20 bg-white focus:inset-shadow-sm focus:inset-shadow-primary focus-visible:outline-primary rounded-lg px-2 py-1 text-black" required name="message" id="message"></textarea>
            <input type="submit" class="bg-primary hover:bg-indigo-600 transition cursor-pointer inline-block self-center px-3 py-1 text-lg rounded-lg" value="Submit">
        </form>
    </section>
</div>

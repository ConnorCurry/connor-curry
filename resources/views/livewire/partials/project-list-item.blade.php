 <a href="/projects/{{ $project->id }}"
     class="rounded-lg bg-slate-800 hover:bg-slate-700 transition overflow-hidden flex flex-wrap md:flex-nowrap flex-row hover:-translate-y-1">
     <div class="">
         <img class="w-full md:w-auto md:max-w-80 aspect-video h-full object-cover"
             src={{ $thumbnail }}>
     </div>
     <div class="p-4">
         <h2 class="font-bold text-xl">{{ $project->title }}</h2>
         <p>{{ $project->subtitle }}</p>
     </div>
 </a>

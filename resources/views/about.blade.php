@extends('layouts.app')

@section('content')
<section class="mt-6 px-4 md:px-8">
   <div class="grid gap-12 max-w-2xl lg:grid-cols-2 lg:max-w-7xl mx-auto mt-20">
      <div class="ml-10 -mr-20">
         <h2 class="text-3xl font-bold mb-6 text-rose-600 md:text-4xl">About Christall!!</h2>
         <p class="text-neutral-600 leading-relaxed mb-4 text-lg text-left">Perkenalkan, saya Christabelle, 
            seorang mahasiswa yang memiliki ketertarikan besar pada bidang teknologi, desain, dan kreativitas. 
            Saya senang mempelajari hal-hal baru, terutama yang berkaitan dengan pemrograman dan pengembangan aplikasi, 
            sekaligus mengeksplorasi sisi kreatif melalui desain, fashion, serta berbagai kegiatan dan proyek.</p>
         <p class="mb-4 text-neutral-600 leading-relaxed text-lg">Saya juga memiliki pengalaman bekerja dalam tim 
            melalui kegiatan akademik, kompetisi, dan organisasi, yang membantu saya mengembangkan kemampuan komunikasi, 
            kerja sama, serta pemecahan masalah. Bagi saya, setiap proyek dan pengalaman baru merupakan kesempatan untuk terus belajar, 
            mengembangkan keterampilan, dan menghasilkan sesuatu yang bermanfaat serta memiliki nilai kreatif.</p>
      </div>
      <div class="w-full aspect-[20/11] -order-1 lg:order-none ml-30">
         <img src="../../img/tikus.jpeg" alt="kpis dashboard" class="rounded-2xl h-full w-2/3 max-w-none aspect-square object-contain" />
      </div>
   </div>

   <div class="max-w-2xl lg:max-w-7xl mx-auto mt-24 mb-12">
      <h3 class="text-2xl font-bold mb-8 text-neutral-900 md:text-3xl text-center">My Skills</h3>
      
      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
         @forelse ($skills as $skill)
            <div class="bg-white p-6 rounded-2xl border border-neutral-200 shadow-sm hover:shadow-md transition-shadow">
               <div class="flex justify-between items-center mb-4">
                  <h4 class="text-lg font-bold text-neutral-800">{{ $skill['skill'] }}</h4>
                  
                  <span class="text-sm font-semibold text-rose-600">{{ $skill['proficiency'] }}%</span>
               </div>
               
               <div class="w-full bg-neutral-100 rounded-full h-2.5">
                  <div class="bg-rose-500 h-2.5 rounded-full" style="width: {{ $skill['proficiency'] }}%"></div>
               </div>
            </div>
         @empty
            <div class="col-span-full text-center py-10">
               <p class="text-neutral-500 text-lg">Belum ada skill yang ditambahkan.</p>
            </div>
         @endforelse
      </div>
   </div>
</section>

<div class="h-6"> </div>
@endsection
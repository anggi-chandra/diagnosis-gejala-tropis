@extends('layout')

@section('content')
<div class="flex flex-col items-center justify-center max-w-2xl w-full text-center space-y-8 z-10" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
    
    <div class="bg-white p-4 rounded-2xl shadow-xl shadow-rose-100 border border-slate-100 mb-4 transition-all duration-700 transform"
         :class="show ? 'opacity-100 scale-100' : 'opacity-0 scale-80'">
        <i data-lucide="activity" class="w-16 h-16 text-rose-500"></i>
    </div>

    <div class="transition-all duration-700 delay-200 transform"
         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-4 text-balance">
            Deteksi Dini <span class="text-rose-500">Penyakit Tropis</span>
        </h1>
        <p class="text-slate-600 text-lg md:text-xl max-w-lg mx-auto leading-relaxed">
            Kenali gejala awal seperti DBD, Malaria, dan Tifus dengan kuis interaktif sederhana.
        </p>
    </div>

    <div class="transition-all duration-700 delay-500 transform"
         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
        <a href="{{ route('quiz') }}" class="group relative px-8 py-4 bg-rose-500 text-white font-bold rounded-full shadow-lg shadow-rose-200 hover:shadow-rose-300 hover:scale-105 active:scale-95 transition-all duration-300 overflow-hidden inline-flex items-center gap-2 text-lg no-underline">
            <span>Mulai Diagnosis</span>
            <i data-lucide="thermometer" class="w-5 h-5"></i>
        </a>
    </div>

    <div class="pt-8 flex items-center justify-center gap-6 text-slate-400 text-sm transition-opacity duration-1000 delay-700"
         :class="show ? 'opacity-100' : 'opacity-0'">
        <div class="flex items-center gap-2">
            <i data-lucide="shield-check" class="w-4 h-4"></i>
            <span>Privasi Terjaga</span>
        </div>
        <div class="flex items-center gap-2">
            <i data-lucide="activity" class="w-4 h-4"></i>
            <span>Hasil Instan</span>
        </div>
    </div>
</div>
@endsection

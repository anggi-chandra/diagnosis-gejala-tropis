@extends('layout')

@section('content')
<div class="w-full max-w-3xl flex flex-col items-center gap-8 z-10 p-4" x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
    
    <div class="w-full bg-white rounded-3xl shadow-2xl shadow-rose-100 overflow-hidden border border-slate-100 transition-all duration-700 transform"
         :class="show ? 'opacity-100 scale-100' : 'opacity-0 scale-90'">
        
        <div class="bg-rose-500 p-8 text-white text-center">
            <p class="text-rose-100 font-medium mb-2 uppercase tracking-wider text-sm">Indikasi Awal</p>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4">{{ $disease['name'] }}</h2>
            
            <div class="flex flex-col items-center gap-3">
                <div class="inline-flex items-center gap-2 bg-white/20 px-4 py-2 rounded-full text-sm font-semibold backdrop-blur-sm">
                    <i data-lucide="alert-triangle" class="w-4 h-4"></i>
                    <span>Perlu Pemeriksaan Lanjut</span>
                </div>
                <div class="text-rose-100 text-sm font-medium">
                    Tingkat Keyakinan: {{ $certaintyFactor }}%
                </div>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex gap-3 text-amber-800 text-sm">
                <i data-lucide="alert-triangle" class="w-5 h-5 flex-shrink-0"></i>
                <p>
                    <strong>Disclaimer:</strong> Hasil ini bukan diagnosis medis resmi. Aplikasi ini hanya menganalisis pola gejala berdasarkan jawaban Anda. Segera konsultasi ke dokter untuk tes darah/laboratorium.
                </p>
            </div>

            <p class="text-slate-600 leading-relaxed text-lg">
                {{ $disease['description'] }}
            </p>

            <div class="border-t border-slate-100 pt-6">
                <h3 class="font-semibold text-slate-900 mb-4">Kemungkinan Lainnya:</h3>
                <div class="space-y-3">
                    @php
                        // Sort scores descending excluding top
                        $otherScores = $scores;
                        arsort($otherScores);
                        $count = 0;
                        $total = array_sum($scores);
                    @endphp

                    @foreach($otherScores as $code => $score)
                        @if($code !== $topDiseaseCode && $count < 3)
                            @php
                                $percent = $total > 0 ? round(($score / $total) * 100) : 0;
                                $count++;
                            @endphp
                            <div class="bg-slate-50 p-3 rounded-lg flex items-center justify-between">
                                <span class="font-medium text-slate-700">{{ $allDiseases[$code]['name'] }}</span>
                                <span class="text-xs font-bold bg-slate-200 text-slate-600 px-2 py-1 rounded">
                                    {{ $percent }}% Match
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md transition-all duration-700 delay-300 transform"
         :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
        <a href="{{ route('home') }}"
            class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-white border-2 border-slate-200 text-slate-700 font-bold rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all no-underline">
            <i data-lucide="refresh-ccw" class="w-5 h-5"></i> Ulangi Kuis
        </a>
        <button
            class="flex-1 flex items-center justify-center gap-2 px-6 py-3 bg-rose-500 text-white font-bold rounded-xl shadow-lg shadow-rose-200 hover:bg-rose-600 hover:shadow-rose-300 transition-all">
            <i data-lucide="stethoscope" class="w-5 h-5"></i> Cari Dokter
        </button>
    </div>
</div>
@endsection

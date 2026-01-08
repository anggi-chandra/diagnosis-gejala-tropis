@extends('layout')

@section('content')
<div class="w-full max-w-2xl flex flex-col items-center gap-6 z-10" 
     x-data="{ 
        currentIndex: 0, 
        total: {{ count($questions) }},
        answers: {},
        selectOption(qId, val) {
            this.answers[qId] = val;
            setTimeout(() => {
                if (this.currentIndex < this.total - 1) {
                    this.currentIndex++;
                } else {
                    document.getElementById('quizForm').submit();
                }
            }, 300);
        }
     }">

    <!-- Header / Progress -->
    <div class="w-full flex items-center justify-between text-slate-500 mb-2">
        <button 
            @click="if(currentIndex > 0) currentIndex--"
            :disabled="currentIndex === 0"
            class="flex items-center gap-1 hover:text-rose-500 disabled:opacity-0 transition-colors disabled:pointer-events-none"
        >
            <i data-lucide="chevron-left" class="w-4 h-4"></i> Kembali
        </button>
        <span class="font-medium text-sm">
            Pertanyaan <span x-text="currentIndex + 1"></span> dari <span x-text="total"></span>
        </span>
    </div>

    <div class="w-full h-2 bg-slate-200 rounded-full overflow-hidden">
        <div class="h-full bg-rose-500 transition-all duration-500 ease-out"
             :style="'width: ' + (((currentIndex + 1) / total) * 100) + '%'"></div>
    </div>

    <!-- Question Cards -->
    <form id="quizForm" method="POST" action="{{ route('diagnose') }}" class="w-full relative min-h-[400px]">
        @csrf
        @foreach($questions as $index => $question)
            <div x-show="currentIndex === {{ $index }}"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-x-10"
                 x-transition:enter-end="opacity-100 translate-x-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 translate-x-0"
                 x-transition:leave-end="opacity-0 -translate-x-10"
                 class="absolute top-0 left-0 w-full bg-white rounded-3xl shadow-xl shadow-slate-100 border border-slate-100 overflow-hidden"
                 style="display: none;"> <!-- Hidden by default to prevent flash -->
                 
                 <!-- Hidden Input for Form Submission -->
                 <input type="hidden" name="answers[{{ $question['id'] }}]" :value="answers[{{ $question['id'] }}]">

                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6 leading-relaxed">
                        <span class="text-rose-500 mr-2">{{ $question['id'] }}.</span>
                        {{ $question['text'] }}
                    </h2>

                    <div class="space-y-3">
                        @foreach($question['options'] as $optIndex => $option)
                            <button type="button"
                                @click="selectOption({{ $question['id'] }}, '{{ $option['value'] }}')"
                                {{-- Use Alpine logic to determine styling based on selected value --}}
                                :class="answers[{{ $question['id'] }}] === '{{ $option['value'] }}' 
                                    ? 'border-rose-500 bg-rose-50 text-rose-900' 
                                    : 'border-slate-100 bg-white hover:border-rose-200 hover:bg-rose-50/50 text-slate-700 hover:text-slate-900'"
                                class="w-full text-left p-4 rounded-xl border-2 transition-all duration-200 flex items-center justify-between group">
                                
                                <div class="flex items-center gap-4">
                                    <div :class="answers[{{ $question['id'] }}] === '{{ $option['value'] }}' 
                                        ? 'bg-rose-500 text-white' 
                                        : 'bg-slate-100 text-slate-500 group-hover:bg-rose-100 group-hover:text-rose-600'"
                                        class="w-8 h-8 rounded-full flex items-center justify-center font-semibold text-sm transition-colors">
                                        {{ chr(65 + $optIndex) }}
                                    </div>
                                    <span class="font-medium text-lg">{{ $option['text'] }}</span>
                                </div>
                                
                                <template x-if="answers[{{ $question['id'] }}] === '{{ $option['value'] }}'">
                                    <i data-lucide="check-circle-2" class="w-6 h-6 text-rose-500"></i>
                                </template>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </form>
</div>
@endsection

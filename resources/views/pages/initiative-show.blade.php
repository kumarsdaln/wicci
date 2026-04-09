@extends('layouts.app')
@section('title', $initiative->title . ' – WICCI NPWC')
@section('meta_description', $initiative->summary)

@section('content')
<section class="page-header"><div class="page-header-pattern"></div><div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 text-center"><p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3">{{ $initiative->category ?: 'Initiative' }}</p><h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">{{ $initiative->title }}</h1><p class="text-white" style="opacity:.85">{{ $initiative->summary }}</p></div></section>
<section class="py-16"><div class="max-w-4xl mx-auto px-4 sm:px-6"><div class="card p-8"><div style="color:var(--text-muted);line-height:1.9;white-space:pre-line">{{ $initiative->details ?: $initiative->summary }}</div></div>@if($related->isNotEmpty())<div class="mt-10"><h2 class="text-2xl font-bold mb-4">Related Initiatives</h2><div class="grid md:grid-cols-3 gap-4">@foreach($related as $item)<a href="{{ route('initiatives.show', $item->slug) }}" class="card p-5 block"><h3 class="font-semibold mb-2">{{ $item->title }}</h3><p class="text-sm" style="color:var(--text-muted)">{{ \Illuminate\Support\Str::limit($item->summary, 90) }}</p></a>@endforeach</div></div>@endif<div class="mt-8"><a href="{{ route('initiatives') }}" class="btn-secondary">← Back to Initiatives</a></div></div></section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

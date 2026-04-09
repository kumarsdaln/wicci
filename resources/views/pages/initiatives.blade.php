@extends('layouts.app')
@section('title','Initiatives & Programs – WICCI NPWC')
@section('meta_description','Explore WICCI NPWC mental health initiatives and programs across India.')

@section('content')
<section class="page-header"><div class="page-header-pattern"></div><div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center"><p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3">Programs</p><h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Initiatives</h1><p class="text-white max-w-2xl mx-auto" style="opacity:.85">National programs and interventions led by NPWC for mental wellbeing.</p></div></section>
<section class="py-16"><div class="max-w-7xl mx-auto px-4 sm:px-6"><div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">@forelse($initiatives as $item)<article class="card card-lg p-6"><div class="flex items-center justify-between mb-3"><span class="tag tag-primary">{{ $item->category ?: 'Initiative' }}</span><span class="text-xs" style="color:var(--text-muted)">#{{ $item->sort_order }}</span></div><h3 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">{{ $item->title }}</h3><p class="text-sm mb-4" style="color:var(--text-muted)">{{ \Illuminate\Support\Str::limit($item->summary, 155) }}</p><a href="{{ route('initiatives.show', $item->slug) }}" class="btn-secondary btn-sm">Read More</a></article>@empty<div class="col-span-full text-center py-10" style="color:var(--text-muted)">No initiatives published yet.</div>@endforelse</div><div class="mt-8">{{ $initiatives->links() }}</div></div></section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

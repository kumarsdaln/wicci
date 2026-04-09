@extends('layouts.app')
@section('title','Media & Gallery – WICCI NPWC')
@section('meta_description','Photos, videos, and press coverage from WICCI NPWC events and programs.')

@section('content')
<section class="page-header"><div class="page-header-pattern"></div><div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center"><p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3">Our Moments</p><h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Media & Gallery</h1><p class="text-white max-w-xl mx-auto" style="opacity:.85">Photos, videos, and press updates from NPWC programs.</p></div></section>
<section class="py-16"><div class="max-w-7xl mx-auto px-4 sm:px-6"><div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">@forelse($mediaItems as $item)<article class="card card-lg p-6"><div class="flex items-center justify-between mb-3"><span class="tag tag-teal">{{ ucfirst($item->media_type) }}</span><span class="text-xs" style="color:var(--text-muted)">{{ optional($item->published_at)->format('d M Y') ?: '-' }}</span></div><h3 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">{{ $item->title }}</h3><p class="text-sm mb-4" style="color:var(--text-muted)">{{ \Illuminate\Support\Str::limit($item->summary, 140) }}</p><div class="flex gap-2"><a href="{{ route('media.show', $item->slug) }}" class="btn-secondary btn-sm">View</a>@if($item->external_url)<a href="{{ $item->external_url }}" target="_blank" rel="noopener" class="btn-primary btn-sm">Open Link</a>@endif</div></article>@empty<div class="col-span-full text-center py-10" style="color:var(--text-muted)">No media updates published yet.</div>@endforelse</div><div class="mt-8">{{ $mediaItems->links() }}</div></div></section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

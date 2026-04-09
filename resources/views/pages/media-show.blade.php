@extends('layouts.app')
@section('title', $media->title . ' – WICCI NPWC')
@section('meta_description', $media->summary)

@section('content')
<section class="page-header"><div class="page-header-pattern"></div><div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 text-center"><p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3">{{ ucfirst($media->media_type) }}</p><h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">{{ $media->title }}</h1><p class="text-white" style="opacity:.85">{{ $media->summary }}</p></div></section>
<section class="py-16"><div class="max-w-4xl mx-auto px-4 sm:px-6"><div class="card p-8">@if($media->external_url)<p class="mb-4"><a href="{{ $media->external_url }}" target="_blank" rel="noopener" class="btn-primary btn-sm">Open Original Link</a></p>@endif<div style="color:var(--text-muted);line-height:1.9;white-space:pre-line">{{ $media->content ?: $media->summary }}</div></div>@if($related->isNotEmpty())<div class="mt-10"><h2 class="text-2xl font-bold mb-4">Related {{ ucfirst($media->media_type) }}</h2><div class="grid md:grid-cols-3 gap-4">@foreach($related as $item)<a href="{{ route('media.show', $item->slug) }}" class="card p-5 block"><h3 class="font-semibold mb-2">{{ $item->title }}</h3><p class="text-sm" style="color:var(--text-muted)">{{ \Illuminate\Support\Str::limit($item->summary, 90) }}</p></a>@endforeach</div></div>@endif<div class="mt-8"><a href="{{ route('media') }}" class="btn-secondary">← Back to Media</a></div></div></section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
